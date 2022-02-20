@extends('admin.admin_layout')
@section('admin-content')
<h2 class="text-center">Create new brand</h2>
<div class="container" style="margin-left: 300px">
    <form action="{{URL::to('admin/save_brand')}}" method="post">
        @csrf
        <div class="form-group" style="margin-top:50px">
        <label>Name</label>
        <input type="text" name="brand_name" class="form-control" style="width:650px">
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="">Status</label>
            <select name="brand_status" class="form-control"style="width:650px">
                <option value="0"> Show</option>
                <option value="1">Hide</option>
            </select>
        </div>
        <input style="margin-top:20px" type="submit" value="Create" class="btn btn-info" name="create_brand">
    </form>
</div>
@endsection