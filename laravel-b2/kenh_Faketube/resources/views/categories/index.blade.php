@extends('master')

@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">STT</th>
                        <th>tên</th>
                        <th>hình ảnh</th>
                        <th>Trạng thái</th>
                        <th>hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as  $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            {{ $category->img }}
                        </td>
                        <td>{!! 
                                $category->status == 1 ?
                                '<span class="badge badge-primary">hiển thị</span>' :
                                '<span class="badge badge-danger">ko hiển thị</span>'
                                
                            !!}</td>
                        <td>
                            <a href="" class="btn btn-warning">
                                <i class="fa fa-pencil"></i>
                                Sửa
                            </a>
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                                xoá
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection