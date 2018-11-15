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
		    $table->integer('phone_id')->unsigned();
		    $table->integer('email_id')->unsigned();
		    $table->integer('address_id')->unsigned();
		    $table->integer('gender_id')->unsigned();
		    $table->integer('breed_id')->unsigned();
		    $table->integer('orientation_id')->unsigned();
		    $table->string('name', 255)->nullable();
			$table->string('email', 255)->nullable();
			$table->string('password', 255)->nullable();
		    $table->string('cpf', 45)->nullable();
		    $table->string('rg', 45)->nullable();
		    $table->date('dt_birth')->nullable();
		
		    $table->index('email_id','fk_users_emails1_idx');
		    $table->index('address_id','fk_users_adresses1_idx');
		    $table->index('gender_id','fk_users_genders1_idx');
		    $table->index('breed_id','fk_users_breeds1_idx');
		    $table->index('orientation_id','fk_users_orientations1_idx');
		    $table->index('phone_id','fk_users_phones1_idx');
		
		    $table->foreign('phone_id')
		        ->references('id')->on('phones');
		
		    $table->foreign('email_id')
		        ->references('id')->on('emails');
		
		    $table->foreign('address_id')
		        ->references('id')->on('addresses');
		
		    $table->foreign('gender_id')
		        ->references('id')->on('genders');
		
		    $table->foreign('breed_id')
		        ->references('id')->on('breeds');
		
		    $table->foreign('orientation_id')
		        ->references('id')->on('orientations');
		
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
