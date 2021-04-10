<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorGaleria\Album;
use GestorGaleria\Foto;
use GestorGaleria\Usuario;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0'); //Para no comprobar la llave foranea

		Foto::truncate();
		Album::truncate();
		Usuario::truncate();

		$this->call('UsuariosSeeder');
		$this->call('AlbunesSeeder');
		$this->call('FotosSeeder');
	}

}
