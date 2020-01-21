<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
/*
      $users = [
        'Hilbert',
        'Galois',
        'Riemann',
        'arquimedes',
        'Eisenstein',
        'Grothendieck',
        'Ramanujan',
      ]; */
      $users = Cliente::all();
      $title = 'Listado de clientes';

      dd(compact('title', 'users'));
//otra manera de llamar a la visat es el siguiente codigo comentado
//      return views('users.index')->with('users', Cliente::all())->with('title','Listado de usuarios');

      return views('users.index', compact('title', 'users'));
/*
      [
        'users' => $users,
        'title' => $title
      ]); */
        //
    }

    public function show($id)
    {
      return "Mostrando detalles de usuario: {$id}";

    }

    public function creat()
    {
      return "Crear nuevo usuario";

    }












}
