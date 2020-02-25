<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome/css/font-awesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<style type="text/css">
a{
	color: #2fccd0;
}
body {
	color: #999;
	background: #f5f5f5;
	font-family: 'Poppins', sans-serif;
}
.form-control, .form-control:focus, .input-group-addon {
	border-color: #e1e1e1;
    border-radius: 0;
}
.signup-form {
	width: 390px;
	margin: 0 auto;
	padding: 30px 0;
}
.signup-form h2 {
	color: #636363;
    margin: 0 0 15px;
	text-align: center;
}
.signup-form .lead {
    font-size: 14px;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {		
	border-radius: 1px;
	margin-bottom: 15px;
    background: #fff;
	border: 1px solid #f3f3f3;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 13px;
}
.signup-form .form-control {
	min-height: 38px;
	box-shadow: none !important;
	border-width: 0 0 1px 0;
}	
.signup-form .input-group-addon {
	max-width: 42px;
	text-align: center;
	background: none;
	border-width: 0 0 1px 0;
	padding-left: 5px;
}
.signup-form .btn {        
    font-size: 16px;
    font-weight: bold;
	background: #2fccd0;
    border-radius: 3px;
	border: none;
	min-width: 140px;
    outline: none !important;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #179b81;
}
.signup-form a {
	color: #19aa8d;
	text-decoration: none;
}	
.signup-form a:hover {
	text-decoration: underline;
}
.signup-form .fa {
	font-size: 21px;
}
.signup-form .fa-paper-plane {
	font-size: 17px;
}
.signup-form .fa-check {
	color: #fff;
	left: 9px;
	top: 18px;
	font-size: 7px;
	position: absolute;
}
.myform{
  position: absolute;
  top: 20px;
  left: 83%;
}
.myform ul{
  text-decoration: none;
}
.form-1 i{
  color: #2fccd0;
}
.form-1 li{
  display: inline;
  color: white;
  padding-right: 10px;
}
.myform a{
  text-decoration: none!important;
  color: #2fccd0;
  font-size: 16px;
}
.myform a:hover{
  color: #2fccd0;
}

</style>
</head>
<body>
<section class="myform">
  <ul class="form-1">
    <li><i class="fa fa-user">&nbsp;<a href="/login">Login</a></i></li>
    <li><i class="fa fa-home">&nbsp;<a href="/">Home</a></i></li>
  </ul>
</section>

<div class="signup-form">	
    <form action="/register/store" method="post">
    	@csrf
		<h2>Create Account</h2>
		<p class="lead">It's free and hardly takes more than 30 seconds.</p>
				@if($message = Session::get('error'))
			<div class="alert alert-block alert-danger">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong> {{ $message }}</strong>
			</div>
		@endif
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="Password" >
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
			</div>
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>
		<p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
    </form>
	<div class="text-center">Already have an account? <a href="/login">Login here</a>.</div>
</div>
</body>
</html> 