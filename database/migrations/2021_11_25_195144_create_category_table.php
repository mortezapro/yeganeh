<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            //general field
            $table->id();
            $table->string("title");
            $table->string("slug")->unique();
            $table->string("thumbnail")->default("thumbnail.png");
            $table->tinyInteger("indexable")->comment("0: Noindex,1: Index")->default(1);
            $table->longText("content")->nullable();
            $table->timestamps();
            // seo field
            $table->string("canonical")->comment("Canonical Url")->nullable();
            $table->string("seo_title")->nullable();
            $table->string("seo_description")->nullable();
            $table->string("seo_image")->default("thumbnail.png");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
