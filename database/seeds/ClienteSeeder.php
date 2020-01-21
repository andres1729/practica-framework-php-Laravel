<?php

use App\Cliente as cliente;
use App\Profession as profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     /* Los modelos son uno de los componentes principales de las aplicaciones desarrolladas bajo el patrón MVC, que tienen la responsabilidad de acceder a los datos, modificarlos, ect...
     * la ventaja de estos modelos es que incorporan el paradigma POO en lo cual nos proporciona otra manera de trabajar y relacionarnos con la base de datos sin tener que usar sql o el constructor  de consultas de laravel.
     * Los archivos models se crean en git (o en la terminal) el cual se alojan en la carpeta App, se puede crear una subcarpeta de App para alojar todos los archivos, estos archivos son php. dentro de los archivos con extends Seeder importamos los modelos con la linea use App\Model, esto nos permite aprovechar la configuracion de estos modelos basado en POO para trabajar con la base de datos
*/
    public function run(){
      $professionId=profession::WHERE('title', 'Matematico')->value('id');

      cliente::create([
      'Nombre'=>'David Hilbert',
      'email'=>'hilbert@gmail.com',
      'password'=>bcrypt('137'),
      'profession_id'=>$professionId,
    ]);

    factory(Cliente::class)_>create([
      'profession_id'=> $professionId
    ]);

    factory(Cliente::class, 48)->create();
/*
      factory(Cliente::class)->create([
      cliente::create([
      'Nombre'=>'David Hilbert',
      'email'=>'hilbert@gmail.com',
      'password'=>bcrypt('137'),
      'profession_id'=>$professionId,
    ])

    factory(Cliente::class)->create([
      'profession_id' => $porfessionId
    ]);

    factory(Cliente::class, 48)->create();

*/





//La otra opcion para manejar la base de datos es usar lo siguiente trabajando directamente con sql o trabajando con los constructores de laravel

// lo siguiente es el codigo para hacerlo manualmente con sql
      //  $professions=DB::select('SELECT id FROM professions WHERE title = ? LIMIT 0,1' ,  ['Matematico']);
    // dd($professions[0]->id);
//Vamos a utilizar el constructor de consultas
/*
        $professionId=DB::table('professions')
        ->Where('title', 'Matematico')
        ->value('id');     //para tomar un solo resultado  //take(1)->get();

        dd($professionId); //otra manera de escribir es $professions[0]

        DB::table('clientes')->insert([
          'Nombre'=>'David Hilbert',
          'email'=>'hilbert@gmail.com',
          'password'=>bcrypt('137'),
          'profession_id'=>$professionId,      //first()->id,
        ]);
        */
      }

}
