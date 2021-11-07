<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
	</script>
	<script src="https://kit.fontawesome.com/03f2b35007.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>@yield('title')</title>
</head>

<body>
	<div class="min-vh-100">
		@include('layouts.navigation')

		<div class="container my-5">
			@yield('main-button')
			<h1 class="my-3 d-flex justify-content-between">@yield('page-title')
				<span class="justify-content-end inline-block">
					@yield('action-button')
				</span>
			</h1>
			<div class="my-4">
				@yield('main-content')
			</div>
		</div>
	</div>

	@include('layouts.footer')
</body>

</html>