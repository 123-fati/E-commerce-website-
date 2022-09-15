<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objets', function (Blueprint $table) {
            $table->id();
            $table->string('categorie');
            $table->unsignedBigInteger('id_partenaire');
            $table->string('nom');
            $table->enum('status',['disponible','non-disponible']);
            $table->string('image');
            $table->enum('etat',['good','not-good']);
            $table->foreign('id_partenaire','id_partenaire3')->references('id')->on('partenaires');          
            $table->rememberToken();
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
        Schema::dropIfExists('objets');
    }
}
