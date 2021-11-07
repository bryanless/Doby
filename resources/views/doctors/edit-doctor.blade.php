@extends('layouts.master-layout')

@section('title', $title)

@section('page-title', $pageTitle)

@section('main-button')
<a href="/doctors" class="btn btn-outline-primary mb-4">< Back</a>
@endsection

@section('main-content')
<form action="{{ route('doctors.update', $doctor['id']) }}" method="POST">
	@csrf
	<input type="hidden" name="_method" value="PATCH">

	<div class="form-group">
		<label for="name" class="form-label text-muted">Name</label>
		<input type="text" id="name" name="name" value="{{ $doctor['name'] }}" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="gender" class="form-label text-muted">Gender</label>
		<select id="gender" name="gender" required class="form-select">
			@if ($doctor['gender'] == 'male')
			<option value="male" selected>Male</option>
			<option value="female">Female</option>
			@else
			<option value="male">Male</option>
			<option value="female" selected>Female</option>
			@endif
		</select>
	</div>
	<br />
	<div class="form-group">
		<label for="birthdate" class="form-label text-muted">Birthdate</label>
		<input type="date" id="birthdate" name="birthdate" value="{{ $doctor['birth_date'] }}" required
			class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="address" class="form-label text-muted">Address</label>
		<textarea type="text" id="address" name="address" autocomplete="off"
			class="form-control">{{ $doctor['address'] }}</textarea>
	</div>
	<br />
	<div class="form-group">
		<label for="phone" class="form-label text-muted">Phone Number</label>
		<input type="number" id="phone" name="phone" value="{{ $doctor['phone'] }}" autocomplete="off"
			class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="email" class="form-label text-muted">Email</label>
		<input type="email" id="email" name="email" value="{{ $doctor['email'] }}" autocomplete="off"
			class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="strNumber" class="form-label text-muted">STR Number</label>
		<input type="number" id="strNumber" name="strNumber" value="{{ $doctor['str_number'] }}" autocomplete="off"
			class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="sipNumber" class="form-label text-muted">SIP Number</label>
		<input type="number" id="sipNumber" name="sipNumber" value="{{ $doctor['sip_number'] }}" autocomplete="off"
			class="form-control">
	</div>
	<br />
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul class="mb-0">
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="d-flex justify-content-end gap-2">
		<button type="reset" class="btn btn-outline-secondary">Reset</button>
		<button type="submit" class="btn btn-primary">Edit Doctor</button>
	</div>
</form>
@endsection