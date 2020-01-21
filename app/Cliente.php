<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articulo;
use Notifiable;

class Cliente extends Model{

  //  protected $table = 'users';


  protected $fillable = [
    'Nombre', 'email', 'password', 'profession_id'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

  protected $casts = [
    'is_admin' => 'boolean'
  ];

  public static function findByEmail($email)
  {
    return static::where(compact('email'))->first();
  }

  public function profession() //profession_id
  {
    return $this->belongsTo(profession::class, 'id_profession');
  }
    //
    /*
    public function articulo(){
      return $this->hasOne("App\Articulo");
    }

    public function articulos(){
      return $this->hasMany("App\Articulo");
    }

    public function perfiles(){
      return $this->belongsToMany("App\Perfil");
    }*/



    public function calificaciones(){
      return $this->morphMany("App\Calificaciones", "calificacion");
    }
}
