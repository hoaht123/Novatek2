@extends('admin.admin_layout')
@section('admin-content')
<h1 class="text-center">Cập nhật danh mục</h1>

<div class="container" style="margin-left: 300px">
    <form action="{{URL::to('admin/saveUpdate/'.$category->category_id)}}" method="post">
        @csrf
        <div class="form-group" style="margin-top:50px">
            <label>Tên danh mục</label>
            <input type="text" name="category_name" class="form-control" style="width:650px" value="{{$category->category_name}}">
            </div>
            <input style="margin-top:20px" type="submit" value="Cập nhật danh mục" class="btn btn-info" name="update_cate">
    </form>
</div>

@endsection