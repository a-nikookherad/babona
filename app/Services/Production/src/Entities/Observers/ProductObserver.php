<?php

namespace Production\Entities\Observers;


use Attachment\Attachment;
use Production\Entities\Models\Product;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     */
    public function created(Product $product): void
    {

    }

    /**
     * Handle the Product "updated" event.
     */
    public function updated(Product $product): void
    {
        //
    }

    /**
     * Handle the Product "deleted" event.
     */
    public function deleted(Product $product): void
    {
        $this->deleteAttachments($product);
    }

    /**
     * Handle the Product "restored" event.
     */
    public function deleting(Product $product): void
    {
        dd(453);
        $this->deleteAttachments($product);
    }

    /**
     * Handle the Product "force deleted" event.
     */
    public function forceDeleted(Product $product): void
    {
        $this->deleteAttachments($product);
    }

    private function deleteAttachments(Product $product): void
    {
        Attachment::setAttachment($product->thumbnail)
            ->deleteFileFromStorage();
        $product->thumbnail->delete();

        foreach ($product->attachments() as $attachment) {
            Attachment::setAttachment($attachment)
                ->deleteFileFromStorage();
            $attachment->delete();
        }
//        $product->attachments->delete();
    }
}
