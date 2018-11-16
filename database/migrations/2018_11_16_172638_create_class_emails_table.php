<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('email_id')->unsigned();            
            $table->morphs('class_emails');
		
		    $table->index('email_id','fk_users_has_emails_emails1_idx');
		
		    $table->foreign('email_id')
		        ->references('id')->on('emails');
            
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
        Schema::dropIfExists('class_emails');
    }
}
