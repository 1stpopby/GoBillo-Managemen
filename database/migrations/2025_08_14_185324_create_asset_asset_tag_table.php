<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('asset_asset_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asset_id')->constrained('assets')->onDelete('cascade');
            $table->foreignId('asset_tag_id')->constrained('asset_tags')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['asset_id', 'asset_tag_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asset_asset_tag');
    }
};