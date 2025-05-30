<?php

namespace App\Observers;

use App\Models\Product;

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


    public function deleted(Product $product): void
    {
        $product->productDetails()->delete();
        $this->deleteAttachments($product);
    }

    public function forceDeleted(Product $product): void
    {
        $product->productDetails()->delete();
        $this->deleteAttachments($product);
    }

    private function deleteAttachments(Product $product): void
    {
/*        Attachment::setAttachment($product->thumbnail)
            ->deleteFileFromStorage()
            ->delete();*/

/*        foreach ($product->attachments as $attachment) {
            Attachment::setAttachment($attachment)
                ->deleteFileFromStorage()
                ->delete();
        }*/
    }
}
