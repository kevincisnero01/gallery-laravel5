<?php namespace GestorGaleria\Http\Requests;

use GestorGaleria\Http\Requests\Request;

class RecuperarContrasenaRequest extends Request {

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
			'email' => 'required|email|exists:usuarios',
			'password' => 'required|min:5|confirmed',
			'pregunta' => 'required',
			'respuesta' => 'required',
		];
	}

}
