<h3 style="color:#000">Xin chào {{ $name }}</h3>
<p style="color:#000">Rất cảm ơn quý khách đã tin tưởng và lựa chọn sản phẩm tại cửa hàng bán quần áo của chúng tôi</p>
<h4 style="color:#000">Chi tiết đơn hàng</h4>
<table style="border:black">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">TÊN SẢN PHẨM</th>
			<th scope="col">ĐƠN GIÁ</th>
			<th scope="col">SỐ LƯỢNG</th>
			<th scope="col">THÀNH TIỀN</th>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
		@php 
			$totalSP = $product->price * $product->qty;
		@endphp
		<tr>
			<th scope="row">{{ $product->order_detail_id }}</th>
			<td>{{ $product->name }}</td>
			<td>{{ number_format($product->price, 0, ".", ".") }}đ</td>
			<td class="text-center">x {{ $product->qty }}</td>
			<td class="text-center">{{ number_format($totalSP, 0, ".", ".") }}đ</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div style="font-weight:bold">
        <span>Tổng tiền: </span>
        <span style="color:red">{{ number_format($total, 0, ".", ".") }} VNĐ</span>
 </div>
<div>
	<h3 style="color:#000">Thông tin giao hàng</h3>
	<p style="color:#000">
		Họ tên : <strong>{{ $name }}</strong>
	</p>
	<p style="color:#000">
		Địa chỉ giao hàng : <strong>{{ $andress }}</strong>
	</p>
	<p style="color:#000">
		Số điện thoại : <strong>{{ $phone }}</strong>
	</p>
	<p style="color:#000">
		Phương thức thanh toán :
		<strong>
			@if($payment == 1)
			<span>Thanh toán khi nhận hàng</span>
			@else
			<span>Thanh toán Online</span>
			@endif
		</strong>
	</p>
</div>
<div>
	<p style="color:#000">Vui lòng chuẩn bị đủ số tiền khi nhận hàng</p>
	<p style="color:silver">Xin chân thành cảm ơn quý khách đã ủng hộ sản phẩm của chúng tôi</p>
</div>