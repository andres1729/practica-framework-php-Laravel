<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profession;


class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Profession::create(['title' => 'Matematico',]);
      Profession::create(['title' => 'Fisico',]);
      Profession::create(['title' => 'Desarrollador',]);
      Profession::create(['title' => 'Programador',]);
      Profession::create(['title' => 'Filosofo',]);
      Profession::create(['title' => 'Militar',]);
      Profession::create(['title' => 'Fisico de particulas',]);




//La otra opcion para manejar la base de datos es usar lo siguiente trabajando directamente con sql o trabajando con los constructores de laravel


// con la siguiente linea donde se trabaja manualmente con sql
        //DB::insert('INSERT INTO professions (title) VALUES (:title)', ['title' => 'Matematico']);
//EN el siguiente fragmento se usa el constructor de consulta de laravel en lugar de trabajar con sql manualmente como en el ejemplo descrito arriba


      /*
        DB::table('professions')->insert([
          'title' => 'Matematico',
        ]);
        DB::table('professions')->insert([
          'title' => 'Fisico',
        ]);
        DB::table('professions')->insert([
          'title' => 'Desarrollador',
        ]);
        DB::table('professions')->insert([
          'title' => 'Programador',
        ]);
        DB::table('professions')->insert([
          'title' => 'Filosofo',
        ]);
        DB::table('professions')->insert([
          'title' => 'Militar',
        ]);
        DB::table('professions')->insert([
          'title' => 'Fisico de particulas',
        ]);
       */

    }
}
