<?php

use App\Models\Workshop;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class AddSlugToWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workshops', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('title');
        });

        Workshop::each(function (Workshop $workshop) {
            $workshop->update(['slug' => Str::slug($workshop->title)]);
        });
    }
}
