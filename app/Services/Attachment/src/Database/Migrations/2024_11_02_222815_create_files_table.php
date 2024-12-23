<?php

use Attachment\Entities\Models\File;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        File::up();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        File::down();
    }
};
