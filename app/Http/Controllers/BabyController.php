<?php

namespace App\Http\Controllers;

use App\Models\Baby;
use App\Models\Doctor;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class BabyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$title = 'Babies';
		$pageTitle = 'Baby List';
		$babies = Baby::all();
		return view('babies.baby', compact('title', 'pageTitle', 'babies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Baby';
		$pageTitle = 'Add Baby';
		$doctors = Doctor::all();

		return view('babies.create-baby', compact('title', 'pageTitle', 'doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'name' => ['required'],
			'gender' => ['required'],
			'birthdateTime' => ['required'],
			'weight' => ['required'],
			'birthOrder' => ['required'],
			'doctorInCharge' => ['required'],
		]);

		Baby::create([
			'name' => $request->name,
			'gender' => $request->gender,
			'birth_date_time' => $request->birthdateTime,
			'weight' => $request->weight,
			'birth_order' => $request->birthOrder,
			'doctor_in_charge' => $request->doctorInCharge,
		]);

		return redirect(route('babies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($babyId)
    {
		$title = 'Baby Detail';
		$pageTitle = 'Baby Detail';
		$baby = Baby::getBabyById($babyId);

		return view('babies.show-baby', compact('title', 'pageTitle', 'baby'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($babyId)
    {
        $title = 'Edit Baby';
		$pageTitle = 'Edit Baby';
		$baby = Baby::getBabyById($babyId);
		$doctors = Doctor::all();

		return view('babies.edit-baby', compact('title', 'pageTitle', 'baby', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $babyId)
    {
		$this->validate($request, [
			'name' => ['required'],
			'gender' => ['required'],
			'birthdateTime' => ['required'],
			'weight' => ['required'],
			'birthOrder' => ['required'],
			'doctorInCharge' => ['required'],
		]);

		$baby = Baby::where('id', $babyId);
		$baby->update([
			'name' => $request->name,
			'gender' => $request->gender,
			'birth_date_time' => $request->birthdateTime,
			'weight' => $request->weight,
			'birth_order' => $request->birthOrder,
			'doctor_in_charge' => $request->doctorInCharge,
		]);

		return redirect(route('babies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($babyId)
    {
        $baby = Baby::where('id', $babyId);
		$baby->delete();

		return redirect(route('babies.index'));
    }
}
