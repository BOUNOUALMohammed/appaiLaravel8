<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);

        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);


    }
}