@extends('admin.master')
@section('page-title','Danh Sách Nguoi Dung')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm Mới Sản Phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        {{--                        <li class="breadcrumb-item active">Danh Sách Khách Hàng</li>--}}
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12 col-md-12">
                                <div class="row">
                                    <div class="col-12">
                                        <form method="post" action="{{ route('product.store') }}"  enctype="multipart/form-data">
                                            @csrf
                                          <div class="row">
                                              <div class="col-6">
                                                  <div class="form-group">
                                                      <label for="name">Tên Sản Phẩm</label>
                                                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" >
                                                      @error('name')
                                                      <p class="text-danger">{{ $message }}</p>
                                                      @enderror
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="name">Loại Sản Phẩm</label>
                                                      <select class="form-control" name="brand" id="">
                                                          @foreach($categories as $categorie)
                                                              <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                                          @endforeach
                                                      </select>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="image">Ảnh Sản Phẩm</label>
                                                      <input type="file" class="form-control" name="image" >
                                                      @error('image_product')
                                                      <p class="text-danger">{{ $message }}</p>
                                                      @enderror
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="image">Ảnh Chi Tiết </label>
                                                      <input type="file" class="form-control" name="image_detail" >
                                                      @error('image_detail')
                                                      <p class="text-danger">{{ $message }}</p>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="col-6">
                                                  <div class="form-group">
                                                      <label for="">Số Lượng</label>
                                                      <input type="number" class="form-control" name="quantity" min="0" >
                                                      @error('quantity')
                                                      <p class="text-danger">{{ $message }}</p>
                                                      @enderror
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="cost_price">Giá Nhập Vào</label>
                                                      <input type="text" class="form-control" name="cost_price"   >
                                                      @error('costPrice')
                                                      <p class="text-danger">{{ $message }}</p>
                                                      @enderror
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="price">Giá Bán Ra</label>
                                                      <input type="text" class="form-control" name="price"  >
                                                      @error('price')
                                                      <p class="text-danger">{{ $message }}</p>
                                                      @enderror
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="size">Kích Thước</label>
                                                      <input type="number" class="form-control" name="size"  >
                                                  </div>
                                              </div>
                                          </div>
                                            <div class="form-group">
                                                <label>Mô Tả</label>
                                                <textarea class="ckeditor" id="ckeditor" name="description"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Thêm Mới</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- /.card-header -->

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
