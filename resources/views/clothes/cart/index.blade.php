@extends('templates.clothes.master')
@section('main-content')
<style>
    .total_price a span:hover {
        color: #ff084e;
    }
</style>
<!-- ****** Cart Area Start ****** -->
<div class="cart_area section_padding_100 clearfix" id="ajax-cart">
    @if(Session::get('cart')['buy'])
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                                $infoCart = Session::get('cart');
                            @endphp
                            @foreach($infoCart['buy'] as $key => $item)
                            @php 
                                $total = $item['infoProduct']['price'] * $item['qty'];
                                $slug  = Str::slug($item['infoProduct']['name']);
                                $urlDetail = route('clothes.shop.detail', [$slug, $key]);
                            @endphp
                            <tr>
                                <td class="cart_product_img d-flex align-items-center">
                                    <a href="{{ $urlDetail }}"><img src="storage/app/{{ $item['infoProduct']['sp_picture'] }}" alt="Product"></a>
                                    <h6>{{ $item['infoProduct']['name'] }}</h6>
                                </td>   
                                <td class="price"><span>₫{{ number_format($item['infoProduct']['price'], 0, ".", ".") }}</span></td>
                                <td class="qty">
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">{{-- <i class="fa fa-minus" aria-hidden="true"></i> --}}</span>
                                        <input type="number" class="qty-text changeQty" id="qty" step="1" data-id="{{ $key }}" value="{{ $item['qty'] }}" min="1" max="10" name="quantity">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">{{-- <i class="fa fa-plus" aria-hidden="true"></i> --}}</span>
                                    </div>
                                </td>
                                <td class="total_price"><span class="total" style="color:#ff084e;">₫{{ number_format($total, 0, '.', '.') }}</span></td>
                                <td class="total_price text-center"><a class="deleteCart" data-id="{{ $key }}" style="font-weight:bold;" href=""><span>Xoá</span></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="cart-footer d-flex mt-30">
                    <div class="back-to-shop w-50">
                        <a href="#">TIẾP TỤC MUA SẮM</a>
                    </div>
{{--                     <div class="update-checkout w-50 text-right">
                        @if(Session::get('cart') == true)
                        <a href="{{ route('clothes.cart.del-all') }}">Xoá tất cả giỏ hàng</a>
                        @endif
                    </div> --}}
                </div>

            </div>
        </div>

        <div class="row">
{{--             <div class="col-12 col-md-6 col-lg-4">
                <div class="coupon-code-area mt-70">
                    <div class="cart-page-heading">
                        <h5>MÃ GIẢM GIÁ</h5>
                        <p>Nhập mã phiếu giảm giá của bạn</p>
                    </div>
                    <form action="#">
                        <input type="search" name="search" placeholder="#569ab15">
                        <button type="submit">APPLY</button>
                    </form>
                </div>
            </div> --}}
            {{-- <div class="col-12 col-md-6 col-lg-4">
                <div class="shipping-method-area mt-70">
                    <div class="cart-page-heading">
                        <h5>PHƯƠNG PHÁP VẬN CHUYỂN</h5>
                        <p>Chọn một trong những bạn muốn</p>
                    </div>

                    <div class="custom-control custom-radio mb-30">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>Thanh toán khi nhận hàng</span><span>$4.99</span></label>
                    </div>

                    <div class="custom-control custom-radio mb-30">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Thanh toán Online</span></label>
                    </div>
                </div>
            </div> --}}
            <div class="col-12 col-lg-12">
                <div class="cart-total-area mt-70">
                    <ul class="cart-total-chart">
                        <li><span><strong>Tổng tiền hàng</strong></span>
                            <span class="Subtotal" style="color:#ff084e;">₫{{ number_format(Session::get('cart')['totalPrice'], 0, ".", ".") }}</span>
                        </li>
                    </ul>
                    <a href="{{ route('clothes.cart.checkout') }}" class="btn karl-checkout-btn">Mua hàng</a>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table clearfix">
                    <h1>Giỏ hàng trống</h1>
                </div>

                <div class="cart-footer d-flex mt-30">
                    <div class="back-to-shop w-50">
                        <a href="http://localhost:8080/clothes/ao-thun-2">MUA NGAY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
<script type="text/javascript">
    $(document).ready(function(){
        //Update - cart
        $(".changeQty").on("click", function(e){
            e.preventDefault();
            var id     = $(this).attr("data-id");
            var qty    = $(this).val();
            var url  = "{{ route('clothes.cart.update-cart') }}";
            // alert(price);
            $.ajax({
                url: url,
                data:{
                    id: id,
                    qty: qty,
                },
                success: function(data){
                    window.location.reload();
                }
            });
        });
        //Del - cart
        $(".deleteCart").on("click", function(e){
            e.preventDefault();
            var id  = $(this).attr("data-id");
            fetch_data(id);
        });
            
        function fetch_data(id){
        var url = '{{ route('clothes.cart.del-cart') }}';
        // alert(url);
        $.ajax({
            url: url,
            method: 'POST',
            data:{
                id:id,
            },
            success: function(data){
                $("#ajax-cart").html(data);
                // alert(data);
            }
        });
    }
});
</script>
<!-- ****** Cart Area End ****** -->
@stop