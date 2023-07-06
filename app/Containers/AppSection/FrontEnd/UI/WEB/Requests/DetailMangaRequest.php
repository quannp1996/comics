<?php

namespace App\Containers\AppSection\FrontEnd\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request;

class DetailMangaRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        'slug',
    ];

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'slug' => ['required'],
        ];
    }
}