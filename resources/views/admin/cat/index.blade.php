@extends('templates.admin.master')
@section('content-admin')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
          <div class="panel panel-default">
            <div class="panel-heading">
              Quản lý danh mục
          </div>
          <div class="row w3-res-tb">

              <div class="col-sm-3">
                <div class="input-group">
                  <input type="text" class="input-sm form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-sm btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
    <div class="agil-info-calendar">
        <!-- calendar -->
        <div class="col-md-5 agile-calendar">
          <!-- grids -->
          <div class="agile-calendar-grid">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" id="form-cat">
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="name_cat form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select class="prarent_id form-control input-lg m-bot15">
                                    <option value="0">-- Danh mục cha --</option>
                                    @foreach($getCats as $getCat)
                                    <option value="{{ $getCat->cat_id }}">
                                        {{ str_repeat('--', $getCat->level )}}
                                        {{ $getCat->name_cat }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info btn-block">Thêm</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //calendar -->
<div class="col-md-7 w3agile-notifications">
    <div class="notifications">
        <table class="table table-striped b-t b-light">
            <thead>
              <tr>
                <th>#</th>
                <th>Tên danh mục</th>
                <th class="text-center">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($getCats as $getCat)
            @php 
            $id         = $getCat->cat_id;
            $name_cat   = $getCat->name_cat;
            $prarent_id = $getCat->prarent_id;
            @endphp
            <tr>
                <td>{{ $id }}</td>
                <td>
                    @for($i = 1; $i <= $getCat->level; $i++)
                    <i class="glyphicon glyphicon-triangle-right"></i>
                    @endfor
                    {{ $name_cat }}
                </td>
            <td class="text-center">
                <a href="" class="editCat" data-id="{{ $id }}" ui-toggle-class=""><i class="fa fa-pencil-square-o text-info text-active"></i></a>
                <a href="" class="delCat" data-id="{{ $id }}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><i class="fa fa-trash-o text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
</div>
<div class="clearfix"> </div>
</div>
</div>
</div>
</section>
</div>
<div class="modal" tabindex="-1" id="update-cat" role="dialog">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Sửa danh mục</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form role="form" id="form-edit">
          <div class="form-group">
              <label>Tên danh mục</label>
              <input type="hidden" class="idEdit">
              <input type="text" class="nameEdit form-control" placeholder="Enter email">
          </div>
          <button type="submit" class="btn btn-info">Sửa</button>
      </form>
    </div>
  </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $("#form-cat").on("submit", function(e){
            e.preventDefault();
            var name_cat   = $(".name_cat").val();
            var prarent_id = $(".prarent_id").val();
            $.ajax({
                url: "{{ route('admin.cat.add') }}",
                method: "POST",
                data: {
                    name_cat: name_cat,
                    prarent_id: prarent_id,
                },
                success: function(data){
                    if(data.errors) {
                        for(var count = 0; count < data.errors.length; count++) {
                            toastr.error(data.errors[count]);
                        }
                    }else {
                        toastr.success(data.success);
                        setTimeout(function(){
                            window.location.reload();
                        }, 200);
                    }
                }
            });
        });
        //Edit cat
        $(".editCat").on("click", function(e) {
            e.preventDefault();
            var id  = $(this).attr("data-id");
            var url = "{{ route('admin.cat.edit') }}";
            // alert(id);
            $.ajax({
                url: url,
                data: { 
                    id: id,
                },
                success: function(data){
                    $(".nameEdit").val(data.nameCat);
                    $(".idEdit").val(data.idEdit);
                    $("#update-cat").modal('show');
                }
            });
        });
        $("#form-edit").on("submit", function(e){
            e.preventDefault();
            var url = "{{ route('admin.cat.edit') }}";
            var nameEdit = $(".nameEdit").val();
            var idEdit   = $(".idEdit").val();
            // alert(idEdit);
            $.ajax({
                url: url,
                method: "POST",
                data: {
                    nameEdit: nameEdit,
                    idEdit: idEdit,
                },
                success: function(data){
                    if(data.errors) {
                        for(var count = 0; count < data.errors.length; count++) {
                            toastr.error(data.errors[count]);
                        }
                    }else {
                        toastr.success(data.success);
                        setTimeout(function(){
                            window.location.reload();
                        }, 200);
                    }
                }
            });
        });
        //End-edit

        //del Cat
        $(".delCat").on("click", function(e) {
            e.preventDefault();
            var id  = $(this).attr("data-id");
            var url = "{{ route('admin.cat.del') }}";
            // alert(praID);
            // $.ajax({
            //     url: url,
            //     data: { 
            //         id: id,
            //     },
            //     success: function(data){
            //         if(data.errors) {
            //                 toastr.error(data.errors);
            //         }else {
            //             toastr.success(data.success);
            //             setTimeout(function(){
            //                 window.location.reload();
            //             }, 200);
            //         } 
            //     }
            // });
        });
        // End - DelCat
    });

</script>
@stop
