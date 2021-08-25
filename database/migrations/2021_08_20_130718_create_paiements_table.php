<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->double("montantpaye");
            $table->integer("mois");
            $table->foreignId("stagiaires_id")->constrained("stagiaires");
            $table->foreignId("users_id")->constrained("users");
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paiements',function(Blueprint $table){
            $table->dropColumn(["stagiaires_id"],["users_id"]);

        });
        Schema::dropIfExists('paiements');
    }
}
