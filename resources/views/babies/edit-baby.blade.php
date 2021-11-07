@extends('layouts.master-layout')

@section('title', $title)

@section('page-title', $pageTitle)

@section('main-button')
<a href="/babies" class="btn btn-outline-primary mb-4">< Back</a>
@endsection

@section('main-content')
<form action="{{ route('babies.update', $baby['id']) }}" method="POST">
	@csrf
	<input type="hidden" name="_method" value="PATCH">

	<div class="form-group">
		<label for="name" class="form-label text-muted">Name</label>
		<input type="text" id="name" name="name" value="{{ $baby['name'] }}" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="gender" class="form-label text-muted">Gender</label>
		<select id="gender" name="gender" required class="form-select">
			@if ($baby['gender'] == 'male')
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
		<label for="birthdateTime" class="form-label text-muted">Birthdate and Time</label>
		<input type="datetime-local" id="birthdateTime" name="birthdateTime" value="{{ $baby->parseDatetimeToDatetimeLocal($baby['birth_date_time']) }}" required
			class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="weight" class="form-label text-muted">Weight</label>
		<input type="number" id="weight" name="weight" value="{{ $baby['weight'] }}" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="birthOrder" class="form-label text-muted">Birth Order</label>
		<input type="number" id="birthOrder" name="birthOrder" value="{{ $baby['birth_order'] }}" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="doctorInCharge" class="form-label text-muted">Doctor in Charge</label>
		<select id="doctorInCharge" name="doctorInCharge" class="form-select">
			@foreach ($doctors as $doctor)
				@if ($baby['doctor_in_charge'] == $doctor['id'])
					<option value="{{ $doctor['id'] }}" selected>{{ $doctor['name'] }}</option>
				@else
					<option value="{{ $doctor['id'] }}">{{ $doctor['name'] }}</option>
				@endif
			@endforeach
		</select>
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
		<button type="submit" class="btn btn-primary">Edit Baby</button>
	</div>
</form>
@endsection