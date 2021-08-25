<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("ville");
            $table->string("telephone");
            $table->string("email")->unique();
            $table->timestamps();
            $table->foreignId("filiere_id")->constrained("filiere");
            $table->foreignId("anneescolaire_id")->constrained("anneescolaire");
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
        Schema::table('stagiaires',function(Blueprint $table){
            $table->dropColumn(["filiere_id","annescolaire_id"]);

        });
        Schema::dropIfExists('stagiaires');
    }
}
