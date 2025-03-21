<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------Seo--------->
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    @foreach($contact as $key => $val)
    <link rel="icon" type="image/x-icon" href="{{URL::to('public/uploads/contact/'.$val->info_logo)}}" />
    @endforeach

    <title>{{$meta_title}}</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/lightgallery.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/lightslider.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettify.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('public/frontend/images/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{asset('public/frontend/images/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{asset('public/frontend/images/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{asset('public/frontend/images/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed"
        href="{{asset('public/frontend/images/apple-touch-icon-57-precomposed.png')}}">
</head>
<!--/head-->
<style>
    body {}
</style>

<body>

    <header id="header">
        <!--header-->

        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            @foreach($contact as $key => $val)
                            @if(!Session::get('success_paypal')==true)

                            <a href="{{URL::to('/')}}"><img src="{{URL::to('public/uploads/contact/'.$val->info_logo)}}"
                                    height="100" width="100" alt="" /></a>
                            @else
                            <a href="{{URL::to('/checkout')}}"><img
                                    src="{{URL::to('public/uploads/contact/'.$val->info_logo)}}" height="125"
                                    width="250" alt="" /></a>
                            
                            @endif
                            @endforeach

                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">

                                {{-- <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li> --}}
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){ 
                                 ?>
                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a>
                                </li>

                                <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>
                                <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a>
                                </li>
                                <?php 
                                }else{
                                ?>
                                <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a>
                                </li>
                                <?php
                                 }
                                ?>


                                @if(!Session::get('success_paypal')==true)
                                <li><a href="{{url('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng
                                        <span class="show-cart"> </span></a>
                                </li>
                                @else
                                <li><a href="{{url('/checkout')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng
                                        <span class="show-cart"> </span></a>
                                </li>
                                @endif
                                <?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=NULL){ 
                              ?>
                                <li><a href="{{URL::to('/history')}}"><i class="fa fa-bell"></i> Lịch sử đơn
                                        hàng</a>
                                </li>

                                <?php
                                }
                              ?>
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){ 
                                 ?>
                                <li>
                                    <div class="dropdown">
                                        <style>
                                            .dropbtn {
                                                
                                                background: white;
                                                padding: 12px;
                                                font-size: 16px;
                                                border: none;
                                                cursor: pointer;
                                            }

                                            /* Dropdown button on hover & focus */
                                            .dropbtn:hover, .dropbtn:focus {
                                                
                                            }

                                            /* The container <div> - needed to position the dropdown content */
                                            .dropdown {
                                                position: relative;
                                                display: inline-block;
                                            }

                                            /* Dropdown Content (Hidden by Default) */
                                            .dropdown-content {
                                                display: none;
                                                position: absolute;
                                                
                                                min-width: 160px;
                                                z-index: 1;
                                            }

                                            /* Links inside the dropdown */
                                            .dropdown-content a {
                                                color: black;
                                                padding: 12px 16px;
                                                text-decoration: none;
                                                display: block;
                                            }

                                            /* Change color of dropdown links on hover */
                                            .dropdown-content a:hover {
                                               
                                            }

                                            /* Show the dropdown menu on hover */
                                            .dropdown:hover .dropdown-content {
                                                display: block;
                                            }

                                            /* Change the background color of the dropdown button when the dropdown content is shown */
                                            .dropdown:hover .dropbtn {
                                                
                                                }
                                        </style>
                                            <button class="dropbtn">
                                                <img width="20%" src="{{Session::get('customer_picture')}}" alt="">
                                                <span>{{ Session::get('customer_name') }}</span>
                                                <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="{{URL::to('/view-reset-password')}}"><i class="fa fa-key"></i>Đổi mật khẩu</a>
                                                <a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>Đăng xuất</a>
                                            </div>
                                        </div>
                                </li>

                                <?php
                            }else{
                                 ?>
                                <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                <?php 
                             }
                                 ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom" style="">

            <!--header-bottom-->
            <div class="container">
                <div class="row ">
                    <div class="col-sm-7">
                        <div class="navbar-header ">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                @if(!Session::get('success_paypal')==true)

                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                @else
                                <li><a href="{{URL::to('/checkout')}}" class="active">Trang chủ</a></li>
                                @endif
                                <li class="dropdown">
                                    <a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <?php
                                        $categoryArray = $category->toArray();
                                        $reversedCategories = array_reverse($categoryArray);
                                        ?>
                                        @foreach($reversedCategories as $key => $danhmuc)
                                        <li>
                                            <a href="{{URL::to('/danh-muc/'.$danhmuc->slug_category_product)}}">{{$danhmuc->category_name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Thương hiệu<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($brand as $key => $thuonghieu)
                                        <li><a
                                                href="{{URL::to('/thuong-hieu/'.$thuonghieu->brand_slug)}}">{{$thuonghieu->brand_name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                {{-- <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a> --}}

                                </li>
                                @if(!Session::get('success_paypal')==true)

                                <li><a href="{{URL::to('/gio-hang')}}">Giỏ hàng<span class="show-cart"> </span></a>
                                </li>
                                @else
                                <li><a href="{{URL::to('/checkout')}}">Giỏ hàng</a></li>
                                @endif
                                <li><a href="{{URL::to('/lien-he')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        @if(!Session::get('success_paypal')==true)
                        <form action="{{URL::to('/tim-kiem')}}" autocompelete="off" class="searchform" method="post">
                            {{csrf_field()}}
                            <input type="text" style="width:60%" name="keywords_submit" id="keywords"
                                placeholder="Tìm kiếm sản phẩm" style="position: relative;" />
                            {{-- <div id="search_ajax"></div> --}}
                            <button type="submit" class="btn btn-default"><i
                                    class="fa fa-arrow-circle-o-right"></i></button>
                        </form>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <!---------------------------Slider Section---------------------->
    @yield('slider')

    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-12 padding-right">

                    @yield('content_category')
                    @yield('content_brand')
                    @yield('content_cart')
                    @yield('content_checkout')

                </div>
                @yield('sidebar')


                <div class="col-sm-9 padding-right">

                    @yield('content')

                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <p>
                            <img src="{{URL::to('public/uploads/contact/'.$val->info_logo)}}" height="250" width="250"
                                alt="" />
                        </p>
                        
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{URL::to('mua-hang')}}">Hướng dẫn mua hàng</a></li>
                                <li><a href="{{URL::to('thanh-toan')}}">Hướng dẫn thanh toán</a></li>
                                <li><a href="{{URL::to('dieu-khoan-dich-vu')}}">Điều khoản & dịch vụ</a></li>
                                <li><a href="{{URL::to('quy-dinh-doi-tra')}}">Quy định đổi trả</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Thông tin Shop</h2>
                            <ul class="nav nav-pills nav-stacked">


                                @foreach($contact as $key => $cont)

                                <li> {!!$cont->info_contact!!}
                                </li>

                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>Fanpage</h2>
                            <ul class="nav nav-pills nav-stacked">
                                @foreach($contact as $key => $cont)

                                <li> {!!$cont->info_fanpage!!}

                                </li>

                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row" style="display: flex; justify-content: center;">
                    <p class="pull-left">Copyright © 2023 Mihawk Perfume - Mihawk's team.</p>
                </div>
            </div>
        </div>
        

    </footer>
    <!--/Footer-->



    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/lightslider.js')}}"></script>
    <script src="{{asset('public/frontend/js/prettify.js')}}"></script>
    <script src="{{asset('public/frontend/js/simple.money.format.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1">
    </script>

    <script>
        $(document).ready(function() {
            // Thêm sự kiện cho các input số lượng sản phẩm
            $('.cart_quantity input').on('change', function() {
                var sessionId = $(this).attr('name').match(/\[(.*?)\]/)[1]; // Lấy session_id
                var quantity = $(this).val(); // Lấy số lượng sản phẩm mới

                // Gửi yêu cầu AJAX để cập nhật giỏ hàng
                $.ajax({
                    type: 'POST',
                    url: '{{url("/update-cart")}}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        cart_qty: {
                            [sessionId]: quantity
                        }
                    },
                    success: function(response) {
                        // Xử lý phản hồi từ server (nếu cần)
                        location.reload(); // Tải lại trang sau khi cập nhật giỏ hàng
                    },
                    error: function(xhr, status, error) {
                        // Xử lý lỗi (nếu cần)
                    }
                });
            });
        });
    </script>
    
    <script>
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:3,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
            }   
        });  
    });
    </script>

    <script type="text/javascript">
        $('.price_format').simpleMoneyFormat();
    </script>
    <script type="text/javascript">
        function Huydonhang(id){
            var order_code = id;
            var lydo = $('.lydohuydon').val();
           
            var _token = $('input[name="_token"]').val();

            // alert(id);
            // alert(lydo);
            // alert(order_status);
            $.ajax({
                    url:'{{url('huy-don-hang')}}',
                    method:'post',
                    data:{order_code:order_code,lydo:lydo,_token:_token},
                    success:function(data){
                        alert('Hủy đơn hàng thành công!');
                       location.reload(); 
                    
                    }
                })
         
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
        
                var cate_id = $('.tabs_pro').data('id');

                var _token = $('input[name="_token"]').val();
                // alert(cate_id);
                $.ajax({
                    url:'{{url('product-tabs')}}',
                    method:'post',
                    data:{cate_id:cate_id,_token:_token},
                    success:function(data){
                        $('#tabs_product').html(data);
                    }
                })
         


            $('.tabs_pro').click(function(){
                var cate_id = $(this).data('id');

                var _token = $('input[name="_token"]').val();
                // alert(cate_id);
                $.ajax({
                    url:'{{url('product-tabs')}}',
                    method:'post',
                    data:{cate_id:cate_id,_token:_token},
                    success:function(data){
                        $('#tabs_product').html(data);
                    }
                })
            })
    })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            $( "#slider-range" ).slider({
            orientation: "horizontal",
            range: true,
            min:{{$min_price_range}},
            max:{{$max_price_range}},
            values: [ {{$min_price}},
            {{$max_price}} ],
            slide: function( event, ui ) {
            $( "#amount_start" ).val( ui.values[ 0 ]).simpleMoneyFormat() ;
            $( "#amount_end" ).val( ui.values[ 1 ]).simpleMoneyFormat();
            $( "#start_price" ).val(ui.values[ 0 ]  );
            $( "#end_price" ).val(ui.values[ 1 ] );
            }
      });


      $( "#amount_start" ).val($( "#slider-range").slider( "values", 0 )).simpleMoneyFormat();
      $( "#amount_end" ).val(  $( "#slider-range" ).slider( "values", 1 )).simpleMoneyFormat();
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#sort').on('change',function(){
                var url = $(this).val();
                // alert(url);
                if(url){
                    window.location = url;
                }
                return false;
            })
            })
    </script>
    {{-- Đánh giá sao --}}
    <script type="text/javascript">
        function remove_background(product_id){
            for(var count = 1; count <= 5; count++){
                $('#'+product_id+'-'+count).css('color', '#ccc');
            }
        }
        //hover chuột đánh giá sao
        $(document).on('mouseenter', '.rating', function(){
            var index = $(this).data("index");
            var product_id = $(this).data('product_id');
            remove_background(product_id);

            for(var count = 1; count <= index; count++){
                $('#'+product_id+'-'+count).css('color', '#ffcc00');
            }
        });
        // Nhả chuột không đánh giá
        $(document).on('mouseleave', '.rating', function(){
            var index = $(this).data("index");
            var product_id = $(this).data('product_id');
            var rating = $(this).data("rating");
            remove_background(product_id);

            for(var count = 1; count <= rating; count++){
                $('#'+product_id+'-'+count).css('color', '#ffcc00');
            }
        });
        // Click đánh giá sao
        $(document).on('click', '.rating', function(){
            var index = $(this).data("index");
            var product_id = $(this).data('product_id');
            var _token = $('input[name="_token"]').val();

            $.ajax({
                    url:"{{url('/insert-rating')}}",
                    method:'post',
                    data:{index:index,product_id:product_id,_token:_token},
                    success:function(data){
                        if(data== 'done'){
                            alert("Bạn đã đánh giá " + index + " /5");
                        }
                        else{
                            alert("Lỗi đánh giá");
                        }
                    }
            });
        });
    </script>

    {{-- Đánh giá bình luận--}}
    <script type="text/javascript">
        $(document).ready(function(){
            load_comment();
            function load_comment(){
                var product_id = $('.comment_product_id').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                url:"{{url('/load-comment')}}",
                method:'post',
                data:{product_id:product_id,_token:_token},
                success:function(data){
                    $('#comment_show').html(data);
                }
            });
            }
            $('.send-comment').click(function(){
                var product_id = $('.comment_product_id').val();
                var comment_name = $('.comment_name').val();
                var comment_content = $('.comment_content').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{url('/send-comment')}}",
                    method:'post',
                    data:{product_id:product_id,comment_name:comment_name,comment_content:comment_content,_token:_token},
                    success:function(data){
                        $('#notify_comment').html('<span class="text text-success">Gửi đánh giá thành công, đánh giá đang chờ duyệt</span>')
                        load_comment();
                        $('#notify_comment').fadeOut(2000);
                        $('#comment_name').val('');
                        $('#comment_content').val('');
                    }
                });
            });
        });
    </script>


    <script type="text/javascript">
        $('#keywords').keyup(function(){
        var query = $(this).val();
        // alert(query)
        if(query !=''){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{url('/autocomplete-ajax')}}",
                method:'post',
                data:{query:query,_token:_token},
                success:function(data){
                    $('#search_ajax').fadeIn();
                    $('#search_ajax').html(data);
                }
            });
        } else{
            $('#search_ajax').fadeOut();
        }
    });
    $(document).on('click','li',function(){
        $('#keywords').val($(this).text());
        $('#search_ajax').fadeOut();
    });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' && maqh =='' && xaid ==''){
                    alert('Làm ơn chọn để tính phí vận chuyển');
                }else{
                    $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                    location.reload(); 
                    }
                    });
                } 
        });
    });
    //     
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            
            $('.send_order').click(function(){
                // e.preventDefault();
                
                swal({
                    
                  title: "Xác nhận đơn hàng",
                  text: "Đơn hàng sẽ không được hoàn trả khi đặt, bạn có muốn đặt không?",
                  type: "warning",
                  showCancelButton: true,
                
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Cảm ơn, Mua hàng",
                  required: 'true',
                  

                cancelButtonText: "Đóng, kiểm tra lại thông tin",
                closeOnConfirm: false,
                closeOnCancel: false
                },
                function(isConfirm){
                    
                     if (isConfirm) {

                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        if (shipping_email === '' || shipping_name === '' || shipping_address === '' || shipping_phone === '' || shipping_notes === '' || shipping_method === '') {
                            swal("Lỗi", "Vui lòng điền đầy đủ thông tin.", "error");
                            return;
                        }

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                            success:function(){
                               swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                            }
                        });

                        window.setTimeout(function(){ 
                            window.location.href = "{{url('/history')}}";
                        } ,3000);

                      } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");
                      }             
                }); 
            });
        });
    

    </script>
    
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script type="text/javascript">
        $(document).ready(function(){
            show_cart();
            //show cart quantity
        function show_cart(){
            $.ajax({
             url:"{{url('/show-cart')}}",
             method:"GET",
             success:function(data){
              $('.show-cart').html(data);
             }                                          
                 
            });
        }
                    
            $('.add-to-cart').click(function(){

                var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                    alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
                }else{

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_quantity:cart_product_quantity,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                        success:function(){

                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                                });
                                show_cart();


                        }

                    });
                }

                
            });
        });
    
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' && maqh =='' && xaid ==''){
                    alert('Làm ơn chọn để tính phí vận chuyển');
                }else{
                    $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                       location.reload(); 
                    }
                    });
                } 
        });
    });
//     
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
           
            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);     
                }
            });
        });
        });
          
    </script>

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "179518948571928");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

</body>

</html>