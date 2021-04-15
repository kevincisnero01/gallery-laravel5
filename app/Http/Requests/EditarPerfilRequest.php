<?php namespace GestorGaleria\Http\Requests;

use GestorGaleria\Http\Requests\Request;

class EditarPerfilRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nombre' => 'required',
			'password' => 'min:5',
			'pregunta' => '',
			'respuesta' => 'required_with:pregunta'
		];
	}

}
