<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReçuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reçu', function (Blueprint $table) {
            $table->id();
            $table->double("prix");
            $table->foreignId("paiements_id")->constrained("paiements");

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
        Schema::table('reçu',function(Blueprint $table){
            $table->dropColumn(["paiements_id"]);

        });
        Schema::dropIfExists('reçu');
    }
}
