<?php

namespace App\Containers\AppSection\Tag\UI\WEB\Controllers;

use App\Containers\AppSection\Base\UI\WEB\Controllers\BaseAdminController;
use App\Containers\AppSection\Tag\UI\WEB\Requests\CreateTagRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\DeleteTagRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\GetAllTagsRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\FindTagByIdRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\UpdateTagRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\StoreTagRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\EditTagRequest;
use App\Containers\AppSection\Tag\Actions\CreateTagAction;
use App\Containers\AppSection\Tag\Actions\FindTagByIdAction;
use App\Containers\AppSection\Tag\Actions\GetAllTagsAction;
use App\Containers\AppSection\Tag\Actions\UpdateTagAction;
use App\Containers\AppSection\Tag\Actions\DeleteTagAction;
use App\Ship\Parents\Controllers\WebController;
use Exception;
use Illuminate\Support\Facades\DB;

class TagController extends BaseAdminController
{
    public function index(GetAllTagsRequest $request)
    {
        $this->breadcrumb->setTitle('Danh sách từ khóa');
        $tags = app(GetAllTagsAction::class)->setConditions($request->all())->run();
        return view('appSection@tag::index', [
            'tags' => $tags
        ]);
    }

    public function show(FindTagByIdRequest $request)
    {
        $tag = app(FindTagByIdAction::class)->run($request);
        // ..
    }

    public function create(CreateTagRequest $request)
    {
        // ..


    }

    public function store(StoreTagRequest $request)
    {
        DB::beginTransaction();
        try {
            app(CreateTagAction::class)->run($request->all());
            DB::commit();
            return redirect(route('admin_tags_list'))->with('success', 'Tạo mới từ khóa thành công');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('failed', $e->getMessage());
        }
    }

    public function edit(EditTagRequest $request)
    {
        $tag = app(FindTagByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateTagRequest $request)
    {
        DB::beginTransaction();
        try {
            app(UpdateTagAction::class)->run($request->id, $request->all());
            DB::commit();
            return redirect(route('admin_tags_list'))->with('success', 'Cập nhật từ khóa thành công');
        } catch (Exception $e) {
            DB::rollBack();
            return back()->with('failed', $e->getMessage());
        }
    }

    public function destroy(DeleteTagRequest $request)
    {
        $result = app(DeleteTagAction::class)->run($request);
        // ..
    }
}
