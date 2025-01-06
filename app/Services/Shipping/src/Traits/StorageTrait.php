<?php

namespace App\Services\Attachment\src\Traits;

use Attachment\AttachmentService;
use Attachment\Entities\Models\File;
use Illuminate\Support\Facades\Storage;

trait StorageTrait
{
    private $driver = "public";

    public function setDriver($driver)
    {
        $this->driver = $driver;
        return $this;
    }

    public function deleteFileFromStorage(): AttachmentService
    {
        Storage::disk($this->driver)
            ->delete($this->attachment->path . DIRECTORY_SEPARATOR . $this->attachment->full_name);
        return $this;
    }


    public function storeFileToStorage(): AttachmentService
    {
        //store file in filesystem with a path "storage/app/public" by default
        Storage::disk($this->driver)
            ->putFileAs($this->attachment->path, $this->file, $this->attachment->full_name);
        return $this;
    }

    public function allStorageAllocatedSize()
    {
        return File::query()
            ->sum("size");
    }
}
