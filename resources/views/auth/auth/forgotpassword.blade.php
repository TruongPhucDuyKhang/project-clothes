<!DOCTYPE html>
<head>
	<title>Admin | Login</title>
	<base href="{{ asset('') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="public/templates/admin/css/bootstrap.min.css" >
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="public/templates/admin/css/style.css" rel='stylesheet' type='text/css' />
	<link href="public/templates/admin/css/style-responsive.css" rel="stylesheet"/>
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="public/templates/admin/css/font.css" type="text/css"/>
	<link href="public/templates/admin/css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<script src="jpublic/templates/admin/s/jquery2.0.3.min.js"></script>
</head>
<body>
	<style>
		.w3layouts-main input[type="submit"] {
			position: relative;
			left: 35px;
			bottom: 20px;
		}
		.next {
			position: relative;
			right: 120px;
			bottom: 115px;
		    padding: 12px 38px;
		    font-size: 18px;
		    text-transform: uppercase;
		    letter-spacing: 2px;
		    background: #f0bcb4;
		    color: white;
		    border: none;
		    outline: none;
		    display: table;
		    cursor: pointer;
		    margin: 45px auto 31px;
		    transition: 0.5s all;
		    -webkit-transition: 0.5s all;
		    -o-transition: 0.5s all;
		    -moz-transition: 0.5s all;
		    -ms-transition: 0.5s all;
		}
		.next:hover {
			background: white;
			color: black;
		}
	</style>
	<div class="log-w3">
		<div class="w3layouts-main">
			<h2>Phục hồi mật khẩu</h2>
			@if(Session::has('msg'))
			<p class="alert alert-danger" style="color:red;">{{ Session::get('msg') }}</p>
			@endif
			@if(Session::has('success'))
			<p class="alert alert-success" style="color:red;">{{ Session::get('success') }}</p>
			@endif
			<form method="post" action="{{ route('auth.auth.forgotpassword') }}">
				@csrf
				<input type="email" class="ggg" name="email" placeholder="E-MAIL">
				<div class="clearfix"></div>
				<input type="submit" name="submit" value="Gửi">
				<a class="next" href="{{ route('auth.auth.login') }}">Quay lại</a>
			</form>
		</div>
	</div>
	<script src="public/templates/admin/js/bootstrap.js"></script>
	<script src="public/templates/admin/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="public/templates/admin/js/scripts.js"></script>
	<script src="public/templates/admin/js/jquery.slimscroll.js"></script>
	<script src="public/templates/admin/js/jquery.nicescroll.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
	<script src="public/templates/admin/js/jquery.scrollTo.js"></script>
</body>
</html>
