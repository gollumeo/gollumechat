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
        Schema::create('direct_messages_reactions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->foreign('direct_message_uuid')->references('uuid')->on('direct_messages')->onDelete('cascade');
            $table->unsignedBigInteger('direct_message_uuid');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('emoji_id')->references('id')->on('emojis')->onDelete('cascade');
            $table->unsignedBigInteger('emoji_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direct_messages_reactions');
    }
};
