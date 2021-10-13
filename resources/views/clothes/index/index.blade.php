@extends('templates.clothes.master')
@section('main-content')
<!-- ****** Welcome Slides Area Start ****** -->
<section class="welcome_area">
<div class="welcome_slides owl-carousel">
<!-- Single Slide Start -->
<div class="single_slide height-800 bg-img background-overlay" style="background-image: url({{ $publicUrl }}/img/bg-img/bg-1.jpg);">
<div class="container h-100">
<div class="row h-100 align-items-center">
<div class="col-12">
    <div class="welcome_slide_text">
        <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Chỉ hôm nay chúng tôi cung cấp giao hàng miễn phí</h6>
        <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Xu hướng thời trang</h2>
        <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">MUA NGAY</a>
    </div>
</div>
</div>
</div>
</div>

<!-- Single Slide Start -->
<div class="single_slide height-800 bg-img background-overlay" style="background-image: url({{ $publicUrl }}/img/bg-img/bg-4.jpg);">
<div class="container h-100">
<div class="row h-100 align-items-center">
<div class="col-12">
    <div class="welcome_slide_text">
        <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Chỉ hôm nay chúng tôi cung cấp giao hàng miễn phí</h6>
        <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Bộ sưu tập mùa hè</h2>
        <a href="#" class="btn karl-btn" data-animation="fadeInLeftBig" data-delay="1s" data-duration="500ms">Kiểm tra Bộ sưu tập</a>
    </div>
</div>
</div>
</div>
</div>

<!-- Single Slide Start -->
<div class="single_slide height-800 bg-img background-overlay" style="background-image: url({{ $publicUrl }}/img/bg-img/bg-2.jpg);">
<div class="container h-100">
<div class="row h-100 align-items-center">
<div class="col-12">
    <div class="welcome_slide_text">
        <h6 data-animation="fadeInDown" data-delay="0" data-duration="500ms">* Chỉ hôm nay chúng tôi cung cấp giao hàng miễn phí</h6>
        <h2 data-animation="bounceInDown" data-delay="500ms" data-duration="500ms">Thời trang nữ</h2>
        <a href="#" class="btn karl-btn" data-animation="fadeInRightBig" data-delay="1s" data-duration="500ms">Kiểm tra Bộ sưu tập</a>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ****** Welcome Slides Area End ****** -->

<!-- ****** Top Catagory Area Start ****** -->
<section class="top_catagory_area d-md-flex clearfix">
<!-- Single Catagory -->
<div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url({{ $publicUrl }}/img/bg-img/bg-2.jpg);">
<div class="catagory-content">
<h6>Trên phụ kiện</h6>
<h2>Giảm giá 30%</h2>
<a href="#" class="btn karl-btn">MUA NGAY</a>
</div>
</div>
<!-- Single Catagory -->
<div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url({{ $publicUrl }}/img/bg-img/bg-3.jpg);">
<div class="catagory-content">
<h6>TRONG TÚI NGOÀI BỘ SƯU TẬP MỚI</h6>
<h2>Túi thiết kế</h2>
<a href="#" class="btn karl-btn">MUA NGAY</a>
</div>
</div>
</section>
<!-- ****** Top Catagory Area End ****** -->

<!-- ****** New Arrivals Area Start ****** -->
<section class="new_arrivals_area section_padding_100_0 clearfix">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section_heading text-center">
<h2>SẢN PHẨM BÁN CHẠY</h2>
</div>
</div>
</div>
</div>

{{-- <div class="karl-projects-menu mb-100">
<div class="text-center portfolio-menu">
<button class="btn active" data-filter="*">ALL</button>
<button class="btn" data-filter=".women">WOMAN</button>
<button class="btn" data-filter=".man">MAN</button>
<button class="btn" data-filter=".access">ACCESSORIES</button>
<button class="btn" data-filter=".shoes">shoes</button>
<button class="btn" data-filter=".kids">KIDS</button>
</div>
</div> --}}
<div class="container">
<div class="row">
<div class="col-12">
</div>
</div>
<div class="row">
<div class="col-12">
<div class="you_make_like_slider owl-carousel">
<!-- Single gallery Item -->
@foreach($items as $item)
@php 
    $id         = $item->spid;
    $name       = $item->name;
    $price      = number_format($item->price, 0, ".", ".");
    $sp_picture = $item->sp_picture;
    $name_cat   = $item->name_cat;
    $des        = $item->des_text;
    $selling    = $item->selling;

    $slug       = Str::slug($name);

    $urlPic    = 'storage/app/'.$sp_picture;
    $urlDetail = route('clothes.shop.detail', [$slug, $id]);
@endphp
@if($selling == 1)
<div class="single_gallery_item">
    <!-- Product Image -->
    <div class="product-img">
        <img src="{{ $urlPic }}" alt="">
        <div class="product-quicview">
            <a href="{{ $urlDetail }}"><i class="ti-plus"></i></a>
        </div>
    </div>
    <!-- Product Description -->
    <div class="product-description">
        <p class="text-center">{{ $name }}</p>
        <h4 class="product-price text-center">{{ $price }}đ</h4>
    </div>
</div>
@endif
@endforeach
</div>
</div>
</div>
</div>
</section>
<!-- ****** New Arrivals Area End ****** -->

<!-- ****** Offer Area Start ****** -->
<section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url({{ $publicUrl }}/img/bg-img/bg-5.jpg);">
<div class="container h-100">
<div class="row h-100 align-items-end justify-content-end">
<div class="col-12 col-md-8 col-lg-6">
<div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
<h2>White t-shirt <span class="karl-level">Hot</span></h2>
<p>* Giao hàng miễn phí đến ngày 25 tháng 12 năm 2020 </p>
<div class="offer-product-price">
    <h3><span class="regular-price">$25.90</span> $15.90</h3>
</div>
<a href="#" class="btn karl-btn mt-30">MUA NGAY</a>
</div>
</div>
</div>
</div>
</section>
<!-- ****** Offer Area End ****** -->

<!-- ****** Popular Brands Area Start ****** -->
<section class="karl-testimonials-area section_padding_100">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section_heading text-center">
<h2>Ban quản trị</h2>
</div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-12 col-md-8">
<div class="karl-testimonials-slides owl-carousel">
<!-- Single Testimonial Area -->
@foreach($users as $user)
@if($user->permission)
<div class="single-testimonial-area text-center">
    {{-- <span class="quote">"</span> --}}
    {{-- <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6> --}}
    <div class="testimonial-info d-flex align-items-center justify-content-center">
        @if($user->picture != '')
        <div class="tes-thumbnail">
            <img src="storage/app/avatar/{{ $user->picture }}" alt="">
        </div>
        @else
        <div class="tes-thumbnail">
            <img src="storage/app/avatar/images.png" alt="">
        </div>
        @endif
        <div class="testi-data">
            <p>{{ $user->fullname }}</p>
            <span>{{ $user->birthday }}</span>
        </div>
    </div>
</div>
@endif
@endforeach
</div>
</div>
</div>

</div>
</section>
<!-- ****** Popular Brands Area End ****** -->
@stop