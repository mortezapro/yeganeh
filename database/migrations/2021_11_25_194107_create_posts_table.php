<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            //general field
            $table->id();
            $table->string("title");
            $table->string("slug")->unique();
            $table->string("thumbnail")->default("thumbnail.png");
            $table->string("description");
            $table->longText("content");
            $table->integer("type")->default(config("post-type.article"))->comment("1010:article ,1011:news , 1012:event , 1013:video , 1014:solution , 1015:download");
            $table->bigInteger("user_id")->unsigned();
            $table->integer('status')->default(config("post-status.published"))->comment("1010:draft , 1020: published");
            $table->timestamps();
            // seo field
            $table->tinyInteger("indexable")->default(1)->comment("0: Noindex,1: Index");
            $table->string("canonical")->comment("Canonical Url")->nullable();
            $table->string("seo_title")->nullable();
            $table->string("seo_description")->nullable();
            $table->string("seo_image")->default("thumbnail.png");

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
