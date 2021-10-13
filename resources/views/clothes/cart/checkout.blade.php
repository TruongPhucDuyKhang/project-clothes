@extends('templates.clothes.master')
@section('main-content')
<!-- ****** Checkout Area Start ****** -->
<div class="checkout_area section_padding_100">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-page-heading">
                        <h5>ĐỊA CHỈ NHẬN HÀNG</h5>
                        <p>Nhập mã phiếu giảm giá của bạn</p>
                    </div>

                    <form id="submit_checkout" action="{{ route('clothes.cart.checkout') }}" method="post">
                        @csrf
                        <div class="row">
                            <style>
                                .bowshow-error{
                                    box-shadow: 0px 0px 5px red;
                                }
                                .bowshow-error::-webkit-input-placeholder { /* Edge */
                                  color: red;
                                }

                                :-ms-input-placeholder { /* Internet Explorer */
                                  color: red;
                                }

                                ::placeholder {
                                  color: red;
                                }
                                .warring-validate {
                                    position: relative;
                                    float: right;
                                    bottom: 43px;
                                    right: 10px;
                                }
                            </style>
                            <div class="col-md-12 mb-3">
                                <label for="first_name">Họ và tên<span>*</span></label>
                                <input type="text" class="form-control @error('orders_name') bowshow-error @enderror" name="orders_name">
                                @error('orders_name')
                                <div class="warring-validate">
                                <i class="fa fa-exclamation-triangle text-danger"></i>   
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label>Thành phố <span>*</span></label>
                                <input type="text" class="form-control @error('orders_city') bowshow-error @enderror" name="orders_city">
                                @error('orders_city')
                                <div class="warring-validate">
                                <i class="fa fa-exclamation-triangle text-danger"></i>   
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label>Quận/huyện <span>*</span></label>
                                <input type="text" class="form-control @error('orders_district') bowshow-error @enderror" name="orders_district">
                                @error('orders_district')
                                <div class="warring-validate">
                                <i class="fa fa-exclamation-triangle text-danger"></i>   
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label>Phường <span>*</span></label>
                                <input type="text" class="form-control @error('orders_ward') bowshow-error @enderror" name="orders_ward">
                                @error('orders_ward')
                                <div class="warring-validate">
                                <i class="fa fa-exclamation-triangle text-danger"></i>   
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label>Địa chỉ <span>*</span></label>
                                <input type="text" name="orders_andress" class="form-control @error('orders_andress') bowshow-error @enderror">
                                @error('orders_andress')
                                <div class="warring-validate">
                                <i class="fa fa-exclamation-triangle text-danger"></i>   
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label>Sồ điện thoại <span>*</span></label>
                                <input type="text" class="form-control @error('orders_phone') bowshow-error @enderror" name="orders_phone">
                                @error('orders_phone')
                                <div class="warring-validate">
                                <i class="fa fa-exclamation-triangle text-danger"></i>   
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <label for>Địa chỉ Email <span>*</span></label>
                                <input type="email" class="form-control @error('orders_email') bowshow-error @enderror" name="orders_email">
                                @error('orders_email')
                                <div class="warring-validate">
                                <i class="fa fa-exclamation-triangle text-danger"></i>   
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                        </div>
                        </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                <div class="order-details-confirmation">

                    <div class="cart-page-heading">
                        <h5>ĐƠN HÀNG CỦA BẠN</h5>
                        <p>Chi tiết sản phẩm bạn đặt</p>
                    </div>
                    <style>
                        .orderImg{
                            border:1px solid ##7a7a7a;
                            padding:10px 10px; 
                            width:80px;
                        }
                    </style>
                    <ul class="order-details-form mb-4">
                        @if(Session::get('cart') == true)
                        @php 
                            $infoCart = Session::get('cart');
                        @endphp
                        @foreach($infoCart['buy'] as $key => $item)
                        @php 
                            $total       = number_format($item['infoProduct']['price'] * $item['qty'], 0, ".", ".");
                            $totalQty    = $infoCart['totalQty'];
                            $totalMonney = $infoCart['totalPrice'];
                            $totalMonneyNew = number_format($totalMonney/23000);
                        @endphp
                        <li>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                            <img  class="orderImg" src="storage/app/{{ $item['infoProduct']['sp_picture'] }}" alt="">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-5">
                            <strong class="orderName">{{ $item['infoProduct']['name'] }}</strong><br />
                            <span>x {{ $item['qty'] }}</span>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                            <span style="color:red;">{{ $total }} VND</span>
                            </div>
                        </li>
                        @endforeach
                        @endif
                        
                        <li><span><div class="custom-control custom-radio mb-30">
                                <input checked type="radio" id="customRadio1" name="orders_payment" value="1" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>Thanh toán khi nhận hàng</span></label>
                            </div></span>
                        </li>
                        <li><div class="custom-control custom-radio mb-30">
                                <input type="radio" id="customRadio2" name="orders_payment" value="2" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Thanh toán Online</span></label>
                            </div>
                        </li>   
                        <div id="paypal-button-container"></div>
                        <li><span>Tổng số tiền ({{ $totalQty }} sản phẩm):</span> <span style="color:red;">{{ number_format($totalMonney, 0, ".", ".") }} VND</span></li>
                    </ul>
                    {{-- {{ $totalMonneyNew }} --}}
                    <button type="submit" class="btn karl-checkout-btn">Đặt hàng</button>
                    </form>

                    <script src="https://www.paypal.com/sdk/js?client-id=AfnDLVGc2uGImzQD_VuYg84hDpc2aqzu6RuqyZl9xJm0WMeoD7HLDFi_MTkX-9rvYDHy5qgEFnzW35xr"></script>
                    <script>
                      paypal.Buttons({
                        createOrder: function(data, actions) {
                          // This function sets up the details of the transaction, including the amount and line item details.
                          return actions.order.create({
                            purchase_units: [{
                              amount: {
                                value: "{{ $totalMonneyNew }}"
                              }
                            }]
                          });
                        },
                        onApprove: function(data, actions) {
                          // This function captures the funds from the transaction.
                          return actions.order.capture().then(function(details) {
                            // This function shows a transaction success message to your buyer.
                            // var url = "{{ route('clothes.order.purchase') }}";
                            document.getElementById('submit_checkout').submit();
                          });
                        }
                      }).render('#paypal-button-container');
                      //This function displays Smart Payment Buttons on your web page.
                    </script>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ****** Checkout Area End ****** -->
@stop