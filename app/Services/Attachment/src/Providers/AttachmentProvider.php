<?php

namespace Attachment\Providers;

use Attachment\AttachmentService;
use Attachment\Contracts\AttachmentServiceInterface;
use Attachment\Entities\Models\File;
use Attachment\Entities\Observers\AttachmentObserver;
use Illuminate\Support\ServiceProvider;

class AttachmentProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
//        $this->mergeConfigFrom(__DIR__ . "/../Config/attachment.php", "attachment");
        /*$this->publishes([
            __DIR__ . "/../Config/attachment.php" => config_path("attachment.php")
        ], "attachment_config");*/

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");

        File::observe(AttachmentObserver::class);

        $this->app->bind(AttachmentServiceInterface::class, AttachmentService::class);
    }
}

