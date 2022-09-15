<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReclamation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('reclamations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->string('sujet');
            $table->text('contenu');
            $table->timestamp('created_at')->useCurrent();
            $table->string('status');
            $table->boolean('actif');
            $table->datetime('read_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('reclamations');
    }
}
