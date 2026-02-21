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
        Schema::create('comment', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->unsignedInteger('User_ID')->index('idx_comment_user');
            $table->text('Comment');
            $table->unsignedInteger('commentable_id')->nullable()->index('commentable_id');
            $table->string('commentable_type', 191);
            $table->dateTime('Date');

            $table->index(['commentable_type', 'commentable_id'], 'commentable_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
