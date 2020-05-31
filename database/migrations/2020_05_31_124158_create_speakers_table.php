<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakersTable extends Migration
{
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('edition_id')->constrained();
            $table->string('slug');
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('talk')->nullable();
            $table->text('abstract')->nullable();
            $table->text('bio')->nullable();
            $table->string('twitter')->nullable();
            $table->string('website')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

            $table->unique(['edition_id', 'slug']);
        });
    }
}
