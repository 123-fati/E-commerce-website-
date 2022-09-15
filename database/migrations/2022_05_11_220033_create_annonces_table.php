<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('description', 255);
            $table->string('typeAnn', 255);
            $table->float('prix');
            $table->string('ville' ,255);
            $table->integer('periode');
            $table->unsignedBigInteger('id_partenaire');       
            $table->foreign('id_partenaire', 'id_partenaire')->references('id')->on('partenaires');
            $table->string('categorie_objet');
            $table->string('nom_objet',255);
            $table->String('status_objet',255);
            $table->string('image');
            $table->string('etat_objet',255);
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
        Schema::dropIfExists('annonces');
    }
}
