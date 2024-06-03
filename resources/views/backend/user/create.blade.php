@extends('layouts.admin')
@section('title','Quản lý liên hệ')
@section('contant')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Quản lý liên hệ</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
            <div class="row">
                <div class="col-12 text-right">
                    <a class="btn btn-sm btn-danger" href="{{ route('admin.post.index') }}">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
            </div>
                <tbody>
                    <div>
                        <div class="form-group">
                            <label class="name">Họ tên: *</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập họ tên" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="username">Tên đăng nhập: *</label>
                            <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="password">Mật khẩu: *</label>
                            <input type="text" class="form-control" name="password" placeholder="Nhập vai trò" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="phone">Số điện thoại: *</label>
                            <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="email">Email: *</label>
                            <input type="text" class="form-control" name="email" placeholder="Nhập email" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="roles">Vai trò: *</label>
                            <input type="text" class="form-control" name="roles" placeholder="Nhập vai trò" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label  for="image"  class="text-main">  Hình ảnh sản phẩm(*)</label>
                            <input  class="form-control"  type="file"  name="image"/><br/>
                        </div>
                        <div class="mb-3">
                            <button  class="btn btn-primary"  type="submit"  id="submit"  name="submit"><p>Thêm</p></button>
                        </div>
                    </div>
                </tbody>
            </div>
        </div>
    </section>
@endsection