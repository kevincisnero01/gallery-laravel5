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
		$contador = 0;

		foreach($usuarios as $usuario)
		{	
			$cantidad = mt_rand(0,10);

			for ($i=0; $i < $cantidad; $i++) 
			{ 	
				$contador++;
				Album::create(
				[
					'nombre' => "Nombre de album$contador",
					'descripcion' => "Descripcion de album$contador",
					'usuario_id' => $usuario->id
				]);
			}
		}
	}

}
