@extends('admin.admin_layout')
@section('admin-content')
<div style="margin-top:20px;font-weight:bold">PRODUCT / CREATE</div>
<h2 class="text-center">CREATE NEW PRODUCT </h1>
<div class="container" style="margin-left: 300px">
    <form action="{{URL::to('admin/save_product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="margin-top:20px">
        Name
        <input type="text" name="product_name" class="form-control" style="width:350px">
        </div>
        
        <div class="form-group">
            Category
            <select name="category" class="form-control"style="width:200px">
                <option value="">-----Choose-----</option>
                {!! $htmlOption !!}
            </select>
        </div>
        <div class="form-group" >
            Brand
            <select name="brand" class="form-control"style="width:200px">
                <option value="">-----Choose-----</option>
                @foreach($brand as $key=>$bra)
                <option value="{{$bra->brand_id}}"> {{$bra->brand_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            Supplier
            <select name="supplier" class="form-control"style="width:200px">
                <option value="">-----Choose-----</option>
                @foreach($supplier as $key=>$sup)
                <option value="{{$sup->supplier_id}}"> {{$sup->supplier_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            Price
            <input type="text" name="product_price" class="form-control" style="width:350px">
        </div>
        <div class="form-group" >
            SKU
            <input type="text" name="product_sku" class="form-control" style="width:350px">
        </div>
        Description
        <div class="form-group">
            <textarea   rows="5" cols="60" name="product_description"></textarea>
        </div>
        Sort Description
        <div class="form-group">
            <textarea   rows="5" cols="60" name="product_sort_description"></textarea>
        </div>
        <div class="form-group">
            Main Image
            <input type="file" name="product_image_main" class="form-control" style="width:350px">
        </div>
        <div class="form-group">
            Gallery Image
            <input type="file" name="product_image_gallery" class="form-control" style="width:350px">
        </div>
        <div class="form-group">
            Hot
            <select name="isHot" class="form-control"style="width:200px">
                <option value="0">Normal</option>
                <option value="1">Hot</option>
            </select>
        </div>
        <div class="form-group">
            New
            <select name="isNew" class="form-control"style="width:200px">
                <option value="0">Old</option>
                <option value="1">New</option>
            </select>
        </div>
        <div class="form-group">
            Stock
            <select name="stock" class="form-control"style="width:200px">
                <option value="0">In stock</option>
                <option value="1">Out stock</option>
            </select>
        </div>
        <div class="form-group" >
            Status
            <select name="product_status" class="form-control"style="width:400px">
                <option value="0">Show</option>
                <option value="1">Hide</option>
            </select>
        </div>
        
        <input style="margin-top:20px" type="submit" value="Create" class="btn btn-info" name="create_cate">
    </form>
</div>
@endsection