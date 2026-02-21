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
        Schema::create('mobile_news', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('Mobile_ID')->index('mobile');
            $table->unsignedInteger('Brand_ID')->nullable()->index('brand2');
            $table->string('Title');
            $table->text('Intro')->nullable();
            $table->longText('Details');
            $table->longText('Details2')->nullable();
            $table->longText('Details3')->nullable();
            $table->timestamp('Date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobile_news');
    }
};
