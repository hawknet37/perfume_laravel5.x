@extends('admin_layout')
@section('admin_content')
<div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
        <a href="{{ URL::to('/all-product') }}" class="arrow-link">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h4>Cập nhật sản phẩm :</h4>
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
        <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="text" name="product_name" class="form-control" onkeyup="ChangeToSlug();" id="slug"
                    value="{{$pro->product_name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">SL sản phẩm</label>
                <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số lượng"
                    name="product_quantity" class="form-control" value="{{$pro->product_quantity}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slug</label>
                <input type="text" name="product_slug" id="convert_slug" class="form-control" id="exampleInputEmail1"
                    value="{{$pro->product_slug}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giá bán</label>
                <input type="text" value="{{$pro->product_price}}" name="product_price"
                    class="form-control price_format" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giá gốc</label>
                <input type="text" value="{{$pro->price_cost}}" name="price_cost" class="form-control price_format"
                    id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                <textarea style="resize: none" rows="8" class="form-control" name="product_desc"
                    id="ckeditor2">{{$pro->product_desc}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                <textarea style="resize: none" rows="8" class="form-control" name="product_content"
                    id="ckeditor3">{{$pro->product_content}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                <select name="product_cate" class="form-control input-sm m-bot15">
                    @foreach($cate_product as $key => $cate)
                    @if($cate->category_id==$pro->category_id)
                    <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                    @else
                    <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Thương hiệu</label>
                <select name="product_brand" class="form-control input-sm m-bot15">
                    @foreach($brand_product as $key => $brand)
                    @if($cate->category_id==$pro->category_id)
                    <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                    @else
                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                    @endif
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Hiển thị</label>
                <select name="product_status" class="form-control input-sm m-bot15">
                    @if($pro->product_status == 1){
                    <option selected value="1">Hiển thị</option>
                    <option value="0">Ẩn</option>

                    }
                    @else{
                    <option selected value="0">Ẩn</option>
                    <option value="1">Hiển thị</option>
                    }
                    @endif

                </select>
            </div>

            <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
        </form>
        @endforeach

    </div>
</div>
@endsection