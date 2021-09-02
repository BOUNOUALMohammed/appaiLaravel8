<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiliereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiere', function (Blueprint $table) {
            $table->id();
            $table->string("intitule");
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
        Schema::table('filiere',function(Blueprint $table){
            $table->dropColumn(["annescolaire_id"]);

        });
        Schema::dropIfExists('filiere');
    }
}
