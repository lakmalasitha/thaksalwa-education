<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_posts', function (Blueprint $table) {
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
        Schema::dropIfExists('teacher_posts');
    }
}
