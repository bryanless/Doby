@extends('layouts.master-layout')

@section('title', $title)

@section('page-title', $pageTitle)

@section('main-button')
<a href="/doctors" class="btn btn-outline-primary mb-4">< Back</a>
@endsection

@section('main-content')
<form action="{{ route('doctors.store') }}" method="POST">
	@csrf
	<div class="form-group">
		<label for="name" class="form-label text-muted">Name</label>
		<input type="text" id="name" name="name" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="gender" class="form-label text-muted">Gender</label>
		<select id="gender" name="gender" required class="form-select">
			<option value="" selected disabled hidden>Select Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
	</div>
	<br />
	<div class="form-group">
		<label for="birthdate" class="form-label text-muted">Birthdate</label>
		<input type="date" id="birthdate" name="birthdate" required class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="address" class="form-label text-muted">Address</label>
		<textarea type="text" id="address" name="address" autocomplete="off" class="form-control"></textarea>
	</div>
	<br />
	<div class="form-group">
		<label for="phone" class="form-label text-muted">Phone Number</label>
		<input type="number" id="phone" name="phone" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="email" class="form-label text-muted">Email</label>
		<input type="email" id="email" name="email" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="strNumber" class="form-label text-muted">STR Number</label>
		<input type="number" id="strNumber" name="strNumber" autocomplete="off" class="form-control">
	</div>
	<br />
	<div class="form-group">
		<label for="sipNumber" class="form-label text-muted">SIP Number</label>
		<input type="number" id="sipNumber" name="sipNumber" autocomplete="off" class="form-control">
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
		<button type="reset" class="btn btn-outline-secondary gap-2">Reset</button>
		<button type="submit" class="btn btn-primary">Add Doctor</button>
	</div>
</form>
@endsection