<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->integer('email_types_id')->unsigned();
		    $table->string('email', 45);
		
		    $table->index('email_types_id','fk_emails_email_types1_idx');
		
		    $table->foreign('email_types_id')
		        ->references('id')->on('email_types');
		
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
        Schema::dropIfExists('emails');
    }
}
