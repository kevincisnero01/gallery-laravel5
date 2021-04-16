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
		$contador = 0;

		foreach($albunes as $album)
		{
			$cantidad = mt_rand(0,5);

			for ($i=0; $i < $cantidad; $i++) 
			{ 
				$contador++;
				Foto::create(
				[
					'nombre' => "Nombre de foto$contador",
					'descripcion' => "Descripcion de foto$contador",
					'ruta' => "/img/texto.png",
					'album_id' => $album->id
				]);
			}
		}
	}

}
