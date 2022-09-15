<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_client'); 
            $table->unsignedBigInteger('id_annonce'); 
            $table->unsignedBigInteger('id_partenaire'); 
            $table->foreign('id_client','id_client2')->references('id')->on('users');  
            $table->foreign('id_annonce','id_annonce2')->references('id')->on('annonces');      
            $table->foreign('id_partenaire','id_partenaire2')->references('id')->on('partenaires');          
            $table->unsignedBigInteger('periode');
            $table->date('date_reservation');
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
        Schema::dropIfExists('reservations');
    }
}
