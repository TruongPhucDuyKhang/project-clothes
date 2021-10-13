<div class="widget catagory mb-50">
<!--  Side Nav  -->
<div class="nav-side-menu">
    <h6 class="mb-0">Danh mục sản phẩm</h6>
    <div class="menu-list">
        <ul id="menu-content2" class="menu-content collapse out">
            <!-- Single Item -->
            @foreach($getCats as $getCat)
            @php 
            $id         = $getCat->cat_id;
            $name_cat   = $getCat->name_cat;
            $prarent_id = $getCat->prarent_id;

            $slug = Str::slug($name_cat);
            @endphp
            @if($prarent_id == 0)
            <li data-toggle="collapse" data-target="#{{ $slug }}" class="collapsed active">
                <a href="#">{{ $name_cat }}</a>
                <ul class="sub-menu collapse show" id="{{ $slug }}">
                    @foreach($cats as $cat)
                    @php 
                    $slug2 = Str::slug($cat->name_cat);
                    @endphp
                    @if($cat->prarent_id == $id)
                    <li><a href="{{ route('clothes.shop.list', [$slug2, $cat->cat_id]) }}">{{ $cat->name_cat }}</a></li>
                    @endif
                    @endforeach
                </ul>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
</div>
<div class="widget size mb-50">
    <div class="col-md-4 hidden-sm hidden-xs">
        <div class="option browse-tags">
            <span class="custom-dropdown custom-dropdown--grey">
                <form method="GET">
                    <select onchange="location=this.value" class="sort-by custom-dropdown__select">

                        <option value="manual">Sản phẩm nổi bật</option>

                        <option value="price-ascending" data-filter="&amp;sortby=(price:product=asc)">Giá: Tăng dần</option>
                        <option value="price-descending" data-filter="&amp;sortby=(price:product=desc)">Giá: Giảm dần</option>
                        <option value="title-ascending" data-filter="&amp;sortby=(title:product=asc)">Tên: A-Z</option>
                        <option value="title-descending" data-filter="&amp;sortby=(price:product=desc)">Tên: Z-A</option>
                        <option value="created-ascending" data-filter="&amp;sortby=(updated_at:product=desc)">Cũ nhất</option>
                        <option value="created-descending" selected="selected" data-filter="&amp;sortby=(updated_at:product=asc)">Mới nhất</option>
                        <option value="best-selling" data-filter="&amp;sortby=(sold_quantity:product=desc)">Bán chạy nhất</option>
                        <option value="quantity-descending">Tồn kho: Giảm dần</option>
                    </select>
                </form>
            </span>
        </div>
    </div>
</div>