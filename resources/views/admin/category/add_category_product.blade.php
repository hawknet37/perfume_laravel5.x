@extends('admin_layout')
@section('admin_content')
<div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
        <a href="{{ URL::to('/all-category-product') }}" class="arrow-link">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h4>Thêm loại sản phẩm :</h4>
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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @php
    $message = Session::get('message');
    if($message){
    echo '<span class="text-alert">'.$message.'</span>';
    Session::put('message',null);
    }
    @endphp
    <div class="form-body">
        <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Tên loại sản phẩm</label>
                <input type="text" class="form-control" onkeyup="ChangeToSlug();" name="category_name" id="slug"
                    placeholder="Điền tên loại sản phẩm" />
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slug</label>
                <input type="text" name="slug_category_product" class="form-control" id="convert_slug"
                    placeholder="Dien-ten-loai-san-pham">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả loại sản phẩm</label>
                <textarea style="resize: none" rows="8" class="form-control" name="category_product_desc"
                    id="exampleInputPassword1" placeholder="Mô tả loại sản phẩm"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Từ khóa loại sản phẩm</label>
                <textarea style="resize: none" rows="8" class="form-control" name="category_product_keywords"
                    id="exampleInputPassword1" placeholder="Từ khóa loại sản phẩm"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Thuộc loại sản phẩm</label>
                <select name="category_parent" class="form-control input-sm m-bot15">
                    <option value="1">---loại sản phẩm cha---</option>
                    @foreach($category as $key => $val)

                    <option value="{{$val->category_id}}">{{$val->category_name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Hiển thị</label>
                <select name="category_product_status" class="form-control input-sm m-bot15">
                    <option value="1">Hiển thị</option>
                    <option value="0">Ẩn</option>

                </select>
            </div>

            <button type="submit" name="add_category_product" class="btn btn-default">Thêm loại sản phẩm</button>
        </form>
    </div>
</div>
@endsection