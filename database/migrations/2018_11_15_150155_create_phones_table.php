<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
             $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->integer('phone_type_id')->unsigned();
		    $table->string('number', 15);
		
		    $table->index('phone_type_id','fk_phones_phone_type1_idx');
		
		    $table->foreign('phone_type_id')
		        ->references('id')->on('phone_types');
		
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
        Schema::dropIfExists('phones');
    }
}
