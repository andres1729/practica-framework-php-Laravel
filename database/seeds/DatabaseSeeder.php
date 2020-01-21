<?php

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
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      DB::table('professions')->truncate();
      DB::table('clientes')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
      //  dd(ProfessionSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(ClienteSeeder::class);
    }
}
