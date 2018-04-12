<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	// Se creo este metodo para la vista principal
    public function index() 
    {
        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = [
                'Jhon',
                'Edison',
                'Lucas',
                'Jimbo'
            ];
        }

        $title = 'Listado de Usuarios';

		return view('users', [
            'users' => $users,
            'title' => $title
        ]);
    }

    // Este metodo es para consultar
    public function show($id)
    {
    	return "Mostrando detalle del usuario: {$id}";
    }

    // Metodo para crear usuarios
    public function create()
    {
    	return "Crear nuevo usuario";
    }
}
