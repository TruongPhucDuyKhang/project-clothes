@extends('templates.admin.master')
@section('content-admin')
<style type="text/css">
  .alert-secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db;
  }
  /*.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
}*/
</style>
@if(Session::has('msg'))
<script>
    var msg = "{{ Session::get('msg') }}"; 
    toastr.success(msg);
</script>
@endif
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="table-agile-info">
      <div class="panel panel-default">
        <div class="panel-heading">
          Quản lý đơn hàng
        </div>
        <div class="panel-body minimal">
        <div class="mail-option">
          <div class="chk-all">
            <div class="btn-group">
              <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                All
                <i class="fa fa-angle-down "></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"> None</a></li>
                <li><a href="#"> Read</a></li>
                <li><a href="#"> Unread</a></li>
              </ul>
            </div>
          </div>

          <div class="btn-group">
            <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips" aria-expanded="false">
              <i class=" fa fa-refresh"></i>
            </a>
          </div>
          <div class="btn-group hidden-phone">
            <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
              More
              <i class="fa fa-angle-down "></i>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
              <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
            </ul>
          </div>
          <div class="btn-group">
            <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
              Move to
              <i class="fa fa-angle-down "></i>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
              <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
            </ul>
          </div>

          <form action="#" class="pull-right mail-src-position">
            <div class="input-append">
              <input type="text" class="form-control " placeholder="Search Mail">
            </div>
          </form>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th>#</th>
              <th>Thời gian</th>
              <th>Họ tên</th>
              <th>Hình thức</th>
              <th>Tình trạng</th>
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
                $created_at = $now->diffForHumans($at); //12 phút trước
                // $updated_at = $room->updated_at->diffForHumans($now); //1 giờ trước
                $urlInfo = route('admin.order.info', $id);
            @endphp
            <tr>
              <td width="20%"><i class="fa fa-caret-right"></i><span style="color:#009aee;margin:15px"> #{{ $code }}</span>
                @if($status == 4)
                <i class="fa fa-check text-success text-active"></i>
                @elseif($status == 5)
                <i class="fa fa-times text-danger text-active"></i>
                @endif
                {{-- <i class="fa fa-times text-danger text"></i> --}}
              </td>
              <td width="300px">{{ $created_at }}</td>
              <td width="500px"><span>{{ $name }}</span></td>
              @if($payment == 1)
              <td style="color:green;width:500px;">Thanh toán Online</td>
              @else
              <td style="color:green;width:500px;">Thanh toán khi nhận hàng</td>
              @endif
              
              <td width="300px">
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
              <td class="text-center" width="400px"><a class="btn btn-info" href="{{ $urlInfo }}">Xem thông tin</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">

          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">Hiển thị từ {{ $orders->currentpage() }} đến {{ $orders->count() }} của {{ $orders->total() }} đơn hàng</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              {{ $orders->links() }}
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
</section>
@stop
