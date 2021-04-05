<?php namespace gestordegaleria;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'album';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'nombre', 'descripcion', 'usuario_id'];

	public function fotos()
	{
		return $this->hasMany('gestordegaleria\Foto');
	}

	public function propietario()
	{
		return $this->belongsTo('gestordegaleria\Usuario');
	}

}
