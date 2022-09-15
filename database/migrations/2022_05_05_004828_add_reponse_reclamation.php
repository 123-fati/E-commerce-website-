<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReponseReclamation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('reponses', function (Blueprint $table)
        {
          $table->increments('id');
          $table->integer('reclamationId')->unsigned();
          $table->integer('from_id')->unsigned();
          $table->foreign('from_id', 'from')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('reclamationId', 'reclamation_id')->references('id')->on('reclamations')->onDelete('cascade');
          $table->text('content');
          $table->timestamp('created_at')->useCurrent();
          $table->boolean('actif');
           $table->timestamp('updated_at')->nullable();
                  } )
        ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reponses');
    }
}
