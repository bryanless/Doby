<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	use HasFactory;

	protected $guarded = ['id'];

	public static function getDoctorById($doctorId)
	{
		return static::all()
			->where('id', $doctorId)
			->first();
	}

	public function babies()
	{
		return $this->hasMany(Baby::class, 'doctor_in_charge', 'id');
	}
}
