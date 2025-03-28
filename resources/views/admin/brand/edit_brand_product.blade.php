@extends('admin_layout')
@section('admin_content')
<div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
        <a href="{{ URL::to('/all-brand-product') }}" class="arrow-link">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h4>Cập nhật thương hiệu sản phẩm :</h4>
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
        @foreach($edit_brand_product as $key => $edit_value)
        <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Tên thương hiệu</label>
                <input type="text" value="{{$edit_value->brand_name}}" onkeyup="ChangeToSlug();"
                    name="brand_product_name" class="form-control" id="slug">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slug</label>
                <input type="text" value="{{$edit_value->brand_slug}}" name="brand_product_slug" class="form-control"
                    id="convert_slug">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                <textarea style="resize: none" rows="8" class="form-control" name="brand_product_desc"
                    id="exampleInputPassword1">{{$edit_value->brand_desc}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Hiển thị</label>
                <select name="brand_product_status" class="form-control input-sm m-bot15">
                    <option value="0">Ẩn</option>
                    <option value="1">Hiển thị</option>

                </select>
            </div>
            <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật thương hiệu</button>
        </form>
        @endforeach

    </div>
</div>
@endsection