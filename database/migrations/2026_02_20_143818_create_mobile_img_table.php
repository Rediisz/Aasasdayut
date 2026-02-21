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
        Schema::create('mobile_img', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->unsignedInteger('Mobile_ID')->index('mobileid');
            $table->string('Img');
            $table->boolean('IsCover')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobile_img');
    }
};
