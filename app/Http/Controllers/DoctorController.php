<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Doctors';
		$pageTitle = 'Doctor List';
		$doctors = Doctor::all();
		return view('doctors.doctor', compact('title', 'pageTitle', 'doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Doctor';
		$pageTitle = 'Add Doctor';

		return view('doctors.create-doctor', compact('title', 'pageTitle'));
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
			'birthdate' => ['required'],
			'address' => ['required'],
			'phone' => ['required'],
			'email' => ['required'],
			'strNumber' => ['required'],
			'sipNumber' => ['required'],
		]);

		Doctor::create([
			'name' => $request->name,
			'gender' => $request->gender,
			'birth_date' => $request->birthdate,
			'address' => $request->address,
			'phone' => $request->phone,
			'email' => $request->email,
			'str_number' => $request->strNumber,
			'sip_number' => $request->sipNumber,
		]);

		return redirect(route('doctors.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($doctorId)
    {
        $title = 'Doctor Detail';
		$pageTitle = 'Doctor Detail';
		$doctor = Doctor::getDoctorById($doctorId);

		return view('doctors.show-doctor', compact('title', 'pageTitle', 'doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($doctorId)
    {
        $title = 'Edit Doctor';
		$pageTitle = 'Edit Doctor';
		$doctor = Doctor::getDoctorById($doctorId);

		return view('doctors.edit-doctor', compact('title', 'pageTitle', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $doctorId)
    {
		$this->validate($request, [
			'name' => ['required'],
			'gender' => ['required'],
			'birthdate' => ['required'],
			'address' => ['required'],
			'phone' => ['required'],
			'email' => ['required'],
			'strNumber' => ['required'],
			'sipNumber' => ['required'],
		]);

		$doctor = Doctor::where('id', $doctorId);
		$doctor->update([
			'name' => $request->name,
			'gender' => $request->gender,
			'birth_date' => $request->birthdate,
			'address' => $request->address,
			'phone' => $request->phone,
			'email' => $request->email,
			'str_number' => $request->strNumber,
			'sip_number' => $request->sipNumber,
		]);

		return redirect(route('doctors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($doctorId)
    {
        $doctor = Doctor::where('id', $doctorId);
		$doctor->delete();

		return redirect(route('doctors.index'));
    }
}
