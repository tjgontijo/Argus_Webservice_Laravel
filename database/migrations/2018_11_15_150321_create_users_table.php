<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('name', 255);
			$table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->integer('gender_id')->unsigned()->nullable();
		    $table->integer('breed_id')->unsigned()->nullable();
		    $table->string('cpf', 45)->nullable();
		    $table->string('rg', 45)->nullable();
		    $table->date('dt_birth')->nullable();
		
		    $table->index('gender_id','fk_users_genders1_idx');
		    $table->index('breed_id','fk_users_breeds1_idx');
            
            $table->foreign('gender_id')
		        ->references('id')->on('genders');
		
		    $table->foreign('breed_id')
		        ->references('id')->on('breeds');
		

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
        Schema::dropIfExists('users');
    }
}
