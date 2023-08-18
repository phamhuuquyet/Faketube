@extends('master')

@section('content')

<div class="col-md-6">
    <div class="row">
        <div class="col-12">
            @if($errors = session()->get('errors'))
            <ul>
                @foreach($errors->messages() as $key => $error)
                    <li>
                        {{ $error[0] }}
                    </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm danh mục sản phẩm</h3>
        </div>

        <form method="POST" action="{{ route('admin.category.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Tên danh mục</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                
                <div class="form-group">
                    <label for="img">hình ảnh</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img" name="img">
                            <label class="custom-file-label" for="img">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="status">trạng thái</label>
                    <select name="status" id="status" class="form-control">
                        <option value="0">Không hoạt động</option>
                        <option value="1">Hoạt động</option>
                    </select>
                </div>
            </div>
    
            <div class="card-footer">
                <button type="submit" class="btn btn-success">tạo ngay</button>
            </div>
        </form>
    </div>
</div>

@endsection