<?php

namespace App\Containers\AppSection\Categories\UI\WEB\Controllers;

use App\Containers\AppSection\Base\Enum\EnumBase;
use App\Containers\AppSection\Base\Libraries\BreadCrumbGender;
use App\Containers\AppSection\Base\UI\WEB\Controllers\BaseAdminController;
use App\Containers\AppSection\Categories\UI\WEB\Requests\CreateCategoriesRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\DeleteCategoriesRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\GetAllCategoriesRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\FindCategoriesByIdRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\UpdateCategoriesRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\StoreCategoriesRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\EditCategoriesRequest;
use App\Containers\AppSection\Categories\Actions\CreateCategoriesAction;
use App\Containers\AppSection\Categories\Actions\FindCategoriesByIdAction;
use App\Containers\AppSection\Categories\Actions\GetAllCategoriesAction;
use App\Containers\AppSection\Categories\Actions\UpdateCategoriesAction;
use App\Containers\AppSection\Categories\Actions\DeleteCategoriesAction;
use App\Containers\AppSection\Categories\Enums\EnumCategory;
use App\Containers\AppSection\Categories\UI\WEB\Requests\UpdateFieldCategoriesRequest;
use App\Ship\Core\Libraries\UploadImageFile;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Support\Facades\DB;

class CategoriesController extends BaseAdminController
{
    public function __construct(BreadCrumbGender $breadCrumbGender)
    {
        parent::__construct($breadCrumbGender);
        view()->share('title', 'Quản trị Danh Mục');
        view()->share('listStatus', EnumBase::LIST_STATUS);
        view()->share('listTypes', EnumCategory::LIST_TYPES);
    }
    public function index(GetAllCategoriesRequest $request, GetAllCategoriesAction $action)
    {
        app(BreadCrumbGender::class)->setList([
            [
                'lable' => 'Trang chủ',
                'href' => route('admin_default_page')
            ],
            [
                'lable' => 'Danh sách Danh Mục',
                'href' => '#'
            ]
        ])->setTitle('Quản trị Danh Mục');
        $categories = $action->setWithData(['desc'])
            ->setWithCount(['manages'])
            ->setConditions($request->all())
            ->run($request->hasPagination ?? true, $request->limit ?? 10);
        return view('appSection@categories::index', [
            'categories' => $categories
        ]);
    }

    public function addForm()
    {
        return view('appSection@categories::form');
    }

    public function editForm(EditCategoriesRequest $request, FindCategoriesByIdAction $action)
    {
        $category = $action->run($request->id);
        return view('appSection@categories::form', [
            'category' => $category
        ]);
    }

    public function store(StoreCategoriesRequest $request, CreateCategoriesAction $action)
    {
        DB::beginTransaction();
        try {
            if ($request->file('avatar')) {
                $request->merge([
                    'avatar' => app(UploadImageFile::class)->setFile($request->file('avatar'))->setPath(public_path('upload/category'))->upload()
                ]);
            }
            $action->run($request->all());
            DB::commit();
            return redirect(route('admin_categories_list'))->with('success',);
        } catch (Exception $e) {
            return back()->withInput($request->all())->with('failed', $e->getMessage());
        }
    }



    public function update(UpdateCategoriesRequest $request, UpdateCategoriesAction $action)
    {
        $data = $request->all();
        if ($request->file('avatar')) {
            $this->uploadFile($request->file('avatar'), $data, 'avatar', 'category');
        }
        $action->run($request->id, $data);
        return redirect(route('admin_categories_list'))->with('success', 'Cập nhật thành công');
    }

    public function destroy(DeleteCategoriesRequest $request)
    {
        $result = app(DeleteCategoriesAction::class)->run($request);
    }

    public function updateField(UpdateFieldCategoriesRequest $request)
    {
        DB::beginTransaction();
        try{
            app(UpdateCategoriesAction::class)->run($request->id, [
                $request->field => $request->value
            ]);
            DB::commit();
            return response([
                'success' => true
            ], 200);
         }catch(Exception $e){
        }
    }

    public function ajax(GetAllCategoriesAction $action)
    {
        $categories = $action->setWithData(['desc'])
            ->setWithCount(['manages'])
            ->setConditions(request()->all())
            ->run(request('hasPagination', true) ?? true, request('limit', 10));
        return response()->json($categories->map(function ($category) {
            return [
                'id' => $category->id,
                'title' => $category->desc->title
            ];
        }));
    }

    public function pdf()
    {
        $pdf = Pdf::loadView('appSection@categories::pdf', []);
        return $pdf->download('invoice.pdf');
    }
}
