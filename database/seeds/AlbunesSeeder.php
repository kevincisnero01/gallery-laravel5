<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use GestorGaleria\Usuario;
use GestorGaleria\Album;
use GestorGaleria\Foto;


class AlbunesSeeder extends Seeder {

	public function run()
	{
		$usuarios = Usuario::all();

		foreach($usuarios as $usuario)
		{
			$cantidad = rand(0,5);

			for ($i=0; $i < $cantidad; $i++) 
			{ 
				Album::create(
				[
					'nombre' => "Nombre de album$i",
					'descripcion' => "Descripcion de album$i",
					'usuario_id' => $usuario->id
				]);
			}
		}
	}

}
