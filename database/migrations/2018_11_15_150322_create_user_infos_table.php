<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
           $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->integer('user_id')->unsigned();
		    $table->integer('gender_id')->unsigned();
		    $table->integer('breed_id')->unsigned();
		    $table->integer('orientation_id')->unsigned();
		    $table->string('cpf', 45)->nullable();
		    $table->string('rg', 45)->nullable();
		    $table->date('dt_birth')->nullable();
		
		    $table->index('gender_id','fk_users_genders1_idx');
		    $table->index('breed_id','fk_users_breeds1_idx');
		    $table->index('orientation_id','fk_users_orientations1_idx');
		    $table->index('user_id','fk_user_infos_users1_idx');
		
		    $table->foreign('gender_id')
		        ->references('id')->on('genders');
		
		    $table->foreign('breed_id')
		        ->references('id')->on('breeds');
		
		    $table->foreign('orientation_id')
		        ->references('id')->on('orientations');
		
		    $table->foreign('user_id')
                ->references('id')->on('users');
            
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
        Schema::dropIfExists('user_infos');
    }
}
