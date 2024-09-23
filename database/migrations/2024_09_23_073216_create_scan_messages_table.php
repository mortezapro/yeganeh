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
        Schema::create('scan_messages', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->longText("content");
            $table->longText("admin_comment")->nullable();
            $table->integer('status')->default(config("message-status.initialRegistration"))->comment("1010:Initial registration, 1011:in progress, 1012:Checked");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
