<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
			'name' => 'Cahya Citra Widjaja',
			'gender' => 'female',
			'birth_date' => '2000-03-30',
			'address' => 'Kompl Gading Griya Lestari Bl G-1/23 14188',
			'phone' => '0214410563',
			'email' => 'ccwidjaja@example.com',
			'str_number' => '2449136840551776',
			'sip_number' => '9445484302128237',
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('doctors')->insert([
			'name' => 'Sudomo Iwan Hardja',
			'gender' => 'male',
			'birth_date' => '1975-04-14',
			'address' => 'Jl Kecilung 54',
			'phone' => '0319995001',
			'email' => 'sihardja@example.com',
			'str_number' => '8478930049893478',
			'sip_number' => '6615681487195797',
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('doctors')->insert([
			'name' => 'Cahaya Utami Gunawan',
			'gender' => 'female',
			'birth_date' => '1970-02-03',
			'address' => 'Jl Letjen Suprapto 49 RT002/010, Jakarta',
			'phone' => '0214229451',
			'email' => 'cugunawan@example.com',
			'str_number' => '8246404167781467',
			'sip_number' => '2881694976478873',
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('doctors')->insert([
			'name' => 'Glenna Sinta Kartawijaya',
			'gender' => 'female',
			'birth_date' => '1993-03-12',
			'address' => 'Jl Bendungan Hilir IV 18, Dki Jakarta',
			'phone' => '0215735714',
			'email' => 'gskartawijaya@example.com',
			'str_number' => '1298523366984329',
			'sip_number' => '4301697419260604',
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('doctors')->insert([
			'name' => 'Widya Devi Kusnadi',
			'gender' => 'female',
			'birth_date' => '1980-04-26',
			'address' => 'Jl Balikpapan 3 A, Dki Jakarta',
			'phone' => '0213843292',
			'email' => 'wdkusnadi@example.com',
			'str_number' => '6509991198520711',
			'sip_number' => '4069247088062043',
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('doctors')->insert([
			'name' => 'Kuwat Tirto Budiaman',
			'gender' => 'male',
			'birth_date' => '1955-08-22',
			'address' => 'Jl Nogosari Lor 17 Yogyakarta, Jawa Tengah',
			'phone' => '0214381091',
			'email' => 'ktbudiaman@example.com',
			'str_number' => '5974732394610994',
			'sip_number' => '4632990522517156',
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('doctors')->insert([
			'name' => 'Setiawan Bima Lesmana',
			'gender' => 'male',
			'birth_date' => '1997-04-23',
			'address' => 'Jl By Pass Ngurah Rai',
			'phone' => '0211286193',
			'email' => 'sblesmana@example.com',
			'str_number' => '0548213110637373',
			'sip_number' => '5380024958590530',
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('doctors')->insert([
			'name' => 'Cahaya Dian Setiawan',
			'gender' => 'female',
			'birth_date' => '1967-09-08',
			'address' => 'Jl Denai 41, Sumatera Utara',
			'phone' => '0217352990',
			'email' => 'cdsetiawan@example.com',
			'str_number' => '0773319446137160',
			'sip_number' => '0493620697567636',
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('doctors')->insert([
			'name' => 'Hamdani Sukarno Sanjaya',
			'gender' => 'male',
			'birth_date' => '1976-11-01',
			'address' => 'Jl RS Fatmawati 15 Ruko Golden Plaza Bl G/17-18,Cipete Utara',
			'phone' => '0217508946',
			'email' => 'hssanjaya@example.com',
			'str_number' => '6815637041583473',
			'sip_number' => '7612827039123366',
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('doctors')->insert([
			'name' => 'Widya Widyawati Rachman',
			'gender' => 'female',
			'birth_date' => '1967-10-06',
			'address' => 'Jl Ir H Juanda 165, Jawa Barat',
			'phone' => '0212501985',
			'email' => 'wwrachman@example.com',
			'str_number' => '1311017492375199',
			'sip_number' => '9979583100668192',
			'created_at' => now(),
			'updated_at' => now(),
		]);
    }
}
