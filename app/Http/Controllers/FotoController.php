<?php namespace gestordegaleria\Http\Controllers;

class FotoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function getIndex()
	{
		return 'Mostrando Fotos del usuario';
	}

	public function getCrearFoto()
	{
		return 'Formulario para Crear Foto';
	}

	public function postCrearFoto()
	{
		return 'Crear Foto';
	}

	public function getActualizarFoto()
	{
		return 'Formulario para Actualizar Foto';
	}

	public function postActualizarFoto()
	{
		return 'Actualizar Foto';
	}

	public function getEliminarFoto()
	{
		return 'Formulario para Eliminar Foto';
	}

	public function postEliminarFoto()
	{
		return 'Eliminar Foto';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}

}
