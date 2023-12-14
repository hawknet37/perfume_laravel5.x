@extends('layout')
@section('content')
@foreach($product_details as $key => $value)
<div class="product-details">

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb" style=" background:none">
			<li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
			<li class="breadcrumb-item"><a href="{{url('/danh-muc/'.$cate_slug)}}">{{$product_cate}}</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{$meta_title}}</li>
		</ol>
	</nav>
	<!--product-details-->
	<div class="col-sm-7">
		<ul id="imageGallery">
			@foreach($gallery as $key => $gal)

			<li data-thumb="{{asset('public/uploads/gallery/'.$gal->gallery_images)}}"
				data-src="{{asset('public/uploads/gallery/'.$gal->gallery_images)}}">
				<img width="100%" alt="{{$gal->gallery_name}}"
					src="{{asset('public/uploads/gallery/'.$gal->gallery_images)}}" />
			</li>
			@endforeach

		</ul>

	</div>
	<div class="col-sm-5">
		<div class="product-information">
			<!--/product-information-->
			<img src="images/product-details/new.jpg" class="newarrival" alt="" />
			<h2>{{$value->product_name}}</h2>
			<p>Mã ID: {{$value->product_id}}</p>
			

			<form action="{{URL::to('/save-cart')}}" method="POST">
				@csrf
				<input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">

				<input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">

				<input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">

				<input type="hidden" value="{{$value->product_quantity}}" class="cart_product_quantity_{{$value->product_id}}">

				<input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">

				<span>
					<span>{{number_format($value->product_price,0,',','.').'VNĐ'}}</span>

					<label>Số lượng:</label>
					<input name="qty" type="number" min="1" class="cart_product_qty_{{$value->product_id}}" value="1" />
					<input name="productid_hidden" type="hidden" value="{{$value->product_id}}" />
				</span>
				@if(!Session::get('success_paypal')==true)

				<input type="button" value="Thêm giỏ hàng" class="btn btn-primary btn-sm add-to-cart"
					data-id_product="{{$value->product_id}}" name="add-to-cart">
				@endif
			</form>

			{{-- <p><b>Tình trạng:</b> Còn hàng</p> --}}
			<p><b>Điều kiện:</b> <span>
					Mới nguyên seal 100%</span>
			</p>
			<p><b>Số lượng kho còn:</b> <span>{{$value->product_quantity}}</span></p>
			<p><b>Thương hiệu: </b><span style="text-transform: uppercase">{{ $value->brand_name}}</span></p>
			<p><b>Danh mục:</b> <span>{{$value->category_name}}</span></p>
			<a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
			<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0&appId=742835417390444" nonce="eNJ3f8jw"></script>
			<div class="fb-share-button" data-href="{{$url_canonical}}" data-layout="" data-size="">
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}" class="fb-xfbml-parse-ignore">Chia sẻ</a>
			</div>

		</div>
		<!--/product-information-->
	</div>
	
</div>
<!--/product-details-->

<div class="category-tab shop-details-tab">
	<!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#binhluan" data-toggle="tab">Bình luận</a></li>
			<li ><a href="#details" data-toggle="tab">Mô tả</a></li>
			<li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
			
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane fade active in" id="binhluan">
			<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0&appId=742835417390444" nonce="coy2wnzz"></script>
			<div class="fb-comments" data-href="{{$url_canonical}}" data-width="" data-numposts="10"></div>
		</div>

		<div class="tab-pane fade " id="details">
			<p>{!!$value->product_desc!!}</p>

		</div>

		<div class="tab-pane fade" id="companyprofile">
			<p>{!!$value->product_content!!}</p>


		</div>

	</div>
</div>
<!--/category-tab-->
@endforeach
<div class="recommended_items">
	<!--recommended_items-->
	<h2 class="title text-center">Sản phẩm liên quan</h2>

	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				@foreach($relate as $key => $lienquan)
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">

							<div class="productinfo text-center product-related">
								<a href="{{URL::to('/chi-tiet/'.$lienquan->product_slug)}}">
									<img src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}" alt="" />
									<h2>{{number_format($lienquan->product_price,0,',','.').' '.'VNĐ'}}</h2>
									<p>{{$lienquan->product_name}}</p>
								</a>
							</div>

						</div>
					</div>
				</div>
				@endforeach


			</div>

		</div>

	</div>
</div>
<!--/recommended_items-->
{{-- <ul class="pagination pagination-sm m-t-none m-b-none">
	{!!$relate->links()!!}
</ul> --}}

@endsection