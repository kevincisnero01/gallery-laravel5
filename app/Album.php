<?php namespace GestorGaleria;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'albunes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'nombre', 'descripcion', 'usuario_id'];

	public function fotos()
	{
		return $this->hasMany('GestorGaleria\Foto');
	}

	public function propietario()
	{
		return $this->belongsTo('GestorGaleria\Usuario');
	}

}
