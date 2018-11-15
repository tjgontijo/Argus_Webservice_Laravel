<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_phones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('id');
		    $table->integer('user_id')->unsigned();
		    $table->integer('phone_id')->unsigned();
		    
		    $table->primary('user_id', 'phone_id');
		
		    $table->index('phone_id','fk_users_has_phones_phones1_idx');
		    $table->index('user_id','fk_users_has_phones_users1_idx');
		
		    $table->foreign('user_id')
		        ->references('id')->on('users');
		
		    $table->foreign('phone_id')
		        ->references('id')->on('phones');
		
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
        Schema::dropIfExists('user_phones');
    }
}
