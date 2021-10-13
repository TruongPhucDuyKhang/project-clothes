@extends('templates.clothes.master')
@section('main-content')
<style>
    .orderImg{
        border:1px solid ##7a7a7a;
        padding:10px 10px; 
        width:100px;
    }
    .cart-submit {
        display: block; 
        width: 50%;
        background: transparent;
        border: 1px solid #bfc7c7;
        color: black;
        text-transform: uppercase;
        overflow: hidden;
        transition: 1s all ease;
        position: relative;
    }
    .cart-submit-danger {
        display: block; 
        width: 50%;
        background: transparent;
        border: 1px solid #bfc7c7;
        color: black;
        text-transform: uppercase;
        overflow: hidden;
        transition: 1s all ease;
        position: relative;
        margin-bottom: 20px;
    }
    .cart-submit:hover{
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
  .cart-submit::before{
      width: 100%;
      height: 0%;
      transform: translate(-50%,-50%) rotate(45deg);
  }
  .cart-submit:hover::before{
      height: 781%;
  }
  /*body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #8C9EFF;
    background-repeat: no-repeat
    }*/

    .card {
        z-index: 0;
        padding-bottom: 20px;
        margin-top: 90px;
        margin-bottom: 90px;
        border-radius: 10px
    }

    .top {
        padding-top: 40px;
        padding-left: 13% !important;
        padding-right: 13% !important
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: #455A64;
        padding-left: 0px;
        margin-top: 30px
    }

    #progressbar li {
        list-style-type: none;
        font-size: 13px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar .step0:before {
        font-family: FontAwesome;
        content: "\f10c";
        color: #fff
    }

    #progressbar li:before {
        width: 40px;
        height: 40px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        background: #C5CAE9;
        border-radius: 50%;
        margin: auto;
        padding: 0px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 12px;
        background: #C5CAE9;
        position: absolute;
        left: 0;
        top: 16px;
        z-index: -1
    }

    #progressbar li:last-child:after {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        position: absolute;
        left: -50%
    }

    #progressbar li:nth-child(2):after,
    #progressbar li:nth-child(3):after {
        left: -50%
    }

    #progressbar li:first-child:after {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        position: absolute;
        left: 50%
    }

    #progressbar li:last-child:after {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px
    }

    #progressbar li:first-child:after {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #4cae4c
    }

    #progressbar li.active:before {
        font-family: FontAwesome;
        content: "\f00c"
    }
    .icon {
        width: 60px;
        height: 60px;
        margin-right: 15px
    }

    .icon-content {
        padding-bottom: 20px
    }

    @media screen and (max-width: 992px) {
        .icon-content {
            width: 50%
        }
    }
    #progressbar li.danger:before {
        font-family: FontAwesome;
        content: "\f00d";
    }
    #progressbar li.danger:before,
    #progressbar li.danger:after {
        background: red;
    }
        
</style>
<!-- ****** Checkout Area Start ****** -->
@if(Auth::check())
@if(Auth::user()->id == $information->id)
<div class="checkout_area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12 ml-lg-auto">
                <div class="order-details-confirmation">
                    <div class="card">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12">
                                <ul id="progressbar" class="text-center">
                                    @for($i=0; $i <= 3; $i++)
                                    @if($information->orders_stauts == 5)
                                    <li class="danger step0"></li>
                                    @elseif($i <= $information->orders_stauts == 1)
                                    <li class="active step0"></li>
                                    @elseif($i <= $information->orders_stauts == 2)
                                    <li class="active step0"></li>  
                                    @elseif($i <= $information->orders_stauts == 3)
                                    <li class="active step0"></li>
                                    @else
                                    <li class="step0"></li>
                                    @endif
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-between top">
                            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                                <div class="d-flex flex-column">
                                    <p class="font-weight-bold">Xác nhận<br> đơn</p>
                                </div>
                            </div>
                            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                                <div class="d-flex flex-column">
                                    <p class="font-weight-bold">Đang Giao<br> Hàng</p>
                                </div>
                            </div>
                            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                                <div class="d-flex flex-column">
                                    <p class="font-weight-bold">Hàng<br>đã tới</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="order-details-form mb-4">
                        <li style="display:block;width:100%;"><h6>Thông tin vận chuyển</h6><br />
                            <strong>Mã đơn hàng: </strong><span style="color:#009aee;">#{{ $information->orders_code }}</span><br />
                            @if($information->orders_payment == 1)
                            <strong>Hình thức thanh toán: </strong><span style="color:green;">Thanh toán khi nhận hàng</span><br />
                            @else
                            <strong>Hình thức thanh toán: </strong><span style="color:green;">Thanh toán Online</span><br />
                            @endif
                            <strong>Họ tên người nhận: </strong><span>{{ $information->orders_name }}</span><br />
                            <strong>Số điện thoại: {{ $information->orders_phone }}</strong><span></span><br />
                            <strong>Địa chỉ nhận hàng: </strong><span>{{ $information->orders_andress }}</span><br />
                        </li>
                        <li><h6>Sản phẩm đã đặt</h6>
                            @foreach($orDetails as $orDetail)
                            <li>
                            {{-- <div class="col-xs-12 col-sm-6 col-md-3">
                            <img  class="orderImg" src="storage/app/avatar/images.png" alt="">
                        </div> --}}
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <strong class="orderName">{{ $orDetail->name }}</strong><br />
                            <span>Giá mua: {{ number_format($orDetail->price, 0, ".", ".") }}đ</span><br />
                            <span>Số lượng: x {{ $orDetail->qty }}</span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <strong style="color:red;">{{ number_format($orDetail->price, 0, ".", ".") }} VNĐ</strong>
                        </div>
                    </li>
                    @endforeach
                    {{-- @endif --}}
                    <li><span>Tổng thanh toán</span> <strong style="color:red;" class="col-xs-12 col-sm-6 col-md-3">{{ number_format($information->orders_total )}} VNĐ</strong></li>
                </ul>

                <div class="col-lg-12" style="position: relative;left: 250px;">
                @if($information->orders_stauts <= 1)
                <a href="#" class="btn cart-submit-danger unOrder" data-id="{{ $information->orders_id }}">Huỷ đơn hàng</a>
                <a href="#" data-id="{{ $information->orders_id }}" class="btn cart-submit disabled">Đang xử lý</a>
                @elseif($information->orders_stauts == 2)
                <a href="#" data-id="{{ $information->orders_id }}" class="btn cart-submit disabled">Đang xử lý</a>
                @elseif($information->orders_stauts == 3)
                <a href="#" data-id="{{ $information->orders_id }}" class="btn cart-submit acceptOrder">Đã nhận được hàng</a>
                @endif
                </div>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $(".acceptOrder").on('click', function(e){
                            e.preventDefault();
                            var id      = $(this).attr("data-id");
                            var url = "{{ route('clothes.order.acccept-order') }}";
                            $.ajax({
                                url: url,
                                type: "POST",
                                data: {
                                    id: id,
                                },
                                success: function(data){
                                    setTimeout(function(){
                                        window.location.href = "{{ route('clothes.order.purchase') }}";
                                    }, 500);
                                }
                            });
                        });

                        $(".unOrder").on('click', function(e){
                            e.preventDefault();
                            var id      = $(this).attr("data-id");
                            var url = "{{ route('clothes.order.un-order') }}";
                            // alert(url);
                            $.ajax({
                                url: url,
                                type: "POST",
                                data: {
                                    id: id,
                                },
                                success: function(data){
                                    setTimeout(function(){
                                        window.location.href = "{{ route('clothes.order.purchase') }}";
                                    }, 500);
                                    // alert(data);
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>

    </div>
</div>
</div>
@endif
@endif
<!-- ****** Checkout Area End ****** -->
@stop