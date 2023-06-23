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
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('handle');
            $table->string('image');
            $table->string('tweet')->nullable();
            $table->string('file')->nullable();
            $table->boolean('is_video')->default(false);
            $table->unsignedBigInteger('comments')->default(0);
            $table->unsignedBigInteger('retweets')->default(0);
            $table->unsignedBigInteger('likes')->default(0);
            $table->unsignedBigInteger('analytics')->default(0);
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
        Schema::dropIfExists('tweets');
    }
};
