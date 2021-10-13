@extends('templates.clothes.master')
@section('main-content')
<!-- ****** Checkout Area Start ****** -->
@if(Auth::check())
<div class="checkout_area section_padding_100">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-4">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-page-heading">
                        {{-- <h5>Tài khoản</h5> --}}
                        {{-- <p>Nếu bạn muốn liên hệ thì hãy nhập thông tin gửi cho chúng tôi</p> --}}
                    </div>

{{--                     <form action="#" method="post">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="first_name">Họ và tên <span>*</span></label>
                                <input type="text" class="form-control" id="first_name" value="{{ Auth::user()->fullname }}" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="street_address">Địa chỉ <span>*</span></label>
                                <input type="text" class="form-control mb-3" id="street_address" value="{{ Auth::user()->andress }}">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="phone_number">Sồ điện thoại <span>*</span></label>
                                <input type="number" class="form-control" id="phone_number" min="0" value="{{ Auth::user()->phone }}">
                            </div>
                            <div class="col-12 mb-4">
                                <label for="email_address">Địa chỉ Email <span>*</span></label>
                                <input type="email" class="form-control" id="email_address" value="{{ Auth::user()->email }}">
                            </div>  
                        </div>
                        <button type="submit" name="submit" class="btn karl-checkout-btn">Thay đổi tài khoản</button>
                    </form> --}}
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-12 ml-lg-auto">
                <div class="order-details-confirmation">
                    <div class="cart-page-heading">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th width="200px">Thời gian</th>
                              <th>Họ tên</th>
                              <th>Tình trạng</th>
                              <th class="text-center">Trạng thái</th>
                              <th class="text-center">Chức năng</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($orders as $order)
                        @php 
                        $id      = $order->orders_id;
                        $code    = $order->orders_code;
                        $at      = $order->orders_at;
                        $name    = $order->orders_name;
                        $payment = $order->orders_payment;
                        $status  = $order->orders_stauts;

                        $urlDetail = route('clothes.order.payment', $id);
                        @endphp
                        @if($order->id == Auth::user()->id)
                        <tr>
                          <td scope="row">#{{ $code }}</td>
                          <td>{{ $at }}</td>
                          <td>{{ $name }}</td>
                          @if($payment == 1)
                          <td style="color:green;">Thanh toán khi nhận hàng</td>
                          @else
                          <td style="color:green;">Thanh toán Online</td>
                          @endif
                          <td width="190px" class="text-center">
                            @if($status == 0)
                            <div class="alert alert-secondary" width="100px">Chờ xử lý</div>
                            @elseif($status == 1)
                            <div class="alert alert-warning" width="100px">Giao hàng</div>
                            @elseif($status == 2)
                            <div class="alert alert-warning" width="100px">Đang giao</div>
                            @elseif($status == 3)
                            <div class="alert alert-success" width="100px">Đã giao</div>
                            @elseif($status == 4)
                            <div class="alert alert-success" width="100px">Đã nhận</div>
                            @elseif($status == 5)
                            <div class="alert alert-danger" width="100px">Đơn huỷ</div>
                            @endif
                          </td>
                          <td style="width:5px;"><a href="{{ $urlDetail }}" class="btn btn-info">Xem đơn hàng</a></td>
                        </tr>
                        @endif
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

  </div>
</div>
</div>
@endif
<!-- ****** Checkout Area End ****** -->
@stop