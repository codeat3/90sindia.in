<?php

use App\Models\Playlist;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->string('id')->primary();

            $table->string('title')->nullable();
            $table->string('slug')->nullable()->index();
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->json('meta')->nullable();

            $table->timestamps();
        });

        Schema::create('playlist_video', function (Blueprint $table) {
            $table->string('playlist_id')->index();
            $table->string('video_id')->index();
            $table->integer('position')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
