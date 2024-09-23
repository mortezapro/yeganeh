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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug")->unique();
            $table->string("thumbnail")->default("thumbnail.png");
            $table->longText("content");
            $table->integer("type")->default(config("project-type.scan"))->comment("1010:scan");
            $table->integer('status')->default(config("project-status.finished"))->comment("1010:finished,1011:doing");
            // seo field
            $table->tinyInteger("indexable")->default(1)->comment("0: Noindex,1: Index");
            $table->string("canonical")->comment("Canonical Url")->nullable();
            $table->string("seo_title")->nullable();
            $table->string("seo_description")->nullable();
            $table->string("seo_image")->default("thumbnail.png");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
