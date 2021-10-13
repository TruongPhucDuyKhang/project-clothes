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
              Sửa sản phẩm
          </div>
          <div class="agil-info-calendar">
            <!-- calendar -->
            <div class="col-md-7 agile-calendar">
              <!-- grids -->
              <div class="agile-calendar-grid">
                <section class="panel">
                    <div class="panel-body">
                        <div class="position-center">
                            @php 
                                $id          = $findEdit->spid;
                                $cat_id      = $findEdit->cat_id;
                                $name        = $findEdit->name;
                                $price       = $findEdit->price;
                                $discount    = $findEdit->discount;
                                $qty         = $findEdit->product_qty;
                                $shirt_size  = $findEdit->shirt_size;
                                $shoes_size  = $findEdit->shoes_size;
                                $des_text    = $findEdit->des_text;
                                $detail_text = $findEdit->detail_text;
                                $sp_picture  = $findEdit->sp_picture;

                                $urlPic      = 'storage/app/'.$sp_picture;
                            @endphp
                            <form action="{{ route('admin.shop.edit', $id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Tên sản phẩm *</label>
                                    <input type="text" name="name" value="{{ $name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Giá bán *</label>
                                    <input type="text" name="price" value="{{ $price }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Giá giảm</label>
                                    <input type="text" name="discount" value="{{ $discount }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Danh mục cha *</label>
                                    <select name="cat_id" class="form-control input-lg m-bot15">
                                        <option value="0">-- Danh mục cha --</option>
                                        @foreach($getCats as $getCat)
                                        @php 
                                            $name_cat       = $getCat->name_cat;
                                            $cat_id_current = $getCat->cat_id;
                                            $selected = '';
                                        @endphp
                                        @if($cat_id == $cat_id_current)
                                        @php
                                            $selected = 'selected="selected"';
                                        @endphp
                                        @endif
                                        <option {{ $selected }} value="{{ $cat_id_current }}">
                                            {{ str_repeat('--', $getCat->level )}}
                                            {{ $name_cat }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kho hàng *</label>
                                    <input type="text" name="qty" value="{{ $qty }}" class="form-control">
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="selling" value="0" {{ $findEdit->selling == 0 ? 'checked' : ''}}>
                                        Bình thường
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="selling" value="1" {{ $findEdit->selling == 1 ? 'checked' : ''}}>
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
                                        @if($shirt_size == 1)
                                        <option value="0">-- Không có --</option>
                                        <option selected="selected" value="1">Size Áo</option>
                                        @else
                                        <option value="0">-- Không có --</option>
                                        <option value="1">Size Áo</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Phân loại hàng 2 *</label>
                                    <select name="shoes_size" class="form-control input-lg m-bot15">
                                        @if($shoes_size == 1)
                                        <option value="0">-- Không có --</option>
                                        <option selected="selected" value="1">Size Giày, Dép</option>
                                        @else
                                        <option value="0">-- Không có --</option>
                                        <option value="1">Size Giày, Dép</option>
                                        @endif
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
                <style type="text/css">
                    #drop {
                        padding: 8px 10px;
                    }
                    #drop a{
                        position: relative;
                        left: 109px;
                        bottom: 10px;
                        padding: 0px 0px;
                        background: black;
                    }
                    #drop a:hover{
                        background: black;
                    }
                </style>
                <div id="drop">
                    <a {{-- class="delAva" data-id="{{ $libimg->id_img }}" --}} href="#" title="Gỡ">
                    x
                    </a>
                    <img width="200px" src="{{ $urlPic }}" alt="">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Ảnh đại diện *</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="sp_picture">
                    </div>
                </div>
                @foreach($findLibs as $libimg)
                <div id="drop">
                    <a class="delImg" data-id="{{ $libimg->id_img }}" href="">
                    x
                    </a>
                    <img width="200px" src="storage/app/{{ $libimg->picture }}" alt="">
                </div>
                @endforeach
                <script type="text/javascript">
                    $(document).ready(function (){
                        $(".delImg").on("click", function(e){
                            e.preventDefault();
                            var id = $(this).attr("data-id");
                            var url    = "{{ route('admin.shop.del-img') }}";
                            $.ajax({
                                url: url,
                                data: {
                                    id: id,
                                },
                                success: function(data){
                                    window.location.reload();
                                    // alert(data);
                                },
                            });
                        });
                    });
                </script>
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
            <textarea class="form-control ckeditor" name="des_text">{{ $des_text }}</textarea>
        </div>
        <div class="form-group">
            <label>Chi tiết</label>
            <textarea class="form-control ckeditor"  name="detail_text">{{ $detail_text }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info btn-block">Sửa</button>
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
