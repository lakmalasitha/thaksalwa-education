<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiveSessionDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_session_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teacher_id');
            $table->string('channel_id');
            $table->string('subject_name');
            $table->string('stream');
            $table->string('medium');
            $table->string('grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('live_session_data');
    }
}
