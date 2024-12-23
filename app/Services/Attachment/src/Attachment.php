<?php

namespace Attachment;

use Attachment\Contracts\AttachmentServiceInterface;
use Illuminate\Support\Facades\Facade;

/**
 * @method static AttachmentService setAttachment($attachment = null):Attachment
 * @method static AttachmentService deleteFileFromStorage():Attachment
 * @method static AttachmentService setData($file, $path, $title, $fileName = null, $alt = null):Attachment
 * @method static AttachmentService update()
 * @method static AttachmentService store()
 * @method static AttachmentService allStorageAllocatedSize()
 */
class Attachment extends Facade
{
    public static function getFacadeAccessor()
    {
        return AttachmentServiceInterface::class;
    }
}
