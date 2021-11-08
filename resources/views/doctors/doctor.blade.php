@extends('layouts.master-layout')

@section('title', $title)

@section('page-title', $pageTitle)

@section('action-button')
<a href="{{ route('doctors.create') }}" class="btn btn-outline-primary my-3">
	+ Add Doctor
</a>
@endsection

@section('main-content')
<div class="card my-1 border-0">
	<div class="card-body p-2">
		<div class="row d-flex align-items-center">
			<div class="col-1 text-muted text-center">No</div>
			<div class="col text-muted">Name</div>
			<div class="col-2 text-muted">STR Number</div>
			<div class="col-2 text-muted">SIP Number</div>
			<div class="col-2 text-muted text-center">Actions</div>
		</div>
	</div>
</div>

@foreach ($doctors as $doctor)
<div class="card my-1 {{ $doctor['gender']==='male' ? 'border-left-male' : 'border-left-female' }}">
	<div class="card-body p-2">
		<div class="row d-flex align-items-center">
			<div class="col-1 text-center">{{ $loop->iteration }}</div>
			<div class="col">{{ $doctor['name'] }}</div>
			<div class="col-2">{{ $doctor->parseStrNumber($doctor['str_number']) }}</div>
			<div class="col-2">{{ $doctor->parseSipNumber($doctor['sip_number']) }}</div>
			<div class="col-2 text-center">
				<a href="{{ route('doctors.show', $doctor['id']) }}" class="btn btn-primary">
					<i class="far fa-eye"></i>
				</a>
				<a href="{{ route('doctors.edit', $doctor['id']) }}" class="btn btn-success">
					<i class="far fa-edit"></i>
				</a>
				<span class="inline-block">
					<form action="{{ route('doctors.destroy', $doctor['id']) }}" method="POST">
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