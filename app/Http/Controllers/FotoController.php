<?php namespace GestorGaleria\Http\Controllers;

use GestorGaleria\Http\Requests\MostrarFotosRequest;

use GestorGaleria\Foto;
use GestorGaleria\Album;

class FotoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function getIndex(MostrarFotosRequest $request)
	{
		$id = $request->get('id');

		$fotos = Album::find($id)->fotos;

		return view('fotos.mostrar', ['fotos' => $fotos]);
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
