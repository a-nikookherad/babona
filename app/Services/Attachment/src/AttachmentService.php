<?php

namespace Attachment;

use Attachment\Contracts\AttachmentServiceInterface;
use Attachment\Entities\Models\File;
use Illuminate\Support\Facades\Storage;

class AttachmentService implements AttachmentServiceInterface
{
    private $attachment;
    private $file;

    private function getInstance()
    {
        return $this->attachment ?? $this->attachment = new File();
    }

    public function setAttachment($attachment = null): AttachmentService
    {
        $this->attachment = $attachment;
        return $this;
    }

    public function deleteFileFromStorage(): AttachmentService
    {
        $attachment = $this->getInstance();
        $fileFullPath = $attachment->path . DIRECTORY_SEPARATOR . $attachment->full_name;
        Storage::disk("public")->delete($fileFullPath);
        return $this;
    }

    public function setData($file, $path, $title, $fileName = null, $alt = null): AttachmentService
    {
        $this->file = $file;
        $attachment = $this->getInstance();
        $attachment->title = $title;
        $attachment->path = trim($path, "/");
        $attachment->extension = $file->getClientOriginalExtension();
        $attachment->name = $fileName ?? str_replace("." . $attachment->extension, "", $file->getClientOriginalName());
        $attachment->full_name = $attachment->name . "." . $attachment->extension;
        $attachment->mime_type = $file->getClientMimeType();
        $attachment->alt = $alt ?? $fileName;
        $attachment->size = $file->getSize();
        return $this;
    }

    public function store()
    {
        $this->storeFileToStorage();
        return $this->attachment;
    }

    public function update()
    {
        $this->storeFileToStorage();
        //delete old attachment
        return $this->attachment;
    }

    private function storeFileToStorage(): AttachmentService
    {
        //store file in filesystem with a path which is "storage/app/public"
        Storage::disk("public")->putFileAs($this->attachment->path, $this->file, $this->attachment->full_name);
        return $this;
    }

    public function allStorageAllocatedSize()
    {
        return File::query()
            ->sum("size");
    }
}
