@extends('layouts.master-layout')

@section('title', $title)

@section('page-title', $pageTitle)

@section('action-button')
<a href="{{ route('babies.create') }}" class="btn btn-outline-primary my-3">
	+ Add Baby
</a>
@endsection

@section('main-content')
<div class="card my-1 border-0">
	<div class="card-body p-2">
		<div class="row d-flex align-items-center">
			<div class="col-1 text-muted text-center">No</div>
			<div class="col text-muted">Name</div>
			<div class="col text-muted">Doctor in Charge</div>
			<div class="col-2 text-muted text-center">Actions</div>
		</div>
	</div>
</div>

@foreach ($babies as $baby)
<div class="card my-1 {{ $baby['gender']==='male' ? 'border-left-male' : 'border-left-female' }}">
	<div class="card-body p-2">
		<div class="row d-flex align-items-center">
			<div class="col-1 text-center">{{ $loop->iteration }}</div>
			<div class="col">{{ $baby['name'] }}</div>
			<div class="col">{{ $baby->doctor['name'] }}</div>
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