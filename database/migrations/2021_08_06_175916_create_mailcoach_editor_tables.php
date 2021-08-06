<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailcoachEditorTables extends Migration
{
    public function up()
    {
        if (! Schema::hasTable('mailcoach_uploads')) {
            Schema::create('mailcoach_uploads', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
            });
        }
    }
}
