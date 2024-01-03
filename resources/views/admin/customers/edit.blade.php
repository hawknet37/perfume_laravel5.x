@extends('admin_layout')
@section('admin_content')
<div class="form-grids row widget-shadow" data-example-id="basic-forms">
    <div class="form-title">
        <a href="{{ route('customer.index') }}" class="arrow-link">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h4>Cập nhật thông tin khách hàng :</h4>
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
        @foreach($customers as $customer)
        <form role="form" action="{{route('customer.update',[$customer->customer_id])}}" method="post">
            @method('PUT')
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Tên khách hàng</label>
                <input type="text" value="{{$customer->customer_name}}" 
                    name="customer_name" class="form-control" id="customer_name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" value="{{$customer->customer_phone}}" name="customer_phone"
                    class="form-control" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" value="{{$customer->customer_email}}" name="customer_email"
                    class="form-control" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password cũ</label>
                <input type="text" value="{{$customer->customer_password}}" readonly name="customer_password"
                    class="form-control" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password mới</label>
                <input type="text" value="" name="customer_password_new"
                    class="form-control">
            </div>
          
            <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật</button>
        </form>
       @endforeach

    </div>
</div>
@endsection