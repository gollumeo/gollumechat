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
        Schema::create('direct_messages_texts', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->foreign('direct_message_uuid')->references('uuid')->on('direct_messages')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('content');
            $table->boolean('is_read')->default(false);
            $table->boolean('is_sent')->default(false);
            $table->unsignedBigInteger('reply_to')->nullable();
            $table->foreign('reply_to')->references('id')->on('direct_messages_texts')->onDelete('cascade');
            $table->unsignedBigInteger('direct_message_uuid');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('emoji_uuid');
            $table->foreign('emoji_uuid')->references('id')->on('emojis')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direct_messages_texts');
    }
};
