@extends('admin.admin_layout')
@section('admin-content')
<h1 class="text-center">Create new product</h1>
<div class="container" style="margin-left: 300px">
    <form action="{{URL::to('admin/save_product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="margin-top:50px">
        <label>Name</label>
        <input type="text" name="category_name" class="form-control" style="width:350px">
        </div>
        <div class="form-group" >
            <label for="">Brand</label>
            <select name="brand" class="form-control"style="width:200px">
                <option value="">-----Choose-----</option>
                @foreach($brand as $key=>$bra)
                <option value="{{$bra->brand_id}}"> {{$bra->brand_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category" class="form-control"style="width:200px">
                <option value="">-----Choose-----</option>
                @foreach($category as $key=>$cate)
                <option value="{{$cate->category_id}}"> {{$cate->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Supplier</label>
            <select name="supplier" class="form-control"style="width:200px">
                <option value="">-----Choose-----</option>
                @foreach($supplier as $key=>$sup)
                <option value="{{$sup->supplier_id}}"> {{$sup->supplier_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="product_price" class="form-control" style="width:350px">
        </div>
        <div class="form-group" >
            <label>SKU</label>
            <input type="text" name="product_sku" class="form-control" style="width:350px">
        </div>
        <label for="">Description</label>
        <div class="form-group">
            <textarea   rows="5" cols="60" name="product_description"></textarea>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="product_image" class="form-control" style="width:350px">
        </div>

        <div class="form-group" >
            <label for="">Category staus</label>
            <select name="category_status" class="form-control"style="width:400px">
                <option value="0">Show</option>
                <option value="1">Hide</option>
            </select>
        </div>
        
        <input style="margin-top:20px" type="submit" value="Create" class="btn btn-info" name="create_cate">
    </form>
</div>
@endsection@extends('admin.admin_layout')
@section('admin-content')
<h1 class="text-center">Create new product</h1>
<div class="container" style="margin-left: 300px">
    <form action="{{URL::to('admin/save_product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="margin-top:50px">
        <label>Name</label>
        <input type="text" name="category_name" class="form-control" style="width:350px">
        </div>
        <div class="form-group" >
            <label for="">Brand</label>
            <select name="brand" class="form-control"style="width:200px">
                <option value="">-----Choose-----</option>
                @foreach($brand as $key=>$bra)
                <option value="{{$bra->brand_id}}"> {{$bra->brand_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category" class="form-control"style="width:200px">
                <option value="">-----Choose-----</option>
                @foreach($category as $key=>$cate)
                <option value="{{$cate->category_id}}"> {{$cate->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Supplier</label>
            <select name="supplier" class="form-control"style="width:200px">
                <option value="">-----Choose-----</option>
                @foreach($supplier as $key=>$sup)
                <option value="{{$sup->supplier_id}}"> {{$sup->supplier_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="product_price" class="form-control" style="width:350px">
        </div>
        <div class="form-group" >
            <label>SKU</label>
            <input type="text" name="product_sku" class="form-control" style="width:350px">
        </div>
        <label for="">Description</label>
        <div class="form-group">
            <textarea   rows="5" cols="60" name="product_description"></textarea>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="product_image" class="form-control" style="width:350px">
        </div>

        <div class="form-group" >
            <label for="">Category staus</label>
            <select name="category_status" class="form-control"style="width:400px">
                <option value="0">Show</option>
                <option value="1">Hide</option>
            </select>
        </div>
        
        <input style="margin-top:20px" type="submit" value="Create" class="btn btn-info" name="create_cate">
    </form>
</div>
@endsection