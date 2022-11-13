<?php

use App\Models\Speaker;
use App\Models\Talk;
use App\Models\Workshop;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\SQLiteConnection;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up()
    {
        Schema::create('talks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('speaker_id')->references('id')->on('speakers')->cascadeOnDelete();
            $table->foreignId('timeslot_id')->nullable()->references('id')->on('timeslots')->nullOnDelete();
            $table->string('title');
            $table->text('abstract')->nullable();
            $table->timestamps();
        });

        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('speaker_id')->references('id')->on('speakers')->cascadeOnDelete();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('snippet')->nullable();
            $table->integer('duration')->nullable();
            $table->string('schedule')->nullable();
            $table->text('description')->nullable();
            $table->boolean('sold_out')->default(false);
            $table->timestamps();
        });

        Speaker::each(function (Speaker $speaker) {
            if ($speaker->talk) {
                Talk::create([
                    'speaker_id'  => $speaker->id,
                    'timeslot_id' => $speaker->timeslot_id,
                    'title'       => $speaker->talk,
                    'abstract'    => $speaker->abstract,
                ]);
            }

            if ($speaker->workshop) {
                Workshop::create([
                    'speaker_id'  => $speaker->id,
                    'title'       => $speaker->workshop,
                    'subtitle'    => $speaker->workshop_subtitle,
                    'snippet'     => $speaker->workshop_snippet,
                    'duration'    => $speaker->workshop_duration,
                    'schedule'    => $speaker->workshop_schedule,
                    'description' => $speaker->workshop_description,
                    'sold_out'    => $speaker->workshop_sold_out,
                ]);
            }
        });

        Schema::table('speakers', function (Blueprint $table) {
            if (!\Illuminate\Support\Facades\DB::connection() instanceof SQLiteConnection) {
                $table->dropForeign('speakers_timeslot_id_foreign');
            }

            $table->dropColumn([
                'timeslot_id',
                'talk',
                'abstract',
                'workshop',
                'workshop_subtitle',
                'workshop_snippet',
                'workshop_duration',
                'workshop_schedule',
                'workshop_description',
                'workshop_sold_out',
            ]);
        });
    }
};
