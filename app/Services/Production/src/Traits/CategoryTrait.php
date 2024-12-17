<?php

namespace Production\Traits;

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

        $this->storeFile($category, $thumbnail, $alt = $request->fa_name);
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

        if (!$category->thumbnail) {
            $this->storeFile($category, $thumbnail, $alt = $request->get("fa_name", $category->fa_name));
            return $category;
        }

        $extension = $thumbnail->getClientOriginalExtension();
        $attachment = $category->thumbnail;
        $attachment->extension = $extension;
        $attachment->alt = $request->get("fa_name", $category->fa_name);
        $attachment->save();

        $file = $category->id . "." . $extension;
        $junkFile = $attachment->absolute_path . DIRECTORY_SEPARATOR . $category->id . "." . $attachment->extension;
        $this->storeFileToFilesystem($thumbnail, $file, $junkFile);
        return $category;
    }

    public function destroyCategory($id)
    {
        $category = CategoryRepo::getById($id, ["thumbnail"]);
        if (!$category->thumbnail) {
            return CategoryRepo::delete($id);
        }
        $attachment = $category->thumbnail;

        $file = $attachment->absolute_path . DIRECTORY_SEPARATOR . $attachment->file_name . "." . $attachment->extension;
        if (file_exists($file)) {
            //delete thumbnail from filesystem
            unlink($file);
        }

        $attachment->delete();
        return CategoryRepo::delete($id);
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

    public function addCategory(array $data)
    {
        return CategoryRepo::store($data);
    }
}
