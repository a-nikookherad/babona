<?php

namespace Attachment\Contracts;

use Attachment\AttachmentService;

interface AttachmentServiceInterface
{
    public function setAttachment($attachment = null): AttachmentService;

    public function deleteFileFromStorage(): AttachmentService;

    public function setData($file, $path, $title, $fileName = null, $alt = null): AttachmentService;

    public function update();

    public function store();
}
