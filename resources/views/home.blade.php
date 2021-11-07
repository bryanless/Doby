@extends('layouts.home-layout')

@section('title', $title)

{{-- @section('page-title', $pageTitle) --}}

@section('main-content')
<div class="text-center">
	<h1 class="display-4 fw-bold">Doby</h1>
	<div class="col">
		<p class="lead mb-4">We care about your lovely one</p>
		<div class="d-flex justify-content-center gap-2 mb-5">
			<a href="/doctors" class="btn btn-lg btn-primary">
				<i class="fas fa-user-md"></i>
				Doctor List
			</a>
			<a href="/babies" class="btn btn-lg btn-success">
				<i class="fas fa-baby"></i>
				Baby List
			</a>
		</div>
		<img src="{{ asset('images/doctors.svg') }}" alt="Doctors" class="hero-image">
	</div>
</div>
@endsection