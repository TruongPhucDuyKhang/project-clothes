@extends('templates.clothes.master')
@section('main-content')
<!-- ****** Checkout Area Start ****** -->
<div class="checkout_area section_padding_100">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-page-heading">
                        <h5>Liên hệ</h5>
                        <p>Nếu bạn muốn liên hệ thì hãy nhập thông tin gửi cho chúng tôi</p>
                    </div>

                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">Họ <span>*</span></label>
                                <input type="text" class="form-control" id="first_name" value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Tên <span>*</span></label>
                                <input type="text" class="form-control" id="last_name" value="" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="street_address">Địa chỉ <span>*</span></label>
                                <input type="text" class="form-control mb-3" id="street_address" value="">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="phone_number">Sồ điện thoại <span>*</span></label>
                                <input type="number" class="form-control" id="phone_number" min="0" value="">
                            </div>
                            <div class="col-12 mb-4">
                                <label for="email_address">Địa chỉ Email <span>*</span></label>
                                <input type="email" class="form-control" id="email_address" value="">
                            </div>  
                        </div>
                        <button type="submit" name="submit" class="btn karl-checkout-btn">Gửi</button>
                    </form>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                <div class="order-details-confirmation">

                    <div class="cart-page-heading">
                        <h5>Địa chỉ công ty</h5>
                        <p>05 Đặng tất , Phường Hoà Khánh Nam, Liên Chiểu, Đà Nẵng.</p><br />
                        <h5>Gmail</h5>
                        <p>phucduykhang16202@gmail.com</p><br />
                        <h5>Số điện thoại</h5>
                        <p>0787 728 474</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ****** Checkout Area End ****** -->
@stop