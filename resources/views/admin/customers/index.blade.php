@extends('admin_layout')
@section('admin_content')
<div class="tables">
  <div class="row align-items-center">
    <div class="col-md-6">
        <h2 class="title1">Liệt kê khách hàng</h2>
    </div>
    <div class="col-md-6 text-right px-0">
        <a href="{{ route('customer.create') }}" class="btn btn-primary" ui-toggle-class="">
            <i class="fa fa-plus"></i> Thêm khách hàng
        </a>
    </div>
  </div>


  <div class="bs-example widget-shadow" data-example-id="hoverable-table">

    <h4>
      @php
      $message = Session::get('message');
      if($message){
      echo '<span class="text-alert">'.$message.'</span>';
      Session::put('message',null);
      }
      @endphp
    </h4>
    <table class="table table-hover" id="myTable">
      <thead>
        <tr>
          <th>#</th>
          <th>Tên khách hàng</th>
          <th>Email</th>
          <th>Password</th>
          <th>Phone</th>

          <th>Manage</th>
        
        </tr>
      </thead>
      <tbody>
        @foreach($customers as $key => $cus)
        <tr>
          <th scope="row">{{1 + $key++}}</th>
          <td>{{ $cus->customer_name }}</td>
          <td>{{ $cus->customer_email}}</td>
          <td>{{ $cus->customer_password}}</td>
          <td>{{ $cus->customer_phone }}</td>

          <td>
            <form method="post" action="{{ route('customer.destroy', $cus->customer_id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Xóa</button>
            </form>
            <a href="{{ route('customer.edit', $cus->customer_id) }}" class="btn btn-warning">
                Sửa
            </a>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {!!$customers->links()!!}

</div>
@endsection