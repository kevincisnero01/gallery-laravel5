<?php namespace gestordegaleria\Http\Controllers;

class InicioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		return 'Pagina de inicio validada';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}


}
