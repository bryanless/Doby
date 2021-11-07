<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
	use HasFactory;

	// * Blacklist
	protected $guarded = ['id'];

	public static function getBabyById($babyId)
	{
		return static::all()
			->where('id', $babyId)
			->first();
	}

	public function parseDatetimeToDatetimeLocal($dateTime)
	{
		return Carbon::parse($dateTime)
			->format('Y-m-d\TH:i');
	}

	public function doctor()
	{
		return $this->belongsTo(Doctor::class, 'doctor_in_charge', 'id');
	}
}
