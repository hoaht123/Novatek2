@extends('admin.admin_layout')
@section('admin-content')
<h1 class="text-center">Update category</h1>

<div class="container" style="margin-left: 300px">
    <form action="{{URL::to('admin/saveUpdate_category/'.$category->category_id)}}" method="post">
        @csrf
        <div class="form-group" style="margin-top:50px">
            <label>Name</label>
            <input type="text" name="category_name" class="form-control" style="width:650px" value="{{$category->category_name}}">
            </div>
            <div class="form-group" style="margin-top:50px">
                <label>Chọn danh mục cha</label>
                <select class="form-control" name="parent_id" style="width:650px">
                  <option value="">Chọn danh mục cha</option>
                  {!! $htmlOption !!}
                </select>
            </div>
            <input style="margin-top:20px" type="submit" value="Update" class="btn btn-info" name="update_cate">
    </form>
</div>

@endsection