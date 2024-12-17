<?php

namespace Production\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "slug" => "required|string|max:150|min:2",
            "fa_name" => "nullable|string|max:250|min:2",
            "description" => "nullable|string|min:20|max:350",
            "status" => "required|in:waiting,published,archive",
            "jsonld" => "nullable|json",
            "parent_id" => "nullable|numeric|exists:categories,id",
        ];
    }
}
