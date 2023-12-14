@extends('admin_layout')
@section('admin_content')
<div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
        <a href="{{ URL::to('/view-export') }}" class="arrow-link">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h4>Cập nhật phiếu nhập :</h4>
    </div>

    <style>
        .form-title {
            display: flex;
            align-items: center;
            justify-content: flex-start; 
            padding: 15px;
        }

        .form-title h4 {
            margin: 0; 
            font-size: 18px; 
            color: #333;
        }

        .form-title .arrow-link {
            text-decoration: none;
            color: #007bff; 
            font-size: 20px; 
            margin-right: 10px; 
        }

    </style>

    @php
    $message = Session::get('message');
    if($message){
    echo '<span class="text-alert">'.$message.'</span>';
    Session::put('message',null);
    }
    @endphp

    <div class="form-body">
        @foreach($edit_product as $key => $pro)
        <form role="form" action="{{URL::to('/update-product1/'.$pro->product_id)}}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="text" name="product_name" class="form-control" onkeyup="ChangeToSlug();" id="slug"
                    value="{{$pro->product_name}}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">SL sản phẩm</label>
                <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số lượng"
                    name="product_quantity" class="form-control" value="{{$pro->product_quantity}}">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Giá bán</label>
                <input type="text" value="{{$pro->product_price}}" name="product_price"
                    class="form-control price_format" id="exampleInputEmail1">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                <input type="hidden" name="product_image" value="{{$pro->product_image}}">
                <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100">
            </div>

            <button type="submit" name="add_product" class="btn btn-info">Cập nhật</button>
        </form>
        @endforeach

    </div>
</div>
@endsection