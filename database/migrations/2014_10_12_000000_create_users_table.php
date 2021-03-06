<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('login')->unique();
            $table->string('email')->unique();
            $table->string('dob')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('img_src')->nullable();
            $table->string('github_id')->nullable();
            $table->string('is_banned')->default(0);
            $table->unsignedInteger('group')->default(0); // 0 - user, 1 - admin
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
