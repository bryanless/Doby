@extends('layouts.master-layout')

@section('title', $title)

@section('main-button')
<a href="/doctors" class="btn btn-outline-primary mb-4">< Back</a>
@endsection

@section('page-title', $pageTitle)

@section('action-button')
<a href="{{ route('doctors.edit', $doctor['id']) }}" class="btn btn-success">
	<i class="far fa-edit"></i>
	Edit
</a>
<span class="inline-block">
	<form action="{{ route('doctors.destroy', $doctor['id']) }}" method="POST">
		@csrf
		@method('DELETE')
		<button type="submit" class="btn btn-danger">
			<i class="far fa-trash-alt"></i>
			Delete
		</button>
	</form>
</span>
@endsection

@section('main-content')
<div class="card bg-light">
	<div class="card-body">
		<h3 class="card-title pb-4">{{ $doctor['name'] }}</h3>
		<ul class="list-unstyled">
			<li class="card-text text-muted">Gender</li>
			<h5 class="card-text pb-3">{{ ucfirst($doctor['gender']) }}</h5>
			<li class="card-text text-muted">Birthdate</li>
			<h5 class="card-text pb-3">{{ $doctor['birth_date'] }}</h5>
			<li class="card-text text-muted">Address</li>
			<h5 class="card-text pb-3">{{ $doctor['address'] }}</h5>
			<li class="card-text text-muted">Phone</li>
			<h5 class="card-text pb-3">{{ $doctor['phone'] }}</h5>
			<li class="card-text text-muted">Email</li>
			<h5 class="card-text pb-3">{{ $doctor['email'] }}</h5>
			<li class="card-text text-muted">STR Number</li>
			<h5 class="card-text pb-3">{{ $doctor['str_number'] }}</h5>
			<li class="card-text text-muted">SIP Number</li>
			<h5 class="card-text">{{ $doctor['sip_number'] }}</h5>
		</ul>
	</div>
</div>

<h2 class="my-3">Baby List</h2>

<div class="card my-1 border-0">
	<div class="card-body p-2">
		<div class="row d-flex align-items-center">
			<div class="col-1 text-muted text-center">No</div>
			<div class="col text-muted">Name</div>
			<div class="col text-muted">Gender</div>
			<div class="col-2 text-muted text-center">Actions</div>
		</div>
	</div>
</div>

@foreach ($doctor->babies as $baby)
<div class="card my-1 {{ $baby['gender']==='male' ? 'border-left-male' : 'border-left-female' }}">
	<div class="card-body p-2">
		<div class="row d-flex align-items-center">
			<div class="col-1 text-center">{{ $loop->iteration }}</div>
			<div class="col">{{ $baby['name'] }}</div>
			<div class="col">{{ ucfirst($baby['gender']) }}</div>
			<div class="col-2 text-center">
				<a href="{{ route('babies.show', $baby['id']) }}" class="btn btn-primary">
					<i class="far fa-eye"></i>
				</a>
				<a href="{{ route('babies.edit', $baby['id']) }}" class="btn btn-warning">
					<i class="far fa-edit"></i>
				</a>
				<span class="inline-block">
					<form action="{{ route('babies.destroy', $baby['id']) }}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
					</form>
				</span>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection