@extends('admin_layout')
@section('admin_content')
<div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
        <a href="{{ URL::to('/all-category-product') }}" class="arrow-link">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h4>Cập nhật loại sản phẩm :</h4>
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
        @foreach($edit_category_product as $key => $edit_value)
        <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Tên loại sản phẩm</label>
                <input type="text" value="{{$edit_value->category_name}}" onkeyup="ChangeToSlug();"
                    name="category_product_name" class="form-control" id="slug">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slug</label>
                <input type="text" value="{{$edit_value->slug_category_product}}" name="slug_category_product"
                    class="form-control" id="convert_slug">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả loại sản phẩm</label>
                <textarea style="resize: none" rows="8" class="form-control" name="category_product_desc"
                    id="exampleInputPassword1">{{$edit_value->category_desc}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Từ khóa loại sản phẩm</label>
                <textarea style="resize: none" rows="8" class="form-control" name="category_product_keywords"
                    id="exampleInputPassword1" placeholder="Mô tả loại sản phẩm">{{$edit_value->meta_keywords}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Thuộc loại sản phẩm</label>
                <select name="category_parent" class="form-control input-sm m-bot15">
                    <option value="1">---loại sản phẩm cha---</option>
                    @foreach($category as $key => $val)
                    @if($val->category_parent == 1)
                    <option {{$val->category_id == $edit_value->category_id ? 'selected' : ''
                        }} value="{{$val->category_id}}">{{$val->category_name}}</option>
                    @endif
                    @foreach($category as $key => $val2)

                    @if($val2->category_parent == $val->category_id)
                    <option {{$val2->category_id == $edit_value->category_id ? 'selected' : ''
                        }} value="{{$val2->category_id}}">---{{$val2->category_name}}---</option>
                    @endif
                    @endforeach
                    @endforeach

                </select>
            </div>
            <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật loại sản phẩm</button>
        </form>
        @endforeach

    </div>
</div>
@endsection