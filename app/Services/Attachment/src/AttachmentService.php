<?php

namespace Attachment;

use App\Services\Attachment\src\Traits\AttachmentTrait;
use App\Services\Attachment\src\Traits\StorageTrait;
use Attachment\Contracts\AttachmentServiceInterface;
use Attachment\Entities\Models\File;

class AttachmentService implements AttachmentServiceInterface
{
    use AttachmentTrait, StorageTrait;

    private $attachment;
    private $file;

    public function setAttachment($attachment = null): AttachmentService
    {
        $this->attachment = $attachment ?? new File();
        return $this;
    }

    public function prepareAttributes($file, $path, $title, $fileName = null, $alt = null): AttachmentService
    {
        $this->file = $file;
        $this->attachment->title = $title;
        $this->attachment->path = trim($path, "/");
        $this->attachment->extension = $file->getClientOriginalExtension();
        $this->attachment->name = $fileName ?? str_replace("." . $this->attachment->extension, "", $file->getClientOriginalName());
        $this->attachment->full_name = $this->attachment->name . "." . $this->attachment->extension;
        $this->attachment->mime_type = $file->getClientMimeType();
        $this->attachment->alt = $alt ?? $fileName;
        $this->attachment->size = $file->getSize();
        return $this;
    }

    public function getAttachment()
    {
        return $this->attachment;
    }

}
