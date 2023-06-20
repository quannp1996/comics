<?php

namespace App\Containers\AppSection\Categories\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request;
use Illuminate\Validation\Rule;

class StoreCategoriesRequest extends Request
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        // 'id',
    ];

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'category_description.*.title' => ['required'],
            'type' => ['required', Rule::in(1, 2)]
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function messages()
    {
        return [
            'category_description.1.title.required' => 'Tiêu đề là trường bắt buộc',
            'category_description.2.title.required' => 'Tiêu đề là trường bắt buộc',
            'type.required' => 'Loại truyện là trường bắt buộc'
        ];
    }
    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }

}
