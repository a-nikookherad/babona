<?php

namespace Attachment\Tests\Feature;

use Attachment\Attachment;
use Attachment\Entities\Models\File;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AttachmentTest extends TestCase
{
    public function _test_attachment(): void
    {
        $file = UploadedFile::fake()->image("test.jpg");
        $request = new \Illuminate\Http\Request;
        $request = $request->createFromBase(
            \Symfony\Component\HttpFoundation\Request::create(
                "test",
                "post",
                [],
                [],
                ["thumbnail" => $file],
                [],

            )
        );
        $path = "categories/test";
        $attachment = Attachment::
        setData($request->file("thumbnail"), $path, "thumbnail", "test")
            ->store();
        $attachment->attachable_type = "for_test";
        $attachment->attachable_id = 1;
        $attachment->save();
        Storage::disk("public")
            ->assertExists($attachment->path . DIRECTORY_SEPARATOR . $attachment->full_name);

        $attachment = Attachment::setAttachment($attachment)
            ->deleteFileFromStorage()
            ->setData($request->file("thumbnail"), $path, "thumbnail2", "test2")
            ->update();
        Storage::disk("public")
            ->assertExists($attachment->path . DIRECTORY_SEPARATOR . $attachment->full_name);

        Storage::disk("public")
            ->delete($attachment->path . DIRECTORY_SEPARATOR . $attachment->full_name);

        Storage::disk("public")
            ->assertMissing($attachment->path . DIRECTORY_SEPARATOR . $attachment->full_name);
    }

    public function setUp(): void
    {
        parent::setUp();
//        $this->withoutExceptionHandling();
        File::up();
    }

    public function tearDown(): void
    {
        File::down();
        parent::tearDown();
    }
}
