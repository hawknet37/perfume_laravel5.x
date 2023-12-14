@extends('admin_layout')
@section('admin_content')
<div class="tables">
  <div class="row align-items-center">
    <div class="col-md-6">
        <h2 class="title1">Liệt kê phiếu nhập</h2>
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
          <th>Tên sản phẩm</th>
          <th>Số lượng</th>        
          <th>Giá bán</th>
          <th>Hình sản phẩm</th>
          <th>Ngày nhập</th>
          <th>Thành tiền</th>
          <th>Chỉnh sửa</th>
        </tr>
      </thead>
      <tbody>
        @foreach($all_product as $key => $pro)
        <tr>
          <th scope="row">{{1 + $key++}}</th>
          <td>{{ $pro->product_name }}</td>
          <td>{{ $pro->product_quantity }}</td>
          
          <td>{{ number_format($pro->product_price,0,',','.') }}đ</td>
          
          <td><img src="public/uploads/product/{{ $pro->product_image }}" height="100" width="100"></td>
          <td>{{ $pro->product_date }}</td>
          <td>{{ number_format($pro->product_quantity * $pro->product_price, 0, ',', '.') }}đ</td>

          
          <td>
            <a href="{{URL::to('/edit-product1/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-pencil-square-o text-success text-active"></i></a>
            <a onclick="return confirm('Bạn có chắc là muốn xóa phiếu nhập này ko?')"
              href="{{URL::to('/delete-product1/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-times text-danger text"></i>
            </a>
          </td>

        </tr>
        @endforeach

      </tbody>
    </table>
  </div>

  {{-- {!!$all_product->links()!!} --}}

</div>
@endsection