<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            
            $table->increments('id');
		    $table->integer('course_type_id')->unsigned();
		    $table->string('short_name', 20)->nullable();
		    $table->string('name', 150)->nullable();
		    $table->text('description')->nullable();
		
		    $table->index('course_type_id','fk_courses_course_type1_idx');
		
		    $table->foreign('course_type_id')
		        ->references('id')->on('course_types')
		        ->onDelete('cascade');
		
		    $table->timestamps();
            $table->softDeletes();
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
