@extends('admin_layout')
@section('admin_content')
<div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
        <a href="{{ URL::to('/manage-slider') }}" class="arrow-link">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h4>Thêm banner :</h4>
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
        <form role="form" action="{{URL::to('/insert-slider')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Tên slide</label>
                <input type="text" name="slider_name" class="form-control" id="exampleInputEmail1"
                    placeholder="Tên danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hình ảnh</label>
                <input type="file" name="slider_image" class="form-control" id="exampleInputEmail1" placeholder="Slide">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả slider</label>
                <textarea style="resize: none" rows="8" class="form-control" name="slider_desc"
                    id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Hiển thị</label>
                <select name="slider_status" class="form-control input-sm m-bot15">
                    <option value="0">Hiển thị</option>
                    <option value="1">Ẩn</option>

                </select>
            </div>

            <button type="submit" name="add_slider" class="btn btn-info">Thêm slider</button>
        </form>
    </div>
</div>
@endsection