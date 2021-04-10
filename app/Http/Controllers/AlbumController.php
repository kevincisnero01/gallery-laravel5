<?php namespace GestorGaleria\Http\Controllers;

class AlbumController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function getIndex()
	{
		return 'Mostrando Fotos del usuario';
	}

	public function getCrearAlbum()
	{
		return 'Formulario para Crear Album';
	}

	public function postCrearAlbum()
	{
		return 'Crear Album';
	}

	public function getActualizarAlbum()
	{
		return 'Formulario para Actualizar Album';
	}

	public function postActualizarAlbum()
	{
		return 'Actualizar Album';
	}

	public function getEliminarAlbum()
	{
		return 'Formulario para Eliminar Album';
	}

	public function postEliminarAlbum()
	{
		return 'Eliminar Album';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}

}
