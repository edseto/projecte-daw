<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Daw Va Go' }}</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
body {
	font-family: 'Varela Round', sans-serif;
}
.form-control {
	box-shadow: none;		
	font-weight: normal;
	font-size: 13px;
}
.navbar {
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #dfe3e8;
	border-radius: 0;
}
.nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
}
.navbar .navbar-brand {
	padding-left: 0;
	font-size: 20px;
	padding-right: 50px;
}
.navbar .navbar-brand b {
	color: #33cabb;		
}
.navbar .form-inline {
	display: inline-block;
}
.navbar a {
	color: #888;
	font-size: 15px;
}
.search-box {
	position: relative;
}	
.search-box input {
	padding-right: 35px;
	border-color: #dfe3e8;
	border-radius: 4px !important;
	box-shadow: none
}
.search-box .input-group-text {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .sign-up-btn {
	min-width: 110px;
	max-height: 36px;
}
.navbar .dropdown-menu {
	color: #999;
	font-weight: normal;
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar a, .navbar a:active {
	color: #888;
	padding: 8px 20px;
	background: transparent;
	line-height: normal;
}
.navbar .navbar-form {
	border: none;
}
.navbar .action-form {
	width: 280px;
	padding: 20px;
	left: auto;
	right: 0;
	font-size: 14px;
}
.navbar .action-form a {		
	color: #33cabb;
	padding: 0 !important;
	font-size: 14px;
}
.navbar .action-form .hint-text {
    text-align: center;
    margin-bottom: 15px;
    font-size: 13px;
}
.navbar .btn-primary, .navbar .btn-primary:active {
	color: #fff;
	background: #33cabb !important;
	border: none;
}	
.navbar .btn-primary:hover, .navbar .btn-primary:focus {		
	color: #fff;
	background: #31bfb1 !important;
}
.navbar .social-btn .btn, .navbar .social-btn .btn:hover {
	color: #fff;
	margin: 0;
	padding: 0 !important;
	font-size: 13px;
	border: none;
	transition: all 0.4s;
	text-align: center;
	line-height: 34px;
	width: 47%;
	text-decoration: none;
}
.navbar .social-btn .facebook-btn {
	background: #507cc0;
}
.navbar .social-btn .facebook-btn:hover {
	background: #4676bd;
}
.navbar .social-btn .twitter-btn {
	background: #64ccf1;
}
.navbar .social-btn .twitter-btn:hover {
	background: #4ec7ef;
}
.navbar .social-btn .btn i {
	margin-right: 5px;
	font-size: 16px;
	position: relative;
	top: 2px;
}
.or-seperator {
	margin-top: 32px;
	text-align: center;
	border-top: 1px solid #e0e0e0;
}
.or-seperator b {
	color: #666;
	padding: 0 8px;
	width: 30px;
	height: 30px;
	font-size: 13px;
	text-align: center;
	line-height: 26px;
	background: #fff;
	display: inline-block;
	border: 1px solid #e0e0e0;
	border-radius: 50%;
	position: relative;
	top: -15px;
	z-index: 1;
}
.navbar .action-buttons .dropdown-toggle::after {
	display: none;
}
.form-check-label input {
	position: relative;
	top: 1px;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 300px;
		margin-left: 30px;
	}
}
@media (max-width: 768px){
	.navbar .dropdown-menu.action-form {
		width: 100%;
		padding: 10px 15px;
		background: transparent;
		border: none;
	}
	.navbar .form-inline {
		display: block;
	}
	.navbar .input-group {
		width: 100%;
	}
}
</style>
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
			<a href="#" class="nav-item nav-link">About</a>	
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
			<a href="#" class="nav-item nav-link">Contact</a>
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
            <a href="{{ route('users.edit', ['id' => auth()->user()->id]) }}" class="nav-link mr-4">{{ auth()->user()->name }}</a>
			<a href="{{ route('logout') }}" class="btn btn-primary">Tanca sessió</a>
        </div>
        @else
		<div class="navbar-nav ml-auto action-buttons">
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4">Entrar</a>
                <div class="dropdown-menu action-form">
					<form action="{{ route('login') }}" method="post">
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
							<a href="#">No recordes la teva contrassenya?</a>
						</div>
					</form>
                </div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn">Registrar-se</a>
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
					</form>
				</div>
			</div>
        </div>
        @endif
	</div>
</nav>
    </header>
    {!! $slot !!}
    <footer>

    </footer>
</body>
</html>
