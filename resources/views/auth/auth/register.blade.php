<!DOCTYPE html>
<head>
    <title>Admin | Register</title>
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
<div class="reg-w3">
<div class="w3layouts-main">
    <h2>Đăng ký</h2>
        <form action="{{ route('auth.auth.register') }}" method="post">
            @csrf
            <input type="text" class="ggg" name="fullname" placeholder="Họ tên">
            @error('fullname')
            <p style="color:red;">{{ $message }}</p>
            @enderror
            <input type="text" class="ggg" name="email" placeholder="E-MAIL">
            @error('email')
            <p style="color:red;">{{ $message }}</p>
            @enderror
            <input type="date" class="ggg" name="birthday">
            @error('birthday')
            <p style="color:red;">{{ $message }}</p>
            @enderror
            <input type="number" class="ggg" name="phone" placeholder="Số điên thoại">
            @error('phone')
            <p style="color:red;">{{ $message }}</p>
            @enderror
{{--             <select class="ggg" name="gender">
                <option value="1">Nam</option>
                <option value="0">Nữ</option>
            </select> --}}
            <input type="password" class="ggg" name="password" placeholder="Mật khẩu">
            @error('password')
            <p style="color:red;">{{ $message }}</p>
            @enderror
            <h4><input required type="checkbox" />Tôi đồng ý với Điều khoản dịch vụ này</h4>
            
                <div class="clearfix"></div>
                <input type="submit" value="Đăng ký" name="register">
        </form>
        <p>Nếu bạn đã có tài khoản thì hãy<a href="{{ route('auth.auth.login') }}">Đăng nhập</a></p>
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
