<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarea
 * 
 * @property int $id
 * @property string $nombre
 * @property string|null $descripcion
 * @property Carbon|null $fecha_realizar
 * @property bool $completado
 * @property bool $flag_estado
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Tarea extends Model
{
	protected $table = 'tarea';

	protected $casts = [
		'completado' => 'bool',
		'flag_estado' => 'bool'
	];

	protected $dates = [
		'fecha_realizar'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'fecha_realizar',
		'completado',
		'flag_estado'
	];
}
