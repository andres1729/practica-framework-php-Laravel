<?php
use App\Articulo;
use App\Cliente;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get("/", "controller1@index");
Route::get("/crear", "controller1@create");
Route::get("/articulos", "controller1@store");
Route::get("/mostrar", "controller1@show");
Route::get("/contacto", "controller1@cont");
Route::get("/galeria", "controller1@gallery");

Route::get("/reed", function(){
/*  $articulos=Articulo::all();
  foreach($articulos as $articulo){
    echo $articulo->created_at;
  }

}); */
/*
$articulos = Articulo::where('name', 'lily')
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();
return $articulos;
});

Route::get("/leer", function(){
$articulos = Articulo::where('name', 'lily')
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();
return $articulos;
});
/*
Route::get("/insertar", function(){
  $articulos= new Articulo;
  $articulos->name="mecanica cuantica";
  $articulos->email="mecanica@cuantica.com";
  $articulos->Precio="01";
  $articulos->profecion="fisico";

  $articulos->save();
}); */
/*
  Route::get("/actualizar", function(){
  /*  $articulos= Articulo::find(7);
    $articulos->name="hipatia";
    $articulos->email="agoraa@cuantica.com";
    $articulos->Precio="847349234";
    $articulos->profecion="astronoma";

    $articulos->save();
    });
*/
/*
  Articulo::where("profecion", "fisico")->update([ "profecion"=>"matematica"]);
});

Route::get("/borrar", function(){
    $articulo=Articulo::find(8);
    $articulo->delete();
});

Route::get("/inser", function(){
  Articulo::create(["name"=>"maryam", "Precio"=>50, "email"=>"hfj@gmail.com", "profecion"=>"matematica"]);


});

Route::get("/cliente/1/articulo", function(){
  return Cliente::find(1)->articulo;

});

Route::get("/articulos", function(){

  $articulos = Cliente::find(3)->articulos;
  foreach ($articulos as $articulo) {
    echo $articulo->name . "<br/>";
  }

});

Route::get("/cliente/{id}/perfil", function($id){

  $cliente = Cliente::find($id);
  foreach($cliente->perfiles as $perfil){
    return $perfil->nombre;
  }
});

Route::get("/califi", function(){
  $cliente=cliente::find(1);
  foreach($cliente->calificaciones as $calificacion){
    return $calificacion->calificacion;
  }
});
*/


Route::get("/", function(){
  return 'Home';
});

Route::get("/usuarios", 'ClienteController@index');

Route::get("/usuarios/{id}", 'ClienteController@show')->where('id', '[0 9]+');

Route::get("/usuarios/nuevo", 'ClienteController@create');

Route::get("/usuarios/{name}/{nickname?}", 'WelcomeClienteController');
