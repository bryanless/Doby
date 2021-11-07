@extends('layouts.master-layout')

@section('title', $title)

@section('page-title', $pageTitle)

@section('main-button')
<a href="/babies" class="btn btn-outline-primary mb-4">< Back</a>
@endsection

@section('main-content')
<form action="{{ route('babies.store') }}" method="POST">
	@csrf
	<div class="form-group">
		<label for="name" class="form-label text-muted">Name</label>
		<input type="text" id="name" name="name" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="gender" class="form-label text-muted">Gender</label>
		<select id="gender" name="gender" required class="form-select">
			<option value="" selected disabled hidden>Choose Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
	</div>
	<br />
	<div class="form-group">
		<label for="birthdateTime" class="form-label text-muted">Birthdate and Time</label>
		<input type="datetime-local" id="birthdateTime" name="birthdateTime" required class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="weight" class="form-label text-muted">Weight</label>
		<input type="number" id="weight" name="weight" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="birthOrder" class="form-label text-muted">Birth Order</label>
		<input type="number" id="birthOrder" name="birthOrder" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="doctorInCharge" class="form-label text-muted">Doctor in Charge</label>
		<select id="doctorInCharge" name="doctorInCharge" required class="form-select">
			<option value="" selected disabled hidden>Choose Doctor</option>
			@foreach ($doctors as $doctor)
				<option value="{{ $doctor['id'] }}">{{ $doctor['name'] }}</option>
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
		<button type="submit" class="btn btn-primary">Add Baby</button>
	</div>
</form>
@endsection