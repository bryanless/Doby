<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BabySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('babies')->insert([
			'name' => 'Devi Dian Atmadja',
			'gender' => 'female',
			'birth_date_time' => '2013-01-04 10:20:00.000000',
			'weight' => 3350,
			'birth_order' => 1,
			'doctor_in_charge' => 1,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('babies')->insert([
			'name' => 'Irwan Dian Irawan',
			'gender' => 'male',
			'birth_date_time' => '2015-01-04 11:10:00.000000',
			'weight' => 3550,
			'birth_order' => 2,
			'doctor_in_charge' => 2,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('babies')->insert([
			'name' => 'Sudomo Sudirman Chandra',
			'gender' => 'male',
			'birth_date_time' => '2012-04-07 08:17:00.000000',
			'weight' => 3557,
			'birth_order' => 1,
			'doctor_in_charge' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('babies')->insert([
			'name' => 'Wulan Glenna Muljana',
			'gender' => 'female',
			'birth_date_time' => '2016-01-07 15:39:00.000000',
			'weight' => 3545,
			'birth_order' => 1,
			'doctor_in_charge' => 4,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('babies')->insert([
			'name' => 'Cahaya Dian Gunardi',
			'gender' => 'female',
			'birth_date_time' => '2014-03-27 18:21:00.000000',
			'weight' => 3375,
			'birth_order' => 1,
			'doctor_in_charge' => 5,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('babies')->insert([
			'name' => 'Fanny Shinta Kusnadi',
			'gender' => 'female',
			'birth_date_time' => '2019-06-10 16:46:00.000000',
			'weight' => 3384,
			'birth_order' => 3,
			'doctor_in_charge' => 6,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('babies')->insert([
			'name' => 'Wahyu Ridwan Sanjaya',
			'gender' => 'male',
			'birth_date_time' => '2018-07-16 14:44:00.000000',
			'weight' => 3364,
			'birth_order' => 1,
			'doctor_in_charge' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('babies')->insert([
			'name' => 'Suharto Yandi Setiawan',
			'gender' => 'male',
			'birth_date_time' => '2015-07-27 07:30:00.000000',
			'weight' => 3477,
			'birth_order' => 2,
			'doctor_in_charge' => 8,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('babies')->insert([
			'name' => 'Ratna Devi Tan',
			'gender' => 'female',
			'birth_date_time' => '2017-02-10 08:33:00.000000',
			'weight' => 3367,
			'birth_order' => 1,
			'doctor_in_charge' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('babies')->insert([
			'name' => 'Shinta Sucianty Hermanto',
			'gender' => 'female',
			'birth_date_time' => '2018-03-04 21:12:00.000000',
			'weight' => 3418,
			'birth_order' => 2,
			'doctor_in_charge' => 10,
			'created_at' => now(),
			'updated_at' => now(),
		]);
	}
}
