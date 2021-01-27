<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddScheduleMonitorTimezoneColumn extends Migration
{
    public function up()
    {
        Schema::table('monitored_scheduled_tasks', function (Blueprint $table) {
            $table->string('timezone')->nullable()->after('cron_expression');
        });

        DB::table('monitored_scheduled_tasks')->update(['timezone' => 'UTC']);
    }
}
