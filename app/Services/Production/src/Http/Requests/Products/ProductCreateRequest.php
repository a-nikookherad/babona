<?php

namespace Production\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            "slug" => "string|max:255|min:2",
            "name" => "string|max:255|min:2",
            "fa_name" => "string|max:255|min:2",
            "material" => "nullable|string|max:255|min:2",
            "style" => "nullable|string|max:255|min:2",
            "code" => "nullable|string|max:100|min:2",
            "barcode" => "nullable|string|max:255|min:2",
            "status" => "nullable|in:upcoming,waiting,published,archive",
            "brief" => "nullable|string|max:255|min:15",
            "description" => "nullable|string|max:2500|min:20",
            "jsonld" => "nullable|string|max:500",
            "category_id" => "required|exists:categories,id",

//            "color" => "nullable|string|max:30|min:2",
//            "size" => "nullable|string|max:50|min:2",
//            "quantity" => "required|numeric",
//            "is_active" => "nullable|boolean",
//            "add_by_user_id" => "nullable|exists:users,id",

            "price" => "required|array",
            "wallet_id" => "nullable|numeric",
            "discount" => "nullable|numeric",
            "expired_at" => "nullable|date_format:Y-m-d H:i:s",

            "tag_name" => "nullable|string|max:50|min:3",
            "tag_description" => "nullable|string|max:255|min:3",

            "thumbnail" => "required|file|mimetypes:image/png,image/jpg,image/jpeg",
            "attachments.*" => "required|file|mimetypes:image/png,image/jpg,image/jpeg",
        ];
    }
}
