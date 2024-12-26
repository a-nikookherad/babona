<?php

namespace Attachment;

use Attachment\Contracts\AttachmentServiceInterface;
use Illuminate\Support\Facades\Facade;

/**
 * @method static AttachmentService setAttachment($attachment = null):Attachment
 * @method static AttachmentService deleteFileFromStorage():Attachment
 * @method static AttachmentService prepareAttributes($file, $path, $title, $fileName = null, $alt = null): AttachmentService
 * @method static AttachmentService storeFileToStorage(): AttachmentService
 * @method static AttachmentService getAttachment()
 * @method static AttachmentService save()
 * @method static AttachmentService update()
 * @method static AttachmentService allStorageAllocatedSize()
 */
class Attachment extends Facade
{
    public static function getFacadeAccessor()
    {
        return AttachmentServiceInterface::class;
    }
}
