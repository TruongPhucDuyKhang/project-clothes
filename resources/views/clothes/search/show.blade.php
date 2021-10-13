@if($products->count())
@foreach($products as $item)
<div class="item-ult">
	<div class="thumbs">
		<a href="{{ route('clothes.shop.detail', [Str::slug($item->name), $item->spid]) }}" title="">
			<img alt="" src="storage/app/{{ $item->sp_picture }}">
		</a>
	</div>
	<div class="title">
		<a href="{{ route('clothes.shop.detail', [Str::slug($item->name), $item->spid]) }}">{{ $item->name }}</a>
		<p class="f-initial text-center">{{ number_format($item->price, 0, ".", ".") }}₫</p>
	</div>
</div>
@endforeach
<div class="resultsMore" style="position:relative;bottom:50px;">
	<a href="{{ route('clothes.search.search') }}?keyword={{ $keyword }}">Xem thêm {{ $products->total() }} sản phẩm</a>
</div>
@else
<p class="dataEmpty">
	Không có sản phẩm nào...
</p>
@endif