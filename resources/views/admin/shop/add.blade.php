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
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
          <div class="panel panel-default">
            <div class="panel-heading">
              Thêm sản phẩm
          </div>
          <div class="agil-info-calendar">
            <!-- calendar -->
            <div class="col-md-7 agile-calendar">
              <!-- grids -->
              <div class="agile-calendar-grid">
                <section class="panel">
                    <div class="panel-body">
                        <div class="position-center">
                            <form action="{{ route('admin.shop.add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Tên sản phẩm *</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Giá bán *</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Giá giảm</label>
                                    <input type="text" name="discount" value="0" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Danh mục cha *</label>
                                    <select name="cat_id" class="form-control input-lg m-bot15">
                                        <option value="0">-- Danh mục cha --</option>
                                        @foreach($getCats as $getCat)
                                        <option value="{{ $getCat->cat_id}}">
                                            {{ str_repeat('--', $getCat->level )}}
                                            {{ $getCat->name_cat }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kho hàng *</label>
                                    <input type="text" name="qty" class="form-control">
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="selling" value="0" checked="">
                                        Bình thường
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="selling" value="1" checked="">
                                        Bán chạy
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{-- <section class="panel">
                        <div class="panel-body">
                            <div class="position-center">
                                <div class="form-group">
                                    <label>Phân loại hàng 1 *</label>
                                    <select name="shirt_size" class="form-control input-lg m-bot15">
                                        <option value="0">-- Không có --</option>
                                        <option value="1">Size Áo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Phân loại hàng 2 *</label>
                                    <select name="shoes_size" class="form-control input-lg m-bot15">
                                        <option value="0">-- Không có --</option>
                                        <option value="1">Size Giày, Dép</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section> --}}
                </div>
            </div>
        </div>
        <!-- //calendar -->
        <div class="col-md-5 w3agile-notifications">
            <div class="notifications">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Ảnh đại diện *</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="sp_picture">
                    </div>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Thư viện ảnh *</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="library_picture[]" multiple>
                </div>
            </div>
        </div>
        {{-- <section class="panel">
            <div class="panel-body">
                <div class="position-center">
                    <div class="form-group">
                        <label>Phân loại hàng 1 *</label>
                        <select name="shirt_size" class="form-control input-lg m-bot15">
                            <option value="">-- Không có --</option>
                            <option value="1">Size Áo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phân loại hàng 2 *</label>
                        <select name="" class="form-control input-lg m-bot15">
                            <option value="shoes_size">-- Không có --</option>
                            <option value="1">Size Giày</option>
                        </select>
                    </div>
                </div>
            </div>
        </section> --}}
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control ckeditor" name="des_text"></textarea>
        </div>
        <div class="form-group">
            <label>Chi tiết</label>
            <textarea class="form-control ckeditor"  name="detail_text"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info btn-block">Thêm</button>
        </div>
    </form>
</div>
<div class="clearfix"> </div>
</div>
</div>
</div>
</section>
</div>
@stop
