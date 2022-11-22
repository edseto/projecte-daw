<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Daw Va Go' }}</title>

    <!--<link href="asset('css/styles.css');" rel="stylesheet" />-->
	<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <!-- As a heading -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="{{ route('landing') }}" class="navbar-brand">DawVa<b>GO</b></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="{{ route('landing') }}" class="nav-item nav-link">Home</a>
			<a href="#" class="nav-item nav-link">Novetats</a>
            <!--
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Services</a>
				<div class="dropdown-menu">
					<a href="#" class="dropdown-item">Web Design</a>
					<a href="#" class="dropdown-item">Web Development</a>
					<a href="#" class="dropdown-item">Graphic Design</a>
					<a href="#" class="dropdown-item">Digital Marketing</a>
                </div>
            </div>
			<a href="#" class="nav-item nav-link active">Pricing</a>
			<a href="#" class="nav-item nav-link">Blog</a>
            -->
			<a href="#" class="nav-item nav-link">Contacta</a>
			@if (Auth::check())
				@if(auth()->user()->role == '800')
					<a href="{{ route('admin.index') }}" class="nav-item nav-link">Administració</a>
				@endif
			@endif
		</div>
        <!--
		<form class="navbar-form form-inline">
			<div class="input-group search-box">
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<div class="input-group-append">
					<span class="input-group-text">
						<i class="material-icons">&#xE8B6;</i>
					</span>
				</div>
			</div>
		</form>
        -->

        @if (Auth::check())
        <div class="navbar-nav ml-auto action-buttons">
            <a href="{{ route('users.edit', ['id' => auth()->user()->id]) }}" class="nav-link mr-4"><i class="fa fa-user"></i> {{ auth()->user()->name }}</a>
			<a href="{{ route('logout') }}" class="btn btn-danger "><i class="fa fa-power-off"></i> Tanca sessió</a>
        </div>
        @else
		<div class="navbar-nav ml-auto action-buttons">
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4"><i class="fa fa-user"></i> Entrar</a>
                <div class="dropdown-menu action-form">
					<form action="{{ route('signin') }}" method="post">
						@csrf
						<p class="hint-text">Inicia sessió amb les teves credencials</p>
						<div class="form-group">
							<input id="username" name="username" type="text" class="form-control" placeholder="Username" required="required">
						</div>
						<div class="form-group">
							<input id="password" name="password" type="password" class="form-control" placeholder="Password" required="required">
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="Iniciar sessió">
						<div class="text-center mt-2">
							<a href="#"><i class="fa fa-key"></i> No recordes la teva contrassenya?</a>
						</div>
					</form>
                </div>
			</div>
			<div class="nav-item dropdown">
				<a href="{{ route('register') }}" class="btn btn-primary"><i class="fa fa-user"></i> Registrar-se</a>
				<!--<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn">Registrar-se</a>
                <div class="dropdown-menu action-form">
					<form action="{{ route('register') }}" method="post">
						@csrf
						<p class="hint-text">Fill in this form to create your account!</p>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Nom d'usuari" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Contrassenya" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Confirmar contrassenya" required="required">
						</div>
						<div class="form-group">
							<label class="form-check-label"><input type="checkbox" required="required"> Accepto els <a href="#">termes i condicions</a> d'aquest lloc web</label>
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="Sign up">
					</form>-->
				</div>
			</div>
        </div>
        @endif

    </nav>
         <!-- Background image -->
         <div
            class="p-5 text-center bg-image mb-5"
            style="
              background-image: url('https://granhotelnagari.com/wp-content/uploads/2022/04/habitacionesSMS.jpg');
              height: 450px;
              background-position: center 55%;
            "
         ></div>
          <!-- Background image -->
    </header>
    {!! $slot !!}
	<footer class="text-center text-white mt-5" style="background-color: #f1f1f1;">
  		<div class="container pt-4">
    		<section class="mb-4">
				<a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
				<a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
				<a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>
				<a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
			</section>
		</div>

		<div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2022 Copyright: <a class="text-dark" href="https://dawvago.com/">Dawvago.com</a>
		</div>
    </footer>
</body>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
</html>
