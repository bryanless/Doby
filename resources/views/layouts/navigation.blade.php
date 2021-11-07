<nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm px-5">
	<div class="container-fluid">
		{{-- Logo --}}
		<a href="/" class="navbar-brand">
			{{-- <img src="image/doby.png" alt="Doby" class="navbar-brand"> --}}
			Doby
		</a>
		{{-- Nav Button --}}
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		{{-- Nav Item --}}
		<div id="collapsibleNavbar" class="collapse navbar-collapse justify-content-end">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="/" class="nav-link {{ ($title === 'Doby')?'active':'' }}">Home</a>
				</li>
				<li class="nav-item">
					<a href="/doctors" class="nav-link {{ ($title === 'Doctors')?'active':'' }}">Doctors</a>
				</li>
				<li class="nav-item">
					<a href="/babies" class="nav-link {{ ($title === 'Babies')?'active':'' }}">Babies</a>
				</li>
			</ul>
		</div>
	</div>
</nav>