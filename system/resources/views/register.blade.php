<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Register</title>
	<link href="{{ url('public')}}/css/login.css" rel="stylesheet" type="text/css"/>
	<link href="{{url('public')}}/img/favicon.png" rel="shortcut icon"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="{{url('public')}}/plugins/jquery/jquery.min.js"></script>
	<script src="{{url('public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{url('public')}}/dist/js/adminlte.min.js"></script>
	<script src="{{url('public')}}/plugins/chart.js/Chart.min.js"></script>
	<script src="{{url('public')}}/dist/js/demo.js"></script>
	<script src="{{url('public')}}/dist/js/pages/dashboard3.js"></script>
</head>
<body>
	<div class="logo">
			<img src="{{url('public')}}/img/favicon.png" style="width: 20px;height: 20px;">
			<a href="{{url('/')}}"><font>KO</font>PI</a>
	</div>
	<section class="login-container">
		<div class="login-inputs">
			@include('utils.notif')
			<h1>Register</h1>
			<form action="{{url('register')}}" method="post">
				@csrf
				<input placeholder="Nama Lengkap" type="text" name="nama" />
				<input placeholder="Username" type="text" name="username" />
				<input placeholder="Email" type="email" name="email"/>
				<input placeholder="Password" type="password" name="password"/>
				<input placeholder="Confirm Password" type="password"/>
				<button>Register</button>
			</form>
			<p>Already Haven't Account?<a class="forget" href="{{url('login')}}">Login</a></p>
		</div>
	</section>
</body>
</html>