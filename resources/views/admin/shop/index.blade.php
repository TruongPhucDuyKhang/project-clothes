@extends('templates.admin.master')
@section('content-admin')
<style>
  .btn-hethang {
    color: black;
    background-color: #ccc;
    border-color: #ccc;
  }
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
          Quản lý sản phẩm
        </div>
        <div class="row w3-res-tb">
          <div class="col-sm-3 m-b-xs">
        {{-- <form method="GET">
          <select name="search" onchange="location=this.value" class="input-sm form-control w-sm inline v-middle">
            <option value="{{ route('admin.shop.cat') }}">Mới nhất</option></a>
            <option value="{{ route('admin.shop.cat') }}"><a href="">Delete selected</a></option>
            <option value=""><a href="">Cũ nhất</a></option>
            <option value=""><a href="">Export</a></option>
          </select>
        </form> --}}
        {{-- <button class="btn btn-sm btn-default">Tìm kiếm</button> --}}
        <div class="input-group">
          <input type="text" class="input-sm form-control search-input" name="search" placeholder="Tìm kiếm...">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="submit">Tìm kiếm!</button>
          </span>
        </div> 
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        {{-- <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Tìm kiếm...">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm kiếm!</button>
          </span>
        </div> --}}
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>#</th>
            <th>Sản phẩm</th>
            <th>Danh mục</th>
            <th width="130px">Số lượng</th>
            <th>Giá</th>
            <th>Tình trạng</th>
            <th>Chức năng</th>
          </tr>
        </thead>
        <tbody id="ajax-selling">
          @foreach($products as $product)
          @php 
          $id         = $product->spid;
          $name       = $product->name;
          $price      = $product->price;
          $discount   = $product->discount;
          $qty        = $product->product_qty;
          $cat_id     = $product->cat_id;
          $name_cat   = $product->name_cat;
          $sp_picture = $product->sp_picture;
          $status     = $product->status;
          $selling    = $product->selling;

          $urlPic = 'storage/app/'.$sp_picture;
          @endphp
          <tr>
            <td>{{ $id }}</td>
            <td id="result-{{ $id }}">
              <img width="150px" style="border-radius: 10px;" height="150px" src="{{ $urlPic }}" alt="" title="imgsp"><br />
              {{ $name }}<br />
              @if($selling == 1)
              <a href="{{ $selling }}" data-id="{{ $id }}" class="btn btn-warning changeSelling">Bán chạy</a>
              @else
              <a href="{{ $selling }}" data-id="{{ $id }}" class="btn btn-primary changeSelling">Bình thường</a>
              @endif
            </td>
            <td width="150px">{{ $name_cat }}</td>
            <td><span class="text-ellipsis">{{ $qty }}</span></td>
            @if($discount)
            <td><span class="text-ellipsis" style="color:red;">{{ number_format($totalDis = ($price * $discount) / 100, 0, ".", ".") }}đ</span>
              <del class="text-ellipsis">{{ number_format($price, 0, ".", ".") }}đ</del>
            </td>
            @else
            <td><span class="text-ellipsis">{{ number_format($price, 0, ".", ".") }}</span>đ</td>
            @endif
            <td id="resultStatus-{{ $id }}">
              @if($status == 1)
              <a href="{{ $status }}" data-id="{{ $id }}" class="btn btn-success changeStatus">Còn hàng</a>
              @else
              <a href="{{ $status }}" data-id="{{ $id }}" class="btn btn-hethang changeStatus">Hết hàng</a>
              @endif
            </td>
            <td width="150px">
              <a href="{{ route('admin.shop.edit', $id) }}" class="btn btn-info">Sửa</a>
              <a href="{{ route('admin.shop.del', $id) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xoá</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script>
      $(document).ready(function(){
        $(".changeSelling").on("click", function(e){
          e.preventDefault();
          var id      = $(this).attr("data-id");
          var selling = $(this).attr("href");
        // alert(selling);
        fetch_data(id, selling);
      });
        function fetch_data(id, selling){
          var url = "{{ route('admin.shop.ajax-selling') }}";
          $.ajax({
            url: url,
            data:{
              id: id,
              selling: selling,
            },
            success: function(data){
              $("#result-"+id).html(data);
                // alert(selling);
              },
            });
        }

        //Change - Status
        $(".changeStatus").on("click", function(e){
          e.preventDefault();
          var id  = $(this).attr("data-id");
          var status = $(this).attr("href");
        // alert(id);
        fetch_data_new(id, status);
      });
        function fetch_data_new(id, status){
          var url = "{{ route('admin.shop.ajax-status') }}";
          $.ajax({
            url: url,
            data:{
              id: id,
              status: status,
            },
            success: function(data){
              $("#resultStatus-"+id).html(data);
                // alert(data);
              },
            });
        }
      });
    </script>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">Hiển thị từ 1 đến {{ $products->count() }} của {{ $products->total() }} sản phẩm</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li>{{ $products->links() }}</li>

          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
@stop
