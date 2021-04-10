<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use GestorGaleria\Usuario;
use GestorGaleria\Album;
use GestorGaleria\Foto;

class UsuariosSeeder extends Seeder {

	public function run()
	{
		for ($i=0; $i < 10; $i++) 
		{ 
			Usuario::create(
			[
				'nombre' => "usuario$i",
				'email' => "correo$i@gmail.com",
				'password' => bcrypt("pass$i"),
				'pregunta' => "preg$i",
				'respuesta' => "resp$i"
			]);
		}
	}

}
