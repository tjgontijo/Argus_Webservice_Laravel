<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_phones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phone_id')->unsigned();            
            $table->morphs('class_phones');
		
		    $table->index('phone_id','fk_users_has_phones_phones1_idx');
		
		    $table->foreign('phone_id')
		        ->references('id')->on('phones');
            
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
        Schema::dropIfExists('class_phones');
    }
}
