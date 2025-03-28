@extends('admin_layout')
@section('admin_content')
<div class="container_fluid">
  <style type="text/css">
    p.title_thongke {
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
  </style>
  <div class="col_3">
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-dollar icon-rounded"></i>
            <div class="stats">
                <h5><strong>{{$product}}</strong></h5>
                <span>Sản phẩm</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
            <div class="stats">
                <h5><strong>{{$category}}</strong></h5>
                <span>Danh mục</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-money user2 icon-rounded"></i>
            <div class="stats">
                <h5><strong>{{$brand}}</strong></h5>
                <span>Thương hiệu</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget widget1">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
            <div class="stats">
                <h5><strong>@if(empty($doanhthu) || count($doanhthu) === 0)
                        Chưa có
                    @else
                        {{ number_format($doanhthu[0], 0) }} VND
                    @endif</strong></h5>
                <span>Doanh thu hôm nay</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 widget">
        <div class="r3_counter_box">
            <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
            <div class="stats">
                <h5><strong>{{$customer}}</strong></h5>
                <span>Total Users</span>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div>

  <div class="row">

    <p class="title_thongke">Thống kê đơn hàng doanh số</p>
    <form autocomplete="off">
      @csrf


      <div class="col-md-2">
        <p>Từ ngày: <input type="text" id="datepicker" class="form-control">
          <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm " value="Lọc kết quả">
        </p>
      </div>

      <div class="col-md-2">
        <p>Đến ngày: <input type="text" class="form-control" id="datepicker2"></p>
      </div>
      <span class="col-md-1" style="margin-top:26px;">
        <p>Hoặc</p>
      </span>
      <div class="col-md-2">
        <p>Lọc theo:
          <select class="dashboard-filter form-control">
            <option>--Chọn--</option>
            <option value="7ngay">7 ngày qua</option>
            <option value="thangtruoc">tháng trước</option>
            <option value="thangnay">tháng này</option>
            <option value="365ngayqua">365 ngày qua</option>
          </select>
        </p>
      </div>
    </form>
    <div class="col-md-12">
      <div id="chart" style="height: 150px;"></div>
    </div>
  </div>

  <div class="row">
    <style type="text/css">
      table.table-bordered.table-dark {
        background: #555;
      }

      table.table-bordered.table-dark tr th {
        color: #fff;
      }

      .table>tbody>tr>td {
        color: white;
      }
    </style>
  </div>

  <div class="row">
    <div class="col-md-4 col-xs-12">
      <div id="donut"></div>
    </div>

    <div class="col-md-4 col-xs-12 ml-200">
      <style type="text/css">
        ol.list_views {

          color: #333;
        }

        .ml-200 {
          margin-left: 200px;
        }

        ol.list_views a {
          color:orange {
            color: orange;
            font-weight: 400;
          }
        }
      </style>
    </div>
  </div>

</div>

@endsection