<?php

use App\Models\Show;
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
        Schema::create('playlists', function (Blueprint $table) {
            $table->string('id')->primary();

            $table->string('title')->nullable();
            $table->string('slug')->nullable()->index();
            $table->foreignUlid('show_id')->index();
            $table->string('channel_id')->nullable()->index();
            $table->string('url');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlists');
    }
};
