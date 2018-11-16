<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('address_id')->unsigned();		    
            $table->morphs('class_addresses');

		    $table->index('address_id','fk_addresses_has_users_addresses1_idx');
		
		    $table->foreign('address_id')
		        ->references('id')->on('addresses');
            
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
        Schema::dropIfExists('class_addresses');
    }
}
