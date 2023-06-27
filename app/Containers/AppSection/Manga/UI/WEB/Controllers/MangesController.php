<?php

namespace App\Containers\AppSection\Manga\UI\WEB\Controllers;

use App\Containers\AppSection\Base\Enum\EnumBase;
use App\Containers\AppSection\Base\Libraries\BreadCrumbGender;
use App\Containers\AppSection\Base\UI\WEB\Controllers\BaseAdminController;
use App\Containers\AppSection\Categories\Actions\GetAllCategoriesAction;
use App\Containers\AppSection\Categories\Enums\EnumCategory;
use App\Containers\AppSection\Manga\UI\WEB\Requests\CreateMangaRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\DeleteMangaRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\GetAllMangasRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\FindMangaByIdRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\UpdateMangaRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\StoreMangaRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\EditMangaRequest;
use App\Containers\AppSection\Manga\Actions\CreateMangaAction;
use App\Containers\AppSection\Manga\Actions\FindMangaByIdAction;
use App\Containers\AppSection\Manga\Actions\GetAllMangasAction;
use App\Containers\AppSection\Manga\Actions\UpdateMangaAction;
use App\Containers\AppSection\Manga\Actions\DeleteMangaAction;
use Exception;
use Illuminate\Support\Facades\DB;

class MangesController extends BaseAdminController
{
    use TraitChapter;

    public function __construct(BreadCrumbGender $breadcrumb)
    {
        parent::__construct($breadcrumb);
        $categories = app(GetAllCategoriesAction::class)->setConditions([
            'status' => EnumBase::ENABLE_STATUS,
            'type' => EnumCategory::CATEGORY_MANGA
        ])->run(false, 1000);
        view()->share('categories', $categories);
        view()->share('title', 'Truyện Tranh');
    }
    public function index(GetAllMangasRequest $request, GetAllMangasAction $action)
    {
        $this->breadcrumb->setTitle('Quản trị Truyện Tranh')->setList(
            [
                [
                    'lable' => 'Trang chủ',
                    'href' => route('admin_default_page')
                ],
                [
                    'lable' => 'Danh sách Truyện',
                    'href' => route('admin_manges_list')
                ]
            ]
        );
        $mangas = $action->setWithData([
            'desc', 'categories', 'categories.desc'
        ])->setWithCount(['chapters'])->setConditions($request->all())->run($request->hasPagination ?? true, $request->limit ?? 10);
        return view('appSection@manga::index', [
            'mangas' => $mangas
        ]);
    }

    public function show(FindMangaByIdRequest $request)
    {
        $manga = app(FindMangaByIdAction::class)->run($request->id);
    }

    public function create(CreateMangaRequest $request)
    {
        $this->breadcrumb->setTitle('Thêm mới Truyện Tranh')->setList([
            [
                'lable' => 'Trang chủ',
                'href' => route('admin_default_page')
            ],
            [
                'lable' => 'Danh sách Truyện',
                'href' => route('admin_manges_list')
            ]
        ]);
        return view('appSection@manga::form');
    }

    public function store(StoreMangaRequest $request, CreateMangaAction $action)
    {
        DB::beginTransaction();
        try {
            $data = $request->all();
            if ($request->file('avatar')) $this->uploadFile($request->file('avatar'), $data, 'avatar', 'manga');
            $action->run($data);
            DB::commit();
            return redirect(route('admin_manges_list'))->with('success', 'Tạo mới câu Truyện thành công!');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->withInput($request->all())->withErrors($e->getMessage());
        }
    }

    public function edit(EditMangaRequest $request, FindMangaByIdAction $action)
    {
        $manga = $action->setWithCount(['chapters'])->setWithData(['all_desc'])->run($request->id);
        $this->breadcrumb->setTitle('Thêm mới Truyện Tranh')->setList([
            [
                'lable' => 'Trang chủ',
                'href' => route('admin_default_page')
            ],
            [
                'lable' => 'Danh sách Truyện',
                'href' => route('admin_manges_list')
            ]
        ]);
        return view('appSection@manga::form', [
            'manga' => $manga
        ]);
    }

    public function update(UpdateMangaRequest $request)
    {
        $manga = app(UpdateMangaAction::class)->run($request);
    }

    public function delete(DeleteMangaRequest $request)
    {
        $result = app(DeleteMangaAction::class)->run($request);
        return response([], 200);
    }
}
