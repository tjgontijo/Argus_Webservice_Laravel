<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
		
            $table->integer('user_id')->unsigned();
            $table->integer('address_id')->unsigned();
		    
		    $table->primary('address_id', 'user_id');
		
		    $table->index('user_id','fk_addresses_has_users_users1_idx');
		    $table->index('address_id','fk_addresses_has_users_addresses1_idx');
		
		    $table->foreign('address_id')
		        ->references('id')->on('addresses');
		
		    $table->foreign('user_id')
		        ->references('id')->on('users');
		
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
        Schema::dropIfExists('user_addresses');
    }
}
