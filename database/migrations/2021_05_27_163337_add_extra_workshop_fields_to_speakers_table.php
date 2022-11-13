<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up()
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->string('country')->nullable()->after('photo');
            $table->after('workshop', function (Blueprint $table) {
                $table->string('workshop_subtitle')->nullable();
                $table->text('workshop_snippet')->nullable();
                $table->integer('workshop_duration')->nullable();
                $table->string('workshop_schedule')->nullable();
            });
        });
    }
};
