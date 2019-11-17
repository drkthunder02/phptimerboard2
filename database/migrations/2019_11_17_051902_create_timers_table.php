<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('timers')) {
            Schema::create('timers', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('type');
                $table->string('stage');
                $table->string('region');
                $table->string('sytem');
                $table->string('planet');
                $table->string('moon');
                $table->string('owner');
                $table->unsignedInteger('owner_id');
                $table->dateTime('eveTime');
                $table->text('notes');
                $table->unsignedInteger('character_id');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timers');
    }
}
