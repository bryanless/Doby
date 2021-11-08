<?php

namespace App\Models;

use Carbon\Carbon;
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

	public function parseDateToDateBirth($dateTime) {
		return Carbon::parse($dateTime)
			->format('F j, Y');
	}

	public function parsePhoneNumber($phoneNumber) {
		return preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $phoneNumber);
	}

	public function parseStrNumber($strNumber) {
		return preg_replace('~.*(\d{2})(\d{2})(\d{1})(\d{1})(\d{1})(\d{2})(\d{7}).*~', '$1 $2 $3 $4 $5 $6-$7', $strNumber);
	}

	public function parseSipNumber($sipNumber) {
		return preg_replace('~.*(\d{4})(\d{4})(\d{4})(\d{4}).*~', '$1 $2 $3 $4', $sipNumber);
	}

	public function babies()
	{
		return $this->hasMany(Baby::class, 'doctor_in_charge', 'id');
	}
}
