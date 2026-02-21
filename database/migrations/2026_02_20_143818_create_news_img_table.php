<?php

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
        Schema::create('news_img', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('Img');
            $table->boolean('IsCover')->default(false);
            $table->unsignedInteger('News_ID')->index('news_id');

            $table->index(['News_ID'], 'news_id_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_img');
    }
};
