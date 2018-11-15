<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_emails', function (Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('id');
		    $table->integer('user_id')->unsigned();
		    $table->integer('email_id')->unsigned();
		    
		    $table->primary('user_id', 'email_id');
		
		    $table->index('email_id','fk_users_has_emails_emails1_idx');
		    $table->index('user_id','fk_users_has_emails_users1_idx');
		
		    $table->foreign('user_id')
		        ->references('id')->on('users');
		
		    $table->foreign('email_id')
		        ->references('id')->on('emails');
		
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
        Schema::dropIfExists('user_emails');
    }
}
