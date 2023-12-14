@extends('admin_layout')
@section('admin_content')
<div class="form-grids row widget-shadow" data-example-id="basic-forms">
  <div class="form-title">
    <a href="{{ URL::to('/all-product') }}" class="arrow-link">
        <i class="fa-solid fa-arrow-left"></i>
    </a>
    <h4>Thêm thư viện ảnh :</h4>
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
  <form action="{{url('/insert-gallery/'.$pro_id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <input type="file" id="file" class="form-control" name="file[]" accept="image/*" multiple>
        <span id="error_gallery"></span>


      </div>
      <div class="col-md-3">
        <input type="submit" name="upload" value="Tải ảnh" class="btn btn-success">
      </div>
    </div>
  </form>
  <div class="form-body">
    <input type="hidden" value="{{$pro_id}}" name="pro_id" class="pro_id">
    <form>
      @csrf
      <div id="gallery_load">

      </div>
    </form>
  </div>
</div>
@endsection