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
                                    <input type="number" class="qty-text changeQty" id="qty" step="1" data-id="{{ $key }}" value="{{ $item['qty'] }}" min="1" max="99" name="quantity">
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
                <div class="update-checkout w-50 text-right">
                    @if(Session::get('cart') == true)
                    <a href="{{ route('clothes.cart.del-all') }}">Xoá tất cả giỏ hàng</a>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="cart-total-area mt-70">
                <div class="cart-page-heading">
                    <h5>TỔNG GIỎ HÀNG</h5>
                    <p>Thông tin cuối cùng</p>
                </div>
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