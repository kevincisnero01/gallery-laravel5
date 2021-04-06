<?php namespace gestordegaleria\Http\Controllers;

class BienvenidaController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function getIndex()
	{
		return 'Bienvenido a la aplicacion';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}

}
