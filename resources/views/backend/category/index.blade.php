@extends('layouts.admin')
@section('title','Quản lý danh mục')
@section('contant')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Quản lý danh mục</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a>Home</a></li>
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
                    <a class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i> Thùng rác
                    </a>
                </div>
            </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4"> 
                        <div class="form-group">
                            <label class="name">Tên danh mục: *</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="slug">Slug: </label>
                            <input type="text" class="form-control" name="slug" placeholder="Nhập slug" name="fname"/>
                        </div>
                        <div class="form-group">
                        <label for="panent_id">Tên thương hiệu: *</label>
                            <select id="panent_id" class="form-control">
                                @foreach($list as $row)
                                <option class="form-control" value="1"><i>{{ $row->brandname}}</i></option>
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
                    <div class="col-md-8">
                    <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:30px">#</th>
                            <th class="text-center" style="width:90px">Hình</th>
                            <th>Tên danh mục</th>
                            <th>Tên thương hiệu</th>
                            <th>slug</th>
                            <th class="text-center" style="width:190px">Chức năng</th>
                            <th class="text-center" style="width:30px">ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $row)
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name="checkID[]" id="checkID">
                            </td>
                            <td class="text-center">
                                <img src="{{ asset('images/category/'.$row->image) }}"  alt="{{ $row->image }}" >
                            </td>
                            <td>
                                {{ $row->name}}
                            </td>
                            <td>
                                {{ $row->brandname}}
                            </td>
                            <td>
                                {{ $row->slug}}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.category.status',['id'=>$row->id]) }}" class="btn btn-sm btn-success" >
                                    <i class="fas fa-toggle-on"></i>
                                </a>
                                <a href="{{ route('admin.category.show',['id'=>$row->id]) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.category.edit',['id'=>$row->id]) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('admin.category.delete',['id'=>$row->id]) }}" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                {{ $row->id }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection