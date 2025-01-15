<?php

namespace App\Http\Requests\production\Products;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages(): array
    {
        $message = [
            "slug.unique" => "این محصول تکراری می باشد و از قبل وجود دارد"
        ];
        return array_merge($message, parent::messages());
    }

    public function rules(): array
    {
        return [
            "slug" => [
                "string",
                "max:255",
                "min:2",
                Rule::unique("products")
                    ->where(function ($query) {
                        $query->where("slug", $this->slug)
                            ->where("category_id", $this->category_id)
                            ->where("status", $this->status);
                    })
            ],
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
            "meta_tag_title" => "nullable|string|max:100|min:3",
            "meta_tag_description" => "nullable|string|max:250|min:15",
            "meta_tag_keywords" => "nullable|string|max:250|min:2",
            "category_id" => "required|exists:categories,id",

            "product_details.*.size" => "nullable",
            "product_details.*.color" => "nullable",
            "product_details.*.quantity" => "required|numeric",
            "product_details.*.price" => "required|numeric",
            "product_details.*.net_price" => "nullable|numeric",
            "product_details.*.discount" => "nullable|numeric",
            "product_details.*.discount_percentage" => "nullable|numeric",
            "product_details.*.discount_expired_at" => "date_format:Y-m-d H:i:s",

            "tag_name" => "nullable|string|max:50|min:3",
            "tag_description" => "nullable|string|max:255|min:3",

            "thumbnail" => "required|file|mimetypes:image/png,image/jpg,image/jpeg",
            "attachments.*" => "required|file|mimetypes:image/png,image/jpg,image/jpeg",
        ];
    }
}
