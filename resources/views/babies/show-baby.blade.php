@extends('layouts.master-layout')

@section('title', $title)

@section('main-button')
<a href="/babies" class="btn btn-outline-primary mb-4">< Back</a>
@endsection

@section('page-title', $pageTitle)

@section('action-button')
<a href="{{ route('babies.edit', $baby['id']) }}" class="btn btn-success my-3">
	<i class="far fa-edit"></i>
	Edit
</a>
<span class="inline-block">
	<form action="{{ route('babies.destroy', $baby['id']) }}" method="POST">
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
<div class="card {{ $baby['gender']==='male' ? 'border-left-male bg-male' : 'border-left-female bg-female' }}">
	<div class="card-body">
		<h3 class="card-title pb-4">{{ $baby['name'] }}</h3>
		<ul class="list-unstyled">
			<li class="card-text text-muted">Gender</li>
			<h5 class="card-text pb-3">{{ ucfirst($baby['gender']) }}</h5>
			<li class="card-text text-muted">Birthdate and Time</li>
			<h5 class="card-text pb-3">{{ $baby->parseDatetimeToDatetimeBirth($baby['birth_date_time']) }}</h5>
			<li class="card-text text-muted">Weight</li>
			<h5 class="card-text pb-3">{{ $baby['weight'] }} gram</h5>
			<li class="card-text text-muted">Birth Order</li>
			<h5 class="card-text pb-3">{{ $baby['birth_order'] }}</h5>
			<li class="card-text text-muted">Doctor in Charge</li>
			<h5 class="card-text">
				{{ $baby->doctor['name'] }}
				<span class="inline-block">
					<a href="{{ route('doctors.show', $baby->doctor['id']) }}" class="btn btn-outline-primary">
						<i class="far fa-eye"></i>
					</a>
				</span>
			</h5>
		</ul>
	</div>
</div>
@endsection