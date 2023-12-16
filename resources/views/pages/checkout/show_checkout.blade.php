@extends('layout')
@section('content_checkout')

<section id="cart_items">
	<div class="container" style="width:900px">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				<li class="active">Thanh toán giỏ hàng</li>
			</ol>
		</div>

		{{-- <div class="register-req">
			<p>Làm ơn đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
		</div>
		<!--/register-req--> --}}
		@if(session()->has('message'))
		<div class="alert alert-success">
			{!! session()->get('message') !!}
		</div>
		@elseif(session()->has('error'))
		<div class="alert alert-danger">
			{!! session()->get('error') !!}
		</div>
		@endif
		<div class="table-responsive cart_info">

			<form action="{{url('/update-cart')}}" method="POST">
				@csrf
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sản phẩm</td>
							<td class="price">Giá sản phẩm</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@if(Session::get('cart')==true)
						@php
						$total = 0;
						@endphp
						@foreach(Session::get('cart') as $key => $cart)
						@php
						$subtotal = $cart['product_price']*$cart['product_qty'];
						$total+=$subtotal;
						@endphp

						<tr>
							<td class="cart_product">
								<img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" width="90"
									alt="{{$cart['product_name']}}" />
							</td>
							<td class="cart_description">
								<p style="width:150px;">{{$cart['product_name']}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($cart['product_price'],0,',','.')}}đ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">


									<input class="cart_quantity" style="width:50px" type="number"
										@if(Session::get('success_paypal')==true) readonly @endif @if(Session::get('success_momo')==true)
										readonly @endif min="1" name="cart_qty[{{$cart['session_id']}}]" size="10"
										value="{{$cart['product_qty']}}">


								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									{{number_format($subtotal,0,',','.')}}đ
								</p>
							</td>
							<td class="cart_delete">
								@if(!Session::get('success_momo')==true)

								@if(!Session::get('success_paypal')==true)
								<a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i
										class="fa fa-times"></i></a>
								@endif
								@endif
							</td>
						</tr>

						@endforeach
						<tr>
							@if(!Session::get('success_momo')==true)
							@if(!Session::get('success_paypal') == true)
							{{-- <td style="display: inline-block;">
								<input type="submit" value="Cập nhật giỏ hàng" name="update_qty" class="check_out btn btn-default btn-sm">
							</td> --}}
							<td style="display: inline-block;">
								<a class="btn btn-default check_out" href="{{url('/del-all-product')}}">Xóa tất cả</a>
							</td>
							</td>
						
							

							<td></td>


							@endif
							@endif

							<td colspan="2">
								<li>Tổng tiền :<span>{{number_format($total,0,',','.')}}đ</span></li>
								@if(Session::get('coupon'))
								<li>

									@foreach(Session::get('coupon') as $key => $cou)
									@if($cou['coupon_condition']==1)
									Mã giảm: {{$cou['coupon_number']}} %

									@php
									$total_coupon = ($total*$cou['coupon_number'])/100;

									@endphp


									@php
									$total_after_coupon = $total-$total_coupon;
									@endphp

									@elseif($cou['coupon_condition']==2)
									Mã giảm: {{number_format($cou['coupon_number'],0,',','.')}}đ

									@php
									$total_coupon = $total - $cou['coupon_number'];

									@endphp

									@php
									$total_after_coupon = $total_coupon;
									@endphp
									@endif
									@endforeach



								</li>
								@endif

								@if(Session::get('fee'))
								<li hidden>


									Phí vận chuyển: <span>{{number_format(Session::get('fee'),0,',','.')}}đ</span>
									<a class="cart_quantity_delete" href="{{url('/del-fee')}}"><i class="fa fa-times"></i></a>

								</li>
								<?php $total_after_fee = $total + Session::get('fee'); ?>
								@endif
								
								<li style="font-weight:bold">Tổng còn:
									@php
									if(Session::get('fee') && !Session::get('coupon')){
									$total_after = $total_after_fee;
									echo number_format($total_after,0,',','.').'đ';
									}elseif(!Session::get('fee') && Session::get('coupon')){
									$total_after = $total_after_coupon;
									echo number_format($total_after,0,',','.').'đ';
									}elseif(Session::get('fee') && Session::get('coupon')){
									$total_after = $total_after_coupon;
									$total_after = $total_after + Session::get('fee');
									echo number_format($total_after,0,',','.').'đ';
									}elseif(!Session::get('fee') && !Session::get('coupon')){
									$total_after = $total;
									echo number_format($total_after,0,',','.').'đ';
									}

									@endphp
								</li>
							</td>



						</tr>


						@else
						<tr>
							<td colspan="5">
								<center>
									@php
									echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
									@endphp
								</center>
							</td>
						</tr>
						@endif
					</tbody>


			</form>
			@if(Session::get('cart'))
			@if(!Session::get('success_momo')==true)
			<tr>
				<td>
					<form method="POST" action="{{url('/check-coupon')}}" style="display: flex; align-items: center;">
						@csrf
						<input type="text" class="form-control" name="coupon" placeholder="Nhập mã giảm giá" style="margin-right: 5px;">
						<input type="submit" class="btn btn-default check_coupon" value="Áp dụng mã giảm giá">
					</form>
				</td>
				<td>
					@if(Session::get('coupon'))
					<a class="btn btn-default check_out" style="margin-bottom: 19px;" href="{{url('/unset-coupon')}}">Xóa mã khuyến mãi</a>
					@endif
				</td>
			</tr>
			@endif
			@endif
			</table>

		</div>
		<div class="shopper-informations">
			<div class="row" style="margin-bottom:60px;">


				@if(Session::get('cart')==true)
				<div class="form-one col-sm-4">
					<div class="form-one">

					</div>
					<h3>Điền thông tin gửi hàng</h3>

					<form method="POST">
						@csrf
						<input type="text" name="shipping_email" class="shipping_email" required placeholder="Điền email">
						<input type="text" name="shipping_name" class="shipping_name" required placeholder="Họ và tên người gửi">
						<div class="form-group">
							<label for="exampleInputPassword1">Chọn thành phố</label>
							<select name="city" id="city" class="form-control input-sm m-bot15 choose city">

								<option value="">--Chọn tỉnh thành phố--</option>
								@foreach($city as $key => $ci)
								<option value="{{$ci->matp}}">{{$ci->name_city}}</option>
								@endforeach

							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Chọn quận huyện</label>
							<select name="province" id="province" class="form-control input-sm m-bot15 province choose">
								<option value="">--Chọn quận huyện--</option>

							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Chọn xã phường</label>
							<select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
								<option value="">--Chọn xã phường--</option>
							</select>
						</div>
						<?php
							$fee = Session::get('fee');
							echo number_format($fee, 0, ',', '.');
						?>
						<input type="text" name="shipping_address" class="shipping_address" required placeholder="Địa chỉ gửi hàng">
						<input type="text" name="shipping_phone" class="shipping_phone" required placeholder="Số điện thoại">
						<textarea name="shipping_notes" class="shipping_notes" required placeholder="Ghi chú đơn hàng của bạn"
							rows="5"></textarea>

						@if(Session::get('fee'))
						<input type="hidden" name="order_fee" class="order_fee" value="{{Session::get('fee')}}">
						@else
						<input type="hidden" name="order_fee" class="order_fee" value="50000">
						@endif

						@if(Session::get('coupon'))
						@foreach(Session::get('coupon') as $key => $cou)
						<input type="hidden" name="order_coupon" class="order_coupon" value="{{$cou['coupon_code']}}">
						@endforeach
						@else
						<input type="hidden" name="order_coupon" class="order_coupon" value="no">
						@endif




						<div class="form-group">
							<br>
							<label for="exampleInputPassword1">Chọn hình thức thanh toán</label>

							@if(Session::get('success_momo')==true)
							<select name="payment_select" class="form-control input-sm m-bot15 payment_select">
								<option value="momo">Đã thanh toán bằng MOMO</option>
							</select>
							@else
							<select name="payment_select" class="form-control input-sm m-bot15 payment_select">	
								<option value="chuyenkhoan">Qua chuyển khoản</option>						
								<option value="tienmat">Tiền mặt</option>								
							</select>
							@endif
						</div>

						<input type="button" value="Xác nhận đơn hàng" name="send_order" class="btn btn-primary btn-sm send_order">
					</form>
					@if(!Session::get('success_momo')==true)
					@if(Session::get('cart'))
					<td>
						<form action="{{url('/momo-payment')}}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="total_momo" value="{{$total_after}}">
							<button type="submit" class="btn btn-default check_out" name="payUrl" id="momoPaymentBtn">Thanh toán
								MOMO</button>
						</form>
					</td>

					@endif
					@endif


				</div>
				@endif
				<br>
				<br>
			</div>

		</div>
	</div>
</section>
<!--/#cart_items-->

<script>
    // Lắng nghe sự kiện khi dropdown thay đổi giá trị
    document.querySelector('.payment_select').addEventListener('change', function() {
        var selectedValue = this.value; // Lấy giá trị đã chọn

        // Nếu giá trị chọn là 'chuyenkhoan' (chuyển khoản), ẩn nút thanh toán MOMO
        if (selectedValue === 'chuyenkhoan') {
            
			document.getElementById('momoPaymentBtn').style.display = 'block';
        } else { // Nếu không, hiển thị nút thanh toán MOMO
            document.getElementById('momoPaymentBtn').style.display = 'none';
        }
    });
</script>

@endsection