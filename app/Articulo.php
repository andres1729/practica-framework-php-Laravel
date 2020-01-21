<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Articulo extends Model
{
    //
    /*

    protected $fillable=[

      "name",
      "email",
      "Precio",
      "profecion"




    ]; */
    public function calificaciones(){
      return $this->morphMany("App\Calificaciones", "calificacion");
    }

}
