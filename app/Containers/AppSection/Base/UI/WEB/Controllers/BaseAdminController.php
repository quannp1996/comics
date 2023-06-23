<?php

namespace App\Containers\AppSection\Base\UI\WEB\Controllers;

use App\Containers\AppSection\Base\Libraries\BreadCrumbGender;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Core\Libraries\UploadImageFile;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;

class BaseAdminController extends WebController
{
    protected array $materialCss;
    protected array $materialJs;
    protected Collection $languages;
    protected User $user;
    public BreadCrumbGender $breadcrumb;
    public function __construct(BreadCrumbGender $breadcrumb)
    {
        $this->materialCss = array_map(function ($item) {
            return filter_var($item, FILTER_VALIDATE_URL) ? $item : asset($item);
        }, config('appSection-base.admin.css'));

        $this->materialJs = array_map(function ($item) {
            return filter_var($item, FILTER_VALIDATE_URL) ? $item : asset($item);
        }, config('appSection-base.admin.js'));

        $this->languages = collect([
            [
                'id' => 1,
                'title' => 'Tiếng Việt'
            ],
            [
                'id' => 2,
                'title' => 'Tiếng Anh'
            ]
        ]);
        $this->breadcrumb = $breadcrumb;
        /**
         * Add Css to all View
         */
        view()->share('materialCss', $this->materialCss);
        view()->share('materialJs', $this->materialJs);
        view()->share('languages', $this->languages);
        $this->middleware(function ($request, $next) {
            /**
             * Add Admin User to All View
             */
            if (auth()->user()) {
                $this->user = auth()->user();
                view()->share('user', $this->user);
            }
            return $next($request);
        });
    }

    public function uploadFile(UploadedFile $file, array &$request, string $key, string $folder)
    {
        $filename = app(UploadImageFile::class)
            ->setFile($file)
            ->setPath($folder)
            ->upload();
        $request[$key] = $filename;
        return;
    }
}
