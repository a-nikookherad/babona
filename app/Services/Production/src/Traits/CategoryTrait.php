<?php

namespace Production\Traits;

use Attachment\Attachment;
use Production\Entities\Repositories\category\CategoryRepo;

trait CategoryTrait
{
    public function createCategory($request)
    {
        $data = $request->only([
            "slug",
            "name",
            "fa_name",
            "description",
            "status",
            "jsonld",
            "parent_id",
        ]);
        $category = CategoryRepo::store($data);
        $thumbnail = $request->file("thumbnail");
        if (!$thumbnail || !$category->exists) {
            return $category;
        }
        $categoryPath = config("production.category_thumbnail_storage_path");
        $attachment = Attachment::setAttachment()
            ->prepareAttributes($thumbnail, $categoryPath, "thumbnail", $category->id, $request->fa_name)
            ->storeFileToStorage()
            ->getAttachment();

        $category->thumbnail()->save($attachment);
        return $category;
    }

    public function editCategory($id, $request)
    {
        $data = $request->only([
            "slug",
            "name",
            "fa_name",
            "description",
            "status",
            "jsonld",
            "parent_id",
        ]);

        CategoryRepo::update($id, $data);
        $category = CategoryRepo::getById($id, ["thumbnail"]);
        $thumbnail = $request->file("thumbnail");
        if (!$thumbnail) {
            return $category;
        }
        $categoryPath = config("production.category_thumbnail_storage_path");
        $attachment = Attachment::setAttachment($category->thumbnail)
            ->deleteFileFromStorage()
            ->prepareAttributes($thumbnail, $categoryPath, "thumbnail", $category->id, $category->fa_name)
            ->storeFileToStorage()
            ->getAttachment();
        if ($category->thumbnail) {
            $attachment->update();
        } else {
            $category->thumbnail()->save($attachment);
        }
        return $category;
    }

    public function destroyCategory($category)
    {
        return $category->delete();
    }

    public function categories()
    {
        return CategoryRepo::all();
    }

    public function categoriesPaginate($perPage)
    {
        return CategoryRepo::paginate($perPage);
    }

    public function categoriesByPluck($pluck)
    {
        return CategoryRepo::getByPluck($pluck);
    }

    public function category($id, $with = [])
    {
        return CategoryRepo::getById($id, $with);
    }
}
