@extends('admin.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh Sách Đơn Hàng</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                    <li class="breadcrumb-item active">Danh Sách Đơn Hàng</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="col-6">
        <div class="row">
            <div class="col-3">
                <a href="{{ route('order.waiting') }}" class="btn btn-info">Đang Chờ Xử Lý</a>
            </div>
            <div class="col-3">
                <a href="{{ route('order.ship') }}" class="btn btn-primary">Đang Giao Hàng</a>
            </div>
            <div class="col-3">
                <a href="{{ route('order.success') }}" class="btn btn-success">Đã Giao Hàng</a>
            </div>
            <div class="col-3">
                <a href="{{ route('order.cancel') }}" class="btn btn-danger">Đã Hủy Đơn Hàng</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã Đơn Hàng</th>
                                <th>Tên Khách Hàng</th>
                                <th>Ghi Chú</th>
                                <th>Trạng thái</th>
                                <th>Ngày Đặt</th>
                                <th>Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $key=>$order)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->customer->name }}</td>
                                    <td>{{ $order->note }}</td>
                                    <td>
                                        <span class="badge {{ $order->Badge() }}">
                                            {{ $order->status() }}
                                        </span>
                                    </td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>
                                        <a href="{{ route('order.detail',$order->id) }}">
                                            <button type="button" class="btn btn-success" >
                                                chi tiết
                                            </button>
                                        </a>||
                                        <a href="{{ route('order.delete',$order->id) }}">
                                            <button type="button" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')" >
                                                Xoá
                                            </button>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
