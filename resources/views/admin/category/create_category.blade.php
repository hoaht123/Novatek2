@extends('admin.admin_layout')
@section('admin-content')
<h1 class="text-center">Thêm danh mục</h1>
<div class="container" style="margin-left: 300px">
    <form action="{{URL::to('admin/save_category')}}" method="post">
        @csrf
        <div class="form-group" style="margin-top:50px">
        <label>Tên danh mục</label>
        <input type="text" name="category_name" class="form-control" style="width:650px">
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="">Trạng thái danh mục</label>
            <select name="category_status" class="form-control"style="width:650px">
                <option value="0">Hiển thị</option>
                <option value="1">Ẩn</option>
            </select>
        </div>
        <input style="margin-top:20px" type="submit" value="Thêm danh mục" class="btn btn-info" name="create_cate">
    </form>
</div>
@endsection