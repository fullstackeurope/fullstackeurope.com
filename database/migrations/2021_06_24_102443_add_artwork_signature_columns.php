<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('workshops', function (Blueprint $table) {
            $table->string('artwork_signature')->nullable()->after('sold_out');
        });

        Schema::table('talks', function (Blueprint $table) {
            $table->string('artwork_signature')->nullable()->after('abstract');
        });
    }
};
