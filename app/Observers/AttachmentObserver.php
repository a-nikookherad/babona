<?php

namespace App\Observers;


use App\Models\File;

class AttachmentObserver
{
    /**
     * Handle the Attachment "created" event.
     */
    public function created(File $attachment): void
    {
    }

    /**
     * Handle the Attachment "updated" event.
     */
    public function updated(File $attachment): void
    {
        //
    }

    /**
     * Handle the Attachment "deleted" event.
     */
    public function deleted(File $attachment): void
    {
        \Attachment\Attachment::setAttachment($attachment)
            ->deleteFileFromStorage();
    }

    /**
     * Handle the Attachment "restored" event.
     */
    public function restored(File $attachment): void
    {
        //
    }

    /**
     * Handle the Attachment "force deleted" event.
     */
    public function forceDeleted(File $attachment): void
    {
        \Attachment\Attachment::setAttachment($attachment)
            ->deleteFileFromStorage();
    }
}
