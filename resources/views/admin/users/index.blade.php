@extends('templates.admin.master')
@section('content-admin')
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
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        {{-- <button class="btn btn-sm btn-default">Tìm kiếm</button> --}}                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Tìm kiếm...">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm kiếm!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>#</th>
            <th>Fullname</th>
            <th>Ngày sinh</th>
            <th>E-Mail</th>
            <th width="100px">Ảnh đại diện</th>
            <th>Bộ phận</th>
            <th>Chức năng</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          @php 
            $id         = $user->id;
            $fullname   = $user->fullname;
            $birthday   = $user->birthday;
            $email      = $user->email;
            $picture    = $user->picture;
            $permission = $user->permission;

            $urlEdit = route('admin.users.edit', $id);
            $urlDel  = route('admin.users.del', $id);
          @endphp
          <tr>
            <td>{{ $id }}</td>
            <td>{{ $fullname }}</td>
            <td>{{ $birthday }}</td>
            <td>{{ $email }}</td>
            <td>
              @if($picture != '')
                <img width="50px" style="border-radius:100%;" src="storage/app/avatar/{{ $picture }}" alt="">
              @else
                <img width="50px" src="storage/app/avatar/images.png" alt="">
              @endif
            </td>
            <td>
              @if($permission == 1)
              <a href="#" class="btn btn-info">Admin</a>
              @else
              <a href="#" class="btn btn-success">Customers</a>
              @endif
            </td>
            <td width="150px">
              <a href="{{ $urlEdit }}" class="btn btn-primary">Sửa</a>
              <a href="{{ $urlDel }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xoá</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">Hiển thị từ 1 đến {{ $users->count() }} của {{ $users->total() }} sản phẩm</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li>{{ $users->links() }}</li>

          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
@stop
