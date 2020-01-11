<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_advertisements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('teacher_id');
            $table->string('name');
            $table->string('language');
            $table->string('subject');
            $table->string('institude');
            $table->string('province');
            $table->string('postalCode');
            $table->string('district');
            $table->string('contactNumber');
            $table->string('email');
            $tabel->boolean('monday');
            $tabel->boolean('tuesday');
            $tabel->boolean('wednesday');
            $tabel->boolean('thursday');
            $tabel->boolean('friday');
            $tabel->boolean('saturday');
            $tabel->boolean('sunday');
            $tabel->boolean('morning');
            $tabel->boolean('afternoon');
            $tabel->boolean('evening');
            $tabel->boolean('night');
            $table->string('images');
            $table->text('discription');
            $table->timestamps();

            // $table->foreign('teacher_id')
            // ->references('id')
            // ->on('teachers')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_advertisements');
    }
}
