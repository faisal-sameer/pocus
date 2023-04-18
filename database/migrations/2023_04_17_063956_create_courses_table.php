<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('file')->nullable();
            $table->string('title_en');
            $table->string('title_ar')->nullable();
            $table->string('description_en');
            $table->string('description_ar')->nullable();
            $table->string('target_en');
            $table->string('target_ar')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('location_en');
            $table->string('location_ar')->nullable();
            $table->text('goal_en');
            $table->text('goal_ar')->nullable();
            $table->text('Structure_en');
            $table->text('Structure_ar')->nullable();
            $table->integer('seats');
            $table->tinyInteger('Status')->default(1);
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
        Schema::dropIfExists('courses');
    }
}
