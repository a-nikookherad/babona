<?php

namespace App\Services\Attachment\src\Traits;

trait AttachmentTrait
{
    public function save()
    {
        $this->attachment->save();
        return $this->attachment;
    }

    public function update()
    {
        $this->attachment->update();
        return $this->attachment;
    }

    public function delete()
    {
        $this->attachment->delete();
        return $this->attachment;
    }
}
