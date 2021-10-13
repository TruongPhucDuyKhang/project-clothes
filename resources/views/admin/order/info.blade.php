@extends('templates.admin.master')
@section('content-admin')
@if(Session::has('msg'))
<script>
    var msg = "{{ Session::get('msg') }}"; 
    toastr.success(msg);
</script>
@endif
@if(Session::has('error'))
<script>
    var error = "{{ Session::get('error') }}"; 
    toastr.error(error);
</script>
@endif 
<style>
    .panel-default>.panel-heading {
        text-align: left;
    }
    .andress::before{
        content: "";
        background: #337ab7;
        width: 3px;
        height: 52px;
        position: absolute;
        left: 30px;
        top: 124px;
    }
</style>
@php 
$id         = $findOrder->orders_id;
$code       = $findOrder->orders_code;
$at         = $findOrder->orders_at;
$phone      = $findOrder->orders_phone;
$name       = $findOrder->orders_name;
$payment    = $findOrder->orders_payment;
$status     = $findOrder->orders_stauts;
$andress    = $findOrder->orders_andress;
$total      = $findOrder->orders_total;
$created_at = $now->diffForHumans($at);
@endphp
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
          <div class="panel panel-default">
            <div class="panel-heading">
              <span style="color:#B5B5B5"> <i class="glyphicon glyphicon-check"></i> Danh sách đơn hàng /</span>  
              <span>#{{ $code }}</span> <span style="color: #B5B5B5">/</span> 
              <span style="font-weight:400;font-size:13px;color:#B5B5B5">{{ $created_at }}</span>
          </div>
          <div class="agil-info-calendar">
            <!-- calendar -->
            <div class="row">
                <div class="col-lg-12 agile-calendar">
                  <!-- grids -->
                  <div{{--  class="agile-calendar-grid" --}}>
                  <section class="panel">
                    <div class="panel-body">
                        <div class="form-group">
                            <i style="color:#B5B5B5;" class="icon-truck"></i>
                            <span style="color:#B5B5B5;margin-left:5px;">Giao hàng</span>
                        </div>
                        <div class="col-md-12">
                            <div class="text-right" style="position: relative;bottom:50px;">
                                @if($status == 0)
                                <a href="" data-key="{{ $status }}" data-id="{{ $id }}" style="padding:10px;" class="btn btn-primary changeStatus"><span class="text-status">Xác nhận đơn<span></a>
                                @elseif($status == 1)
                                <a href="" data-key="{{ $status }}" data-id="{{ $id }}" style="padding:10px;" class="btn btn-primary changeStatus"><span class="text-status">Giao hàng<span></a>
                                @elseif($status == 2)
                                <a href="" data-key="{{ $status }}" data-id="{{ $id }}" style="padding:10px;" class="btn btn-primary changeStatus disabled"><span class="text-status">Đang giao<span></a>
                                @elseif($status == 3)
                                <a href="" data-key="{{ $status }}" data-id="{{ $id }}" style="padding:10px;" class="btn btn-primary changeStatus disabled"><span class="text-status">Đã giao<span></a>
                                @elseif($status == 4)
                                <a href="" data-key="{{ $status }}" data-id="{{ $id }}" style="padding:10px;" class="btn btn-primary changeStatus disabled"><span class="text-status">Đã nhận<span></a>
                                @elseif($status == 5)
                                <a href="" data-key="{{ $status }}" data-id="{{ $id }}" style="padding:10px;" class="btn btn-danger changeStatus disabled"><span class="text-status">Đơn huỷ<span></a>
                                @endif
                            </div>
                        </div>
                        <script>
                            $(document).ready(function(){
                                $(".changeStatus").on("click", function(e){
                                    e.preventDefault();
                                    var id     = $(this).attr("data-id");
                                    var status = $(this).attr("data-key");
                                    // alert(status);
                                    $.ajax({
                                        url: "{{ route('admin.order.order-status') }}",
                                        type: "POST",
                                        data:{
                                            id: id,
                                            status: status,
                                        },
                                        success: function(data){
                                                if(status == 0){
                                                    $(".text-status").text('Đang xác nhận....');
                                                    setTimeout(function(){
                                                        window.location.reload();
                                                    }, 500);
                                                }else if(status == 1) {
                                                    $(".text-status").text('Đang giao hàng.....');
                                                    setTimeout(function(){
                                                        window.location.reload();
                                                    }, 500);
                                                }
                                                
                                            // window.location.reload();
                                            // alert(data);
                                        } 
                                    });
                                });
                            });
                        </script>
                        <div class="form-group">
                            <p style="font-weight: 300;font-size: 14px;">Địa chỉ giao hàng:</p>
                            <div class="andress" style="margin-left:10px;">
                                <p style="font-weight: 300;font-size: 14px;">{{ $name }} - {{ $phone }}</p>
                                <p style="font-weight: 300;font-size: 14px;">{{ $andress }} <br /> <strong>Quốc gia:</strong> Việt Nam</p>
                            </div>
                        </div>
                        {{-- <hr /> --}}
                        @foreach($ordersDetail as $orderdetail)
                        <div class="form-group col-xs-12 col-sm-6 col-md-4" style="position:relative;right:5px;">
                            <div class="orders">
                                <p style="font-weight: 300;font-size: 14px;">{{ $orderdetail->name }}</p>
                                <p style="font-weight: 300;font-size: 14px;"><strong>Giá:</strong> {{ number_format($orderdetail->price, 0, ".", ".") }} VNĐ<br /> <strong>Số lượng:</strong> x {{ $orderdetail->qty }}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12">
                            <div class="modal-footer">
                                <div class="form-group col-xs-12 col-sm-6 col-md-4" style="position:relative;right:53px;">
                                    <p>Tổng tiền: <span style="color:red;">{{ number_format($total, 0, ".", ".") }} VNĐ</span></p>
                                </div>
                                <div class="text-right">
                                    <a href="{{ route('admin.order.index') }}" class="btn btn-default">Quay lại</a>
                                    @if($status == 2)
                                    <a href="#" data-id="{{ $id }}" class="btn btn-primary successOrder">Hoàn thành</a>
                                    @elseif($status == 4)
                                    <a href="#" data-id="{{ $id }}" class="btn btn-primary successOrder disabled">Hoàn tất</a>
                                    @endif
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $(".successOrder").on("click", function(e){
                                            e.preventDefault();
                                            var id = $(this).attr("data-id");

                                            $.ajax({
                                                url: "{{ route('admin.order.successOrder') }}",
                                                type: "POST",
                                                data:{
                                                    id: id,
                                                },
                                                success: function(data){
                                                    toastr.success(data.success);
                                                    setTimeout(function(){
                                                        window.location.reload();
                                                    }, 400);
                                                    window.location.href = "{{ route('admin.order.index') }}";
                                                }
                                            });
                                        });
                                    });
                                </script>
                            </div>
                        </div>  
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="clearfix"> </div>
</div>
</div>
</div>
</section>
</div>
@stop
