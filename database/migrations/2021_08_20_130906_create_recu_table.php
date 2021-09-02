<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recu', function (Blueprint $table) {
            $table->id();
            $table->double("prix");
            $table->foreignId("paiement_id")->constrained("paiements");

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
        Schema::table('recu',function(Blueprint $table){
            $table->dropColumn(["paiement_id"]);

        });
        Schema::dropIfExists('recu');
    }
}
