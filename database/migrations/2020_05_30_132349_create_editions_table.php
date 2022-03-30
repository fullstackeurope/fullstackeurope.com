<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('editions', function (Blueprint $table) {
            $table->id();
            $table->string('year', 4)->unique();
            $table->string('hashtag')->unique();
            $table->timestamp('starts_at')->nullable();
            $table->timestamp('ends_at')->nullable();
            $table->boolean('publish_schedule');
            $table->string('tickets_url')->nullable();
            $table->string('tickets_label')->nullable();
            $table->string('venue')->nullable();
            $table->string('sale_ends_description')->nullable();
            $table->timestamp('sale_ends_at')->nullable();
            $table->string('page_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_image')->nullable();
            $table->timestamps();
        });
    }
};
