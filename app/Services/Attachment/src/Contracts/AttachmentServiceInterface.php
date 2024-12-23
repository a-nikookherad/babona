<?php

namespace Attachment\Contracts;

use Attachment\AttachmentService;

interface AttachmentServiceInterface
{
    public function setAttachment($attachment = null): AttachmentService;

    public function prepareAttributes($file, $path, $title, $fileName = null, $alt = null): AttachmentService;

    public function getAttachment();
}
