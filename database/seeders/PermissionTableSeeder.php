<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["nom"=>"ajouter comptable"],
            ["nom"=>"modifier comptable"],
            ["nom"=>"supprimer comptable"],
            ["nom"=>"ajouter stagiaire"],
            ["nom"=>"modifier stagiaire"],
            ["nom"=>"supprimer stagiaire"],
            ["nom"=>"ajouter paiement"],
            ["nom"=>"modifier paiement"],
            ["nom"=>"afficher paiement"],
            ["nom"=>"afficher reçu"]

        ]);
    }
}
