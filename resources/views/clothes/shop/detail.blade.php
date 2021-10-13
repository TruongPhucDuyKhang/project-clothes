@extends('templates.clothes.master')
@section('main-content')
<style>
    .single_product_desc .cart .cart-submit {
        position: relative;
        display: block; 
        width: 100%;
        background: transparent;
        border: 1px solid #bfc7c7;
        color: black;
        text-transform: uppercase;
        overflow: hidden;
        transition: 1s all ease;
        position: relative;
    }
    .single_product_desc .cart .cart-submit:hover{
        color: white;
        background: #bfc7c7;
    }
    .btn::before{
      background: #bfc7c7;
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      z-index: -1;
      transition: all 0.6s ease;
  }
  .single_product_desc .cart .cart-submit::before{
      width: 100%;
      height: 0%;
      transform: translate(-50%,-50%) rotate(45deg);
  }
  .single_product_desc .cart .cart-submit:hover::before{
      height: 781%;
  }
  .swatch {
    padding: 10px 0;
    width: 100%;
}
.swatch .select-swap {
    display: inline-block;
    vertical-align: middle;
}
.clearfix:after {
    clear: both;
}
.select-swap p {
    font-size: 8px;
    text-align: center;
}
.swatch .swatch-element {
    display: inline-block;
    margin-right: 8px;
    position: relative;
    vertical-align: bottom;
}
.swatch .swatch-element.fix-border label.sd {
    border: 1px solid #000;
    background: transparent;
    color: #fff;
}
.sd{
    background: black;
    color: white;
    border: 1px solid #e5e5e5;
}
.single_product_desc .widget.size .widget-desc a {
    display: block;
    margin: 0;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border: 1px solid #e5e5e5;
    font-size: 12px;
    font-weight: 500;
    text-align: center;
    cursor: pointer;
}
.single_product_desc .widget.size .widget-desc a:hover, .single_product_desc .widget.size .widget-desc a:focus {
    border: 1px solid #e5e5e5;
    background-color: black;
}
/*.single_product_desc .widget.size .widget-desc li:not(.color) a:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    width: 50%;
    height: 50%;
    background: url(//theme.hstatic.net/1000341789/1000533258/14/sold_out.png?v=636) no-repeat;
    background-size: contain;
    }*/
    .single_product_desc del {
        font-size: 14px;
        color: #777a7b;
        padding-left: 10px;
        font-weight: 500;
    }
    .single_product_desc span.pro-sale {
        display: inline-block;
        padding: 5px 15px;
        margin-right: 10px;
        background: #ededed;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 15px;
        color: #f94c43;
    }
    div.stars {
      display: inline-block;
  }

  input.star { display: none; }

  label.star {
      float: right;
      padding: 10px;
      font-size: 25px;
      color: #444;
      transition: all .2s;
  }

  input.star:checked ~ label.star:before {
      content: '\f005';
      color: #FE7;
      transition: all .25s;
  }
  input.star:hover ~ label.star:before {
      content: '\f005';
      color: #FE7;
      transition: all .25s;
  }

  input.star-5:checked ~ label.star:before {
      color: #FE7;
      text-shadow: 0 0 20px #952;
  }
  input.star-5:hover ~ label.star:before {
      color: #FE7;
      text-shadow: 0 0 20px #952;
  }

  input.star-1:checked ~ label.star:before { color: #FE7;}

  label.star:hover { transform: rotate(-15deg) scale(1.3); }
  label.star:before {
      content: '\f006';
      font-family: FontAwesome;
  }
</style>
<!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
@php 
$id          = $item->spid;
$name        = $item->name;
$price       = $item->price;
$sp_picture  = $item->sp_picture;
$detail_text = $item->detail_text;
$status      = $item->status;
$shirt_size  = $item->shirt_size;
$shoes_size  = $item->shoes_size;
$discount    = $item->discount;
$product_qty = $item->product_qty;

$slug        = Str::slug($name);
$urlPic      = 'storage/app/'.$sp_picture;
@endphp
<div class="breadcumb_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb d-flex align-items-center">
                    <li class="breadcrumb-item"><a href="{{ route('clothes.index.index') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">categorys</a></li>
                    <li class="breadcrumb-item active">{{ $name }} - {{ $id }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

<!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
<section class="single_product_details_area section_padding_0_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                        @for($i=0; $i <= 1; $i++)
                        <ol class="carousel-indicators">
                            <li data-target="#product_details_slider" data-slide-to="{{ $i++ }}" style="background-image: url({{ $urlPic }});">
                            </li>
                            @foreach($libraryimgs as $libraryimg)
                            @php 
                            $id_img  = $libraryimg->id_img;
                            $picture = $libraryimg->picture;

                            $urlPicLib  = 'storage/app/'.$picture;
                            @endphp
                            <li data-target="#product_details_slider" data-slide-to="{{ $i++ }}" style="background-image: url({{ $urlPicLib }});">
                            </li>
                            @endforeach
                        </ol>
                        @endfor
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="{{ $urlPic }}">
                                    <img class="d-block w-100" src="{{ $urlPic }}" alt="First slide">
                                </a>
                            </div>
                            @foreach($libraryimgs as $libraryimg)
                            @php 
                            $id_img  = $libraryimg->id_img;
                            $picture = $libraryimg->picture;

                            $urlPicLib  = 'storage/app/'.$picture;
                            @endphp
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{ $urlPicLib }}">
                                    <img class="d-block w-100" src="{{ $urlPicLib }}" alt="Second slide">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="single_product_desc">
                    <h4 class="title"><a href="#" class="nameAdd">{{ $name }}</a></h4>
                    @if($discount)
                    <h4 class="price"><span class="pro-sale">-{{ $discount }}%</span>{{ number_format($totalDis = ($price * $discount) / 100, 0, ".", ".") }}₫<del>{{ number_format($price, 0, ".", ".") }}₫</del></h4>
                    @else
                    <h4 class="price">{{ number_format($price, 0, ".", ".") }}₫</h4>
                    @endif
                    @if($status == 1)
                    <p class="available" style="color:green;">Tình trạng: <span class="text-muted">Còn hàng</span></p>
                    @else
                    <p class="available" style="color:red;">Tình trạng: <span class="text-muted">Hết hàng</span></p>
                    @endif
                    <p class="available">Kho hàng <span class="pro-sale" style="color:black;"> {{ $product_qty }}</span></p>
                    <div class="single_product_ratings mb-15">
                        <span class="rating">
                        <a href="#">
                            @for($i=1; $i <= 5; $i++)
                            @php 
                                if($i <= $age){
                                    $color = "color:#ff9800;";
                                }else {
                                    $color = "color:black;";
                                }   
                            @endphp
                            <i class="fa fa-star" style="{{ $color }}" data-key="{{ $i }}" aria-hidden="true"></i>
                            @endfor
                        </a>
                        </span>
                    </div>

                    {{-- <div class="widget size mb-50">
                        <div class="widget-desc">
                            <div id="variant-swatch-0" class="swatch clearfix hideColorx" data-option="option1" data-option-index="0">
                                <div class="header"><span></span></div>
                                <div class="select-swap">  
                                    @foreach($libraryimgs as $libraryimg)
                                    @php 
                                    $id_imgs = $libraryimg->id_img;
                                    $pictures = $libraryimg->picture;

                                    $urlPicLibs  = 'storage/app/'.$pictures;
                                    @endphp
                                    <div data-value="picture" class="n-sd swatch-element black-beauty fix-border">
                                        @if($id_img == $id_imgs)
                                        <a href="#">
                                            <label class="black-beauty sd" for="swatch-0-black-beauty">
                                                <span><img src="{{ $urlPicLibs }}" alt="black-beauty"></span>
                                            </label>
                                            <p>BLACK BEAUTY</p>
                                        </a>
                                        @else
                                        <a href="#">
                                            <label class="black-beauty" for="swatch-0-black-beauty">
                                                <span><img src="{{ $urlPicLibs }}" alt="black-beauty"></span>
                                            </label>
                                            <p>BLACK BEAUTY</p>
                                        </a>
                                        @endif
                                    </div> 
                                    @endforeach 
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="widget size mb-50">
                        {{-- <h6 class="widget-title">Size</h6>
                        <div class="widget-desc">
                            <ul>
                                @if($shirt_size)
                                @foreach($shirts as $shirt)
                                @if($shirt->aid == 1)
                                <li><a class="sd" href="#">{{ $shirt->aname }}</a></li>
                                @else
                                <li><a class="" href="#">{{ $shirt->aname }}</a></li>
                                @endif
                                @endforeach
                                @endif

                                @if($shoes_size)
                                @foreach($shoess as $shoes)
                                @if($shoes->sid == 1)
                                <li><a class="sd" href="#">{{ $shoes->sname }}</a></li>
                                @else
                                <li><a class="" href="#">{{ $shoes->sname }}</a></li>
                                @endif
                                @endforeach
                                @endif
                            </ul>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $('.widget-desc ul li a').click(function(){
                                    $('ul li a').removeClass("sd");
                                    $(this).addClass("sd");
                                });
                                $('.swatch-element label').click(function(){
                                    $('label').removeClass("sd");
                                    $(this).addClass("sd");
                                });
                            });
                        </script>  --}}   
                    </div>
                    <!-- XEM NGAY Form -->
                    <form class="cart clearfix mb-50 d-flex"{{--  method="post" action="{{ route('clothes.cart.add-cart') }}" --}} id="addCart">
                        {{-- @csrf --}}
                        <input type="hidden" name="idCart" class="idCart" value="{{ $id }}">
                        <div class="quantity">
                            <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            <input type="number" class="qty-text product_qty" id="qty" step="1" min="1" max="100" name="quantity" value="1">
                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </div>
                        @if($status == 1)
                        @if(Auth::check())
                        <button type="submit" name="addtocart" class="btn cart-submit d-block">Thêm vào giỏ</button>
                        @else
                        <button type="button" name="addtocart" class="btn cart-submit d-block disabled">Thêm vào giỏ</button>
                        @endif
                        @else
                        <button type="button" name="addtocart" class="btn cart-submit d-block">Hêt hàng</button>
                        @endif
                    </form>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("#addCart").on("submit", function(e){
                                e.preventDefault();
                                var id   = $(".idCart").val();
                                var product_qty = $(".product_qty").val();
                                var qtyNew  = {{ $product_qty }};
                                var url  = "{{ route('clothes.cart.add-cart') }}";
                                // alert(size);

                                $.ajax({
                                    url: url,
                                    data:{
                                        id: id,
                                        product_qty: product_qty,
                                    },
                                    success: function(data){
                                        if (product_qty > qtyNew) {
                                            Swal.fire({
                                              icon: 'error',
                                              text: 'Rất tiếc, bạn chỉ có thể mua tối đa {{ $product_qty }} sản phẩm của sản phẩm này.'
                                          })
                                        }else {
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Sản phẩm đã được thêm vào giỏ hàng',
                                                showConfirmButton: false,
                                                timer: 1500
                                            });
                                            setTimeout(function(){
                                                window.location.reload();
                                            }, 1500);

                                        }
                                        // alert(data);
                                    },
                                });
                            });
                            $(".disabled").on("click", function(){
                                Swal.fire({
                                  icon: 'error',
                                  // title: 'Vui lòng đăng nhập...',
                                  text: 'Bạn vui lòng đăng nhập thì mới có thể mua sản phẩm!',
                                  footer: '<a href="{{ route('auth.auth.login') }}">Đi đến trang đăng nhập</a>'
                              })
                            });
                        }); 
                    </script>
                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h6 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Chi tiết</a>
                                </h6>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>{{ $detail_text }}</p>
                                </div>
                            </div>
                        </div>
                        @if(Auth::check())
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h6 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Đánh giá sản phẩm</a>
                                </h6>
                            </div>
                            <style>
                                .list_text {
                                    display: inline-block;
                                    margin-left: 10px;
                                    position: relative;
                                    background: #52b858;
                                    color: #fff;
                                    padding: 5px 8px;
                                    box-sizing: border-box;
                                    font-size: 12px;
                                    border-radius: 2px;
                                    bottom: 35px;
                                    display: none;
                                }
                                .list_text::after{
                                    right: 100%;
                                    top: 50%;
                                    border: solid transparent;
                                    content: "";
                                    height: 0;
                                    width: 0;
                                    position: absolute;
                                    pointer-events: none;
                                    border-color: rgba(82,184,88,0);
                                    border-right-color: #52b858;
                                    border-width: 6px;
                                    margin-top: -6px;
                                }
                                .hide{
                                    visibility: hidden;
                                }
                            </style>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <form class="add_form_comment" method="POST" action="{{ route('clothes.shop.comment', $id) }}">
                                        @csrf
                                        <div class="stars list_start">
                                            <input class="star star-5 star_action StarValue" id="star-5" type="radio" name="star" value="5" data-id="5" name="star">

                                            <label class="star star-5" for="star-5" data-key="5" name="star"></label>

                                            <input class="star star-4 star_action StarValue" id="star-4" type="radio" name="star" value="4" data-id="4" name="star">

                                            <label class="star star-4" for="star-4" data-key="4" name="star"></label>

                                            <input class="star star-3 star_action StarValue" id="star-3" type="radio" name="star" value="3" data-id="3" name="star">

                                            <label class="star star-5" for="star-3" data-key="3" name="star"></label>

                                            <input class="star star-2 star_action StarValue" id="star-2" type="radio" name="star" value="2" data-id="2" name="star">

                                            <label class="star star-2" for="star-2" data-key="2" name="star"></label>

                                            <input class="star star-1 star_action StarValue" id="star-1" type="radio" name="star" value="1" data-id="1" name="star">

                                            <label class="star star-1" for="star-1" data-key="1" name="star"></label>
                                        </div>
                                        <span class="list_text">Tốt</span>
                                        <div class="form_rating hide">
                                            <div class="form-group">
                                                <input type="hidden" value="{{ Auth::user()->fullname }}" name="fullname">
                                            </div>
                                            <div class="form-group">
                                                <textarea placeholder="Nhập bình luận đánh giá của bạn..." class="form-control mb-3" name="content"></textarea>
                                            </div>

                                            <button style="border-radius:10px;" type="submit" name="submit" class="btn karl-checkout-btn">Đánh giá</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    let ListStart = $(".list_start .star");
                                     ListRating = {
                                        1: 'Không thích',
                                        2: 'Tạm được',
                                        3: 'Bình thường',
                                        4: 'Rất tốt',
                                        5: 'Tuyệt vời lắm',
                                    },
                                    ListStart.mouseover( function(){
                                        let $this = $(this);
                                        let number = $this.attr('data-key');

                                        $(".list_text").text('').text(ListRating[number]).show();

                                        console.log()
                                    });

                                    //Action đánh giá
                                    $(".star_action").on("click", function(e){
                                        if($(".form_rating").click("hide"))
                                        {
                                            $(".form_rating").removeClass("hide").addClass("active");
                                        }//else {
                                        //     $(".form_rating").addClass("hide").removeClass("active");
                                        // }
                                    });
                                });
                            </script>
                        </div>
                        @else
                        <div class="alert alert-success">
                            Vui lòng <a href="{{ route('auth.auth.login') }}"><strong>Đăng nhập</strong></a> để có thể đánh giá sản phẩm
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@if($comments->count())
<section class="karl-testimonials-area section_padding_100">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section_heading text-center">
<h2>Đánh giá sản phẩm</h2>
</div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-12 col-md-8">
<div class="karl-testimonials-slides owl-carousel">
<!-- Single Testimonial Area -->
@foreach($comments as $cmt)
<div class="single-testimonial-area text-center">
    <span class="quote">"</span>
    <h6>{{ $cmt->content }}</h6>
    <div class="testimonial-info d-flex align-items-center justify-content-center">
        <div class="tes-thumbnail">
            <img src="storage/app/avatar/images.png" alt="">
        </div>
        <style>
            .acti {
                color:#ff9800;
            }
            .unacti{
                color:black;
            }
        </style>
        <div class="testi-data">
            <p>{{ $cmt->fullname }}</p>
            @for($i=1; $i <= 5; $i++)
            <i class="fa fa-star {{ $i <= $cmt->star_number ? 'acti' : ''}}" aria-hidden="true"></i>
            @endfor
        </div>
    </div>
</div>
@endforeach
</div>
</div>
</div>

</div>
{{-- <nav aria-label="Page navigation">
    <ul class="pagination pagination-sm">
        {{ $comments->links() }}
    </ul>
</nav> --}}
</section>
@endif
<!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->
<section class="you_may_like_area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="you_make_like_slider owl-carousel">
                    <!-- Single gallery Item -->
                    @foreach($LQs as $LQ)
                    @php 
                    $id_current = $LQ->spid;
                    $name       = $LQ->name;
                    $price      = number_format($LQ->price, 0, ".", ".");
                    $sp_picture = $LQ->sp_picture;
                    $name_cat   = $LQ->name_cat;
                    $des        = $LQ->des_text;

                    $slug       = Str::slug($name);

                    $urlPic    = 'storage/app/'.$sp_picture;
                    $urlDetail = route('clothes.shop.detail', [$slug, $id_current]);
                    @endphp
                    @if($id != $id_current)
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
@stop