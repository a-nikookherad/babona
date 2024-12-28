<?php

namespace Attachment\Tests;

use Attachment\Attachment;
use Attachment\Entities\Models\File;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AttachmentTest extends TestCase
{
    public function _test_attachment_service(): void
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
        $path = "test";
        $attachment = $this->assertCreateAttachment($request, $path);

        $this->assertUpdateAttachment($attachment, $request, $path);

        $this->assertDeleteAttachment($attachment);
    }

    public function _setUp(): void
    {
        parent::setUp();
//        $this->withoutExceptionHandling();
        File::up();
    }

    public function _tearDown(): void
    {
        File::down();
        parent::tearDown();
    }

    private function assertDeleteAttachment($attachment): void
    {
        Attachment::setAttachment($attachment)
            ->deleteFileFromStorage()
            ->delete();
        Storage::disk("public")
            ->assertMissing($attachment->path . DIRECTORY_SEPARATOR . $attachment->full_name);
    }

    private function assertUpdateAttachment($attachment, \Illuminate\Http\Request $request, string $path)
    {
        $attachment = Attachment::setAttachment($attachment)
            ->deleteFileFromStorage()
            ->prepareAttributes($request->file("thumbnail"), $path, "thumbnail2", "test2")
            ->storeFileToStorage()
            ->save();

        Storage::disk("public")
            ->assertExists($attachment->path . DIRECTORY_SEPARATOR . $attachment->full_name);
        $this->assertNotEmpty(File::query()
            ->where([
                ["attachable_type", "=", $attachment->attachable_type],
                ["attachable_id", "=", $attachment->attachable_id],
                ["title", "=", "thumbnail2"],
                ["name", "=", "test2"],
            ])
            ->first());
        return $attachment;
    }

    private function assertCreateAttachment(\Illuminate\Http\Request $request, string $path)
    {
        $attachment = Attachment::setAttachment()
            ->prepareAttributes($request->file("thumbnail"), $path, "thumbnail", "test")
            ->storeFileToStorage()
            ->getAttachment();
        $attachment->attachable_type = "for_test";
        $attachment->attachable_id = 1;
        $attachment->save();
        Storage::disk("public")
            ->assertExists($attachment->path . DIRECTORY_SEPARATOR . $attachment->full_name);
        $this->assertNotEmpty(File::query()
            ->where([
                ["attachable_type", "=", $attachment->attachable_type],
                ["attachable_id", "=", $attachment->attachable_id],
            ])
            ->first());
        return $attachment;
    }
}
