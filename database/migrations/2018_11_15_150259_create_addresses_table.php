<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->string('cep', 45)->nullable();
		    $table->string('complement', 255)->nullable();
		    $table->string('number', 45)->nullable();
		    $table->string('address', 255)->nullable();
		    $table->string('district', 45)->nullable();
		    $table->string('city', 45)->nullable();
		    $table->string('state', 45)->nullable();
		    $table->integer('adress_type_id')->unsigned();
		
		    $table->index('adress_type_id','fk_adresses_adress_type1_idx');
		
		    $table->foreign('adress_type_id')
		        ->references('id')->on('address_types');
		
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
        Schema::dropIfExists('addresses');
    }
}
