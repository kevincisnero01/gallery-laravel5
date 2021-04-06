<?php namespace gestordegaleria\Http\Controllers;

class UsuarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getEditarPerfil()
	{
		return 'Mostrando informacion de perfil';
	} 

	public function postEditarPerfil()
	{
		return 'Generando actualizacion de perfil';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}

}
