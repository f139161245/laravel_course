<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('name',500);
            $table->string('email',255);
            $table->timestamps();
        });
    }

    // php artisan make:migration create_posts
    // php artisan make:controller PostController
    // php artisan migrate
    // php artisan make:model Post

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
