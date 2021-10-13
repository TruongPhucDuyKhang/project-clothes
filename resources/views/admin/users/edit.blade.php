@extends('templates.admin.master')
@section('content-admin')
@if(Session::has('error'))
<script>
    var error = "{{ Session::get('error') }}"; 
    toastr.success(error);
</script>
@endif
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
          <div class="panel panel-default">
            <div class="panel-heading">
              Sửa Users
          </div>
          <div class="agil-info-calendar">
            <!-- calendar -->
            <div class="col-md-7 agile-calendar">
              <!-- grids -->
              <div class="" >
                <section class="panel">
                    <div class="panel-body">
                        <div class="position-center">
                            @php 
                                $id         = $findUser->id;
                                $fullname   = $findUser->fullname;
                                $birthday   = $findUser->birthday;
                                $email      = $findUser->email;
                                $picture    = $findUser->picture;
                                $permission = $findUser->permission;
                                $selected   = '';
                            @endphp
                            <form action="{{ route('admin.users.edit', $id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" disabled value="{{ $fullname }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ngày sinh</label>
                                    <input type="date" name="birthday" value="{{ $birthday }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>E-Mail</label>
                                    <input type="text" disabled value="{{ $email }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phân quyền *</label>
                                    <select name="permission" class="form-control input-lg m-bot15">
                                        @if($permission)
                                        @php 
                                            $selected = 'selected="selected"';
                                        @endphp
                                        @endif
                                        <option {{ $selected }} value="0">Customers</option>
                                        <option {{ $selected }} value="1">Admin</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-block">Sửa</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            {{-- </div> --}}
            {{-- <div class="col-md-5 w3agile-notifications">
                <style type="text/css">
                    #drop {
                        padding: 8px 10px;
                    }
                </style>
                <div class="notifications">
                    <div id="drop">
                    @if($picture != '')
                    <img width="200px" src="storage/app/avatar/{{ $picture }}" alt="">
                    @else
                    <img width="50px" src="storage/app/avatar/images.png" alt="">
                    @endif  
                </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Ảnh đại diện *</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="picture">
                        </div>
                    </div>
                </div>
            </div>  --}}
        </form>
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
