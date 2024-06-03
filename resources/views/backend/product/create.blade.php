@extends('layouts.admin')
@section('title','Quản lý sản phẩm')
@section('contant')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Quản lý sản phẩm</h1>
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
                    <a class="btn btn-sm btn-danger" href="{{ route('admin.product.index') }}">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
            </div>
                <tbody>
                    <div>
                        <div class="form-group">
                            <label class="name">Tên sản phẩm: *</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm" name="fname"/>
                        </div>
                        <div class="form-group">
                        <label for="brand_id">Tên thương hiệu: *</label>
                            <select id="brand_id" class="form-control">
                                @foreach($list as $row)
                                <option class="form-control" value="1">{{ $row->brandname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" >
                            <label class="category_id" class="form-control">Danh mục: *</label>
                            <select id="category_id" class="form-control">
                                @foreach($list as $row)
                                <option class="form-control" value="1">{{ $row->categoryname}}</option>
                                @endforeach
                            </select>
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