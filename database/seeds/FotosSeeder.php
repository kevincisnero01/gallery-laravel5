<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use GestorGaleria\Usuario;
use GestorGaleria\Album;
use GestorGaleria\Foto;


class FotosSeeder extends Seeder {

	public function run()
	{
		$albunes = Album::all();

		foreach($albunes as $album)
		{
			$cantidad = rand(0,5);

			for ($i=0; $i < $cantidad; $i++) 
			{ 
				Foto::create(
				[
					'nombre' => "Nombre de album$i",
					'descripcion' => "Descripcion de album$i",
					'ruta' => "/img/texto.png",
					'album_id' => $album->id
				]);
			}
		}
	}

}
