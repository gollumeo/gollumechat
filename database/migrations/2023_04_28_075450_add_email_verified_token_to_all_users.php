<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email_verified_token')->nullable()->unique()->after('email_verified_at');
        });

        // Update existing users with a unique token
        $users = \App\Models\User::all();
        foreach ($users as $user) {
            $user->email_verified_token = \Illuminate\Support\Str::random(40);
            $user->save();
        }
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email_verified_token');
        });
    }
};
