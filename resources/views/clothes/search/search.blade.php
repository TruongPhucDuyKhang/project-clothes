@extends('templates.clothes.master')
@section('main-content')
<style>
    .option .custom-dropdown .custom-dropdown__select {
        font-size: 14px;
        width: 140px;
        display: block;
        height: 30px;
        padding: 0 20px 0 0;
        border-color: transparent;
        border-bottom: 1px solid #000;
        background-color: #fff;
        outline: 0;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        border-radius: 0;
        -moz-appearance: none;
        -webkit-appearance: none;
        cursor: pointer;
        text-indent: 1px;
    }
    .option .custom-dropdown::after {
        content: "\f103";
        font-family: FontAwesome;
        font-size: 14px;
        color: #000;
        display: block;
        position: absolute;
        top: 6px;
        left: 141px;
    }
    .sold-out span {
        opacity: .66;
    }
    .sold-out {
        right: 20px;
    }
    .sold-out {
        position: absolute;
        top: 10px;
        font-size: 12px;
        line-height: 1;
        padding: 5px 10px;
        font-weight: bold;
        z-index: 9;
        color: #050505;
        background: #fff;
    }
    .product-sale {
        left: 20px;
        color: red;
    }
    .product-sale span {
        color: red;
    }
    .product-sale {
        position: absolute;
        top: 10px;
        font-size: 12px;
        line-height: 1;
        padding: 5px 10px;
        font-weight: bold;
        z-index: 9;
        color: #050505;
        background: #fff;
    }
</style>
<section class="shop_grid_area section_padding_100">
    <div class="container">
        <div class="row">
            {{-- <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">
                    @include('templates.clothes.leftbar')
                    <div class="widget recommended">
                        <h6 class="widget-title mb-30">Sản phẩm bán chạy</h6>

                        <div class="widget-desc">
                            <!-- Single Recommended Product -->
                            @foreach($items as $item)
                            @php 
                            $id         = $item->spid;
                            $name       = $item->name;
                            $price      = $item->price;
                            $discount   = $item->discount;
                            $sp_picture = $item->sp_picture;
                            $des        = $item->des_text;
                            $status     = $item->status;
                            $selling    = $item->selling;

                            $slug       = Str::slug($name);
                            $urlPic     = 'storage/app/'.$sp_picture;
                            $urlDetail  = route('clothes.shop.detail', [$slug, $id]);
                            @endphp
                            @if($selling)
                            <div class="single-recommended-product d-flex mb-30">
                                <div class="single-recommended-thumb mr-3">
                                    <a href="{{ $urlDetail }}"><img src="{{ $urlPic }}" alt=""></a>
                                </div>
                                <div class="single-recommended-desc">
                                    <h6><a href="{{ $urlDetail }}">{{ $name }}</a></h6>
                                    <p>{{ number_format($price, 0, ".", ".") }}đ</p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}
            <style type="text/css">
                .heading-page {
                    position: relative;
                    text-align: center;
                    padding: 0 0 30px 0;
                }
                .heading-page h1 {
                    font-size: 30px;
                    margin: 0 0 10px;
                }
                .heading-page:after {
                    content: "";
                    background: #252a2b;
                    display: block;
                    width: 60px;
                    height: 4px;
                    margin: 25px auto 0;
                }
                .subtxt {
                    opacity: .66;
                    margin-top: 15px;
                }
                .subtext-result {
                    margin-bottom: 30px;
                    margin-left: 20px;
                }
                .subtext {
                    margin-bottom: 40px;
                    display: block;
                }
                .search_box {
                    width: calc(100% - 55px);
                    outline: none;
                    height: 55px;
                    padding: 0 20px;
                    background: #ededed;
                    border: 0;
                    box-shadow: none;
                }
                input#go {
                    width: 55px;
                    height: 55px;
                    float: right;
                    background: url(//theme.hstatic.net/1000341789/1000533258/14/iconsearch.png?v=644) #252a2b center no-repeat;
                    margin: 0px;
                    position: relative;
                    top: 0;
                    border-radius: 0;
                    font-size: 0;
                    border: 0;
                }

            </style>
            <div class="col-12 col-xs-12">
                @if($products->count())
                <div class="heading-page">
                    <h1>Tìm kiếm</h1>
                    <p class="subtxt">Có <span>{{ $products->total() }} sản phẩm</span> cho tìm kiếm</p>
                </div>
                <p class="subtext-result">  Kết quả tìm kiếm cho  <strong>"{{ $keyword }}"</strong>.</p>
                @else
                <div class="heading-page">
                    <h1>Tìm kiếm</h1>
                </div>
                <div class="wrapbox-content-page">     
                    <div class="content-page" id="search">
                        <div class="expanded-message text-center">
                            <h2>Không tìm thấy nội dung bạn yêu cầu</h2>
                            <div class="subtext">
                                <span>Không tìm thấy  <strong>"{{ $keyword }}"</strong>. </span>
                                <span>Vui lòng kiểm tra chính tả, sử dụng các từ tổng quát hơn và thử lại!</span>
                            </div>
                            <div class="search-field">
                                <form class="search-page" action="{{ route('clothes.search.search') }}">
                                    <input type="submit" alt="Go" id="go">
                                    <input type="hidden" name="type" value="product">
                                    <input type="text" required name="keyword" class="search_box" placeholder="Tìm kiếm" value="{{ $keyword}}">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-12 col-md-8 col-lg-12">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <!-- Single gallery Item -->
                        @foreach($products as $item)
                        @php 
                        $id         = $item->spid;
                        $name       = $item->name;
                        $price      = $item->price;
                        $discount   = $item->discount;
                        $sp_picture = $item->sp_picture;
                        $des        = $item->des_text;
                        $status     = $item->status;

                        $slug       = Str::slug($name);
                        $urlPic     = 'storage/app/'.$sp_picture;
                        $urlDetail  = route('clothes.shop.detail', [$slug, $id]);
                        @endphp
                        <div class="col-10 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.{{ $id }}s">
                            @if($status == 0)
                            <div class="sold-out"><span>Hết hàng</span></div>
                            @elseif($discount)
                            <div class="product-sale"><span>-{{ $discount }}%</span></div>
                            @endif
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{ $urlPic }}" alt="">
                                <div class="product-quicview">
                                    <a href="#" data-id="{{ $id }}" data-toggle="modal" class="quickview"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <style>
                                .product-description h4 {
                                    font-size: 15px;
                                    font-weight: bold;
                                }
                                .discount{
                                    color: rgba(0,0,0,.54);text-decoration: line-through;font-weight: ;
                                    color: #9f9f9f;
                                    font-size: 12px;
                                }
                            </style>
                            <div class="product-description">
                                <p class="text-center">{{ $name }}</p>
                                @if($discount)
                                <h4 class="product-price text-center" style="color:red;">{{ number_format($totalDis = ($price * $discount) / 100, 0, ".", ".") }}đ
                                    <span class="product-price discount">{{ number_format($price, 0, ".", ".") }}đ</span>
                                </h4>
                                @else
                                <h4 class="product-price text-center">{{ number_format($price, 0, ".", ".") }}đ</h4>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm">
                            @if(isset($_GET['keyword'])) 
                            {{ $products->appends(['keyword' => $_GET['keyword']])->links() }}
                            @endif
                            
                            {{-- {{ Str::of('?keyword=áo')->append('?page='.$products->links()) }} --}}
                        </ul>
                    </nav>
                </div>
                <!-- ****** Quick View Modal Area Start ****** -->
                <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            <div class="modal-body">
                                <div class="quickview_body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">
                                                <div class="quickview_pro_img">
                                                    <img class="imgView" src="" alt="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="quickview_pro_des">
                                                    <h4 class="title nameView"></h4>
                                                    <div class="top_seller_product_rating mb-15">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <h5 class="price priceView">sadasd</h5>
                                                    <h5 class="price"><span class="discountView"></span></h5>
                                                    <p class="desView"></p>
                                                    <div class="text-left" style="position: relative;right:20px;">
                                                        <!-- XEM NGAY -->
                                                        <a href="" class="btn cart-submit text-center urlDetail">XEM NGAY</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ****** Quick View Modal Area End ****** -->
                <script type="text/javascript">
                    $(document).ready(function(){
                        $(".quickview").on("click", function(e){
                            e.preventDefault();
                            var id  = $(this).attr("data-id");
                            var url = "{{ route('clothes.shop.quickview') }}";
                            // alert(urlDetail);
                            $.ajax({
                                url: url,
                                data: {
                                    id: id,
                                },
                                success: function(data){
                                    $(".idView").val(data.spid);
                                    $(".nameView").text(data.name);
                                    $(".priceView").text(data.price);
                                    $(".discountView").text(data.discount);
                                    $(".desView").text(data.des_text);
                                    $(".imgView").attr({"src": data.sp_picture});
                                    $(".urlDetail").attr({"href": data.urlDetail});
                                    $("#quickview").modal('show');
                                    // alert(data);
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</section>
@stop