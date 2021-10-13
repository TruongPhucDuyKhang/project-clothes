<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AfnDLVGc2uGImzQD_VuYg84hDpc2aqzu6RuqyZl9xJm0WMeoD7HLDFi_MTkX-9rvYDHy5qgEFnzW35xr"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.</script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Title  -->
<title>Karl - Shop quần áo | Home</title>

<!-- Favicon  -->
<link rel="icon" href="{{ $publicUrl }}/img/core-img/favicon.ico">

<!-- Core Style CSS -->
<link rel="stylesheet" href="{{ $publicUrl }}/css/core-style.css">
{{-- <link rel="stylesheet" href="{{ $publicUrl }}/style.css"> --}}

<!-- Responsive CSS -->
<link href="{{ $publicUrl }}/css/responsive.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
{{-- <script type="text/javascript" src="https://itexpress.vn/API/files/it.snow.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script> --}}
</head>
<body>
<div class="catagories-side-menu">
<!-- Close Icon -->
<div id="sideMenuClose">
<i class="ti-close"></i>
</div>
<style>
.smart-search-wrapper {
width: 100%;
background: #fff;
z-index: 100;
right: 80px;
box-shadow: 0px 0px 10px rgba(0,0,0,0.08);
}
.dataEmpty {
text-align: center;
padding: 10px;
}
form.searchform input.searchinput {
background: #f5f5f5;
color: #050505;
width: 100%;
border: none;
height: 55px;
font-size: 15px;
font-weight: 500;
padding: 0 55px 0 20px;
margin: 0;
display: inline-block;
border-radius: 0;
-webkit-appearance: none;
transition: all 150ms linear;
}
#search-header-btn {
position: relative;
bottom: 54px;
float: right;
padding: 10px 0.75em;
}
.catagories-side-menu {
width: 400px;
}
#sideMenuClose {
width: 15%;
-webkit-transition-duration: 250ms;
transition-duration: 250ms;
}
#wrapper.karl-side-menu-open {
left: 400px;
-webkit-transition-duration: 250ms;
transition-duration: 250ms;
}
.smart-search-wrapper .item-ult {
padding: 10px 0;
border-bottom: 1px dotted #dfe0e1;
clear: both;
width: 100%;
float: left;
position: relative;
bottom: 50px;
left: 50px;
}
.smart-search-wrapper .item-ult .thumbs {
width: 40px;
display: inline-block;
text-align: right;
}
.smart-search-wrapper .item-ult .title {
width: calc(100% - 150px);
padding-right: 5px;
float: left;
line-height: 20px;
position: relative;
margin-top: 0px!important;
}
.smart-search-wrapper .item-ult .title a {
font-size: 12px;
text-overflow: ellipsis;
overflow: hidden;
white-space: pre;
float: left;
width: 100%;
margin-bottom: 4px;
}
.smart-search-wrapper .item-ult .title p {
line-height: 15px;
font-size: 12px;
font-weight: 400;
float: left;
margin: 0;
}
.dataEmpty {
text-align: center;
padding: 10px 0;
}
.resultsMore a {
    text-align: center;
    display: block;
    font-size: 14px;
    padding: 10px 0;
}
.resultsMore a:hover{
    color: #337ab7;
}
.resultsMore {
    width: 100%;
    float: left;
}
</style>
<!--  Side Nav  -->
@php 
if(Auth::check()) {
$user  = Auth::user();
$fullname = $user->fullname;

$text  = "Đăng xuất";
$url   = route('auth.auth.logout');
}else {
$fullname = "Xin chào, khách";
$text  = "Đăng nhập";
$url   = route('auth.auth.login');
}
@endphp
<div class="nav-side-menu">
<div class="menu-list">
<h6>Tìm kiếm</h6>
<form method="GET" action="{{ route('clothes.search.search') }}" class="searchform"autocomplete="off">
    <div class="form-group">
        <input type="text" class="form-control search-input searchinput input-search" placeholder="Tìm kiếm sản phẩm..." name="keyword" required>
        <button type="submit" class="btn-search btn" id="search-header-btn">
            <i class="fa fa-search"></i></button>
        </div>
    </form>
    <div id="ajaxSearchResults" class="smart-search-wrapper">
        <div id="resultAlert"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
         $(".search-input").keyup(function(){
            var keyword = $(this).val();
            if(keyword != ''){
                $.ajax({
                    url: "{{ route('clothes.search.show') }}", 
                    type: "GET",
                    data: {
                        keyword: keyword,
                    },
                    success: function(data){
                        $("#ajaxSearchResults").fadeIn();
                        $("#ajaxSearchResults").html(data);
                // alert(data);
                    }
                });
            }else{
                $("#ajaxSearchResults").fadeOut();
            }
        });    
     });
 </script>
</div>
</div>
</div>

<div id="wrapper">

<!-- ****** Header Area Start ****** -->
<header class="header_area">
<!-- Top Header Area Start -->
<div class="top_header_area">
<div class="container h-100">
    <div class="row h-100 align-items-center justify-content-end">

        <div class="col-12 col-lg-7">
            <div class="top_single_area d-flex align-items-center">
                <!-- Logo Area -->
                <div class="top_logo">
                    <a href="{{ route('clothes.index.index') }}"><img src="{{ $publicUrl }}/img/core-img/logo.png" alt=""></a>
                </div>
                <!-- Cart & Menu Area -->
                <div class="header-cart-menu d-flex align-items-center ml-auto">
                    <!-- Cart Area -->
                    <div class="cart">
                        <a href="#" id="header-cart-btn" target="_blank">
                            @if(Session::get('cart'))
                            <span class="cart_quantity" id="numberCart">{{ Session::get('cart')['totalQty']++ }}</span>
                            @else
                            <span class="cart_quantity" id="numberCart">0</span>
                            @endif
                            <i class="ti-bag"></i> Giỏ Hàng
                        </a>
                        <!-- Cart List Area Start -->
                        <style>
                            .cart-list a span:hover {
                                color: #ff084e;
                            }
                        </style>
                        @php 
                        $infoCart = Session::get('cart');
                        @endphp
                        @if($infoCart)
                        <ul class="cart-list">
                            @foreach($infoCart['buy'] as $key => $item)
                            @php 
                            $slug  = Str::slug($item['infoProduct']['name']);
                            $urlDetail = route('clothes.shop.detail', [$slug, $key]);
                            @endphp
                            <li>
                                <a href="{{ $urlDetail }}" class="image"><img class="imagesView" src="storage/app/{{ $item['infoProduct']['sp_picture'] }}" class="cart-thumb" alt=""></a>
                                <div class="cart-item-desc">
                                    <h6><a class="nameViewV" href="{{ $urlDetail }}">{{ $item['infoProduct']['name'] }}</a></h6>
                                    <p>{{ $item['qty'] }}x - <span class="price">{{ number_format($item['infoProduct']['price'], 0, ".", ".") }}</span> VND</p>
                                    <a href="" class="delCart" data-id="{{ $key }}"><span style="font-weight:bold;" class="pull-right">Xoá</span></a>
                                </div>
                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                            </li>
                            @endforeach
                            <li class="total" style="text-align:right;">
                                <a href="{{ route('clothes.cart.index') }}" class="btn btn-sm btn-checkout">Xem giỏ hàng</a>
                            </li>
                        </ul>
                        @else
                        <ul class="cart-list">
                            <li class="text-center">Giỏ hàng trống.</li>
                        </ul>
                        @endif
{{-- <ul class="cart-list">
<li><span class="text-center">Giỏ hàng trống</span></li>
</ul> --}}
</div>
<script type="text/javascript">
$(document).ready(function(){
//Del - cart
$(".delCart").on("click", function(e){
    e.preventDefault();
    var id  = $(this).attr("data-id");
    var url = "{{ route('clothes.cart.del-cart') }}";
    // alert(url);
        $.ajax({
        url: url,
        method: "POST",
        data:{
            id:id,
        },
        success: function(data){
            window.location.reload();
        }
        });
    });
});
</script>
<style>
.header-right-side-menu > a{
background: none;
}
.header-right-side-menu > a:hover{
background: none;
}
</style>
<div class="header-right-side-menu ml-15">
<a href="#"><img src="storage/app/avatar/images.png" 
style="border-radius:50%;height:60%" alt=""></a>
</div>
<span style="color: #2e2e2e;
font-size: 14px;
line-height: 1;
position: relative;
z-index: 1;
font-weight: 600;">{{ $fullname }}</span>
</div>
</div>
</div>

</div>
</div>
</div>

<!-- Top Header Area End -->
<div class="main_header_area">
<div class="container h-100">
<div class="row h-100">
<div class="col-12 d-md-flex justify-content-between">
<!-- Header Social Area -->
<div class="header-social-area">
    <a href="{{ $url }}"><span class="karl-level" style="width: 90px;">{{ $text }}</span> <i class="fa fa-sign-in" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    <a href="#" id="sideMenuBtn" target="_blank"><i style="font-size:20px;" class="fa fa-search" aria-hidden="true"></i></a>
</div>
<!-- Menu Area -->
<div class="main-menu-area">
    <nav class="navbar navbar-expand-lg align-items-start">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

        <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
            <ul class="navbar-nav animated" id="nav">
                <li class="nav-item active"><a class="nav-link" href="{{ route('clothes.index.index') }}">Trang chủ</a></li>
                @foreach($getCats as $getCat)
                @php 
                $id         = $getCat->cat_id;
                $name_cat   = $getCat->name_cat;
                $prarent_id = $getCat->prarent_id;
                @endphp
                @if($prarent_id == 0)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $name_cat }}</a>
                    <div class="dropdown-menu" aria-labelledby="karlDropdown">
                        @foreach($cats as $cat)
                        @if($cat->prarent_id == $id)
                        @php 
                        $slug = Str::slug($cat->name_cat);
                        @endphp
                        <a class="dropdown-item" href="{{ route('clothes.shop.list', [$slug, $cat->cat_id]) }}">{{ $cat->name_cat }}</a>
                        @endif
                        @endforeach
                    </div>
                </li>
                @endif
                @endforeach
                <li class="nav-item"><a class="nav-link" href="{{ route('clothes.shop.sale') }}"><span class="karl-level">hot</span> SALE</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('clothes.contact.index') }}">Liên hệ</a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- Help Line -->
<div class="help-line">
    {{-- @php 
        if(Auth::user()->id){
            $idOrder = $firstUser->orders_id;
        }
    @endphp --}}
    @if(Auth::check())
    <a href="{{ route('clothes.order.purchase') }}"><i class="ti-shopping-cart"></i> Đơn hàng</a>
    @endif
</div>
</div>
</div>
</div>
</div>
</header>
<!-- ****** Header Area End ****** -->
