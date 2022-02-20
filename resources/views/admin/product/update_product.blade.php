@extends('admin.admin_layout')
@section('admin-content')
<div style="margin-top:20px;font-weight:bold">PRODUCT / CREATE / CPU</div>
<h2 class="text-center">CREATE NEW PRODUCT (CPU)</h1>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Select Form
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{URL::to('admin/create_product')}}">CPU</a>
          <a class="dropdown-item" href="{{URL::to('admin/create_product/case_form')}}">Case</a>
          <a class="dropdown-item" href="#">RAM</a>
          <a class="dropdown-item" href="#">Storage</a>
          <a class="dropdown-item" href="#">MotherBoard</a>
          <a class="dropdown-item" href="#">Graphics card</a>
          <a class="dropdown-item" href="#">Power (PSU) </a>
          <a class="dropdown-item" href="#">Keyboard </a>
          <a class="dropdown-item" href="#">Mouse</a>
          <a class="dropdown-item" href="#">Headphone</a>
          <a class="dropdown-item" href="#">Monitor</a>
        </div>
      </div>
<div class="container" style="margin-left: 300px">
    <form action="{{URL::to('admin/save_product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="margin-top:20px">
        Name
        <input type="text" name="product_name" class="form-control" style="width:350px">
        </div>
        <div class="form-group" style="margin-top:20px">
            Slug
            <input type="text" name="product_slug" class="form-control" style="width:350px">
            </div>
        <div class="form-group">
            Category
            <select name="category" class="form-control"style="width:200px">
                <option value="">-----Choose-----</option>
                @foreach($category as $key=>$cate)
                <option value="{{$cate->category_id}}"> {{$cate->category_name}}</option>
                @endforeach
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
        <label for="">SPEC</label>
        <ul>
            <li> <div class="form-group">
                Base Clock Speed
                <select name="cpu_speed" class="form-control"style="width:200px">
                    <option value="">-----Choose-----</option>
                    @foreach($cpu_speed as $key=>$sp)
                    <option value="{{$sp->id}}"> {{$sp->cpu_speed_name}}</option>
                    @endforeach
                </select>
            </div></li>
            <li> <div class="form-group">
                Core
                <select name="core" class="form-control"style="width:200px">
                    <option value="">-----Choose-----</option>
                    @foreach($core as $key=>$cr)
                    <option value="{{$cr->id}}"> {{$cr->core_name}}</option>
                    @endforeach
                </select>
            </div></li>
            <li> <div class="form-group">
                Socket Type
                <select name="socket_type" class="form-control"style="width:200px">
                    <option value="">-----Choose-----</option>
                    @foreach($socket_type as $key=>$soc)
                    <option value="{{$soc->id}}"> {{$soc->socket_name}}</option>
                    @endforeach
                </select>
            </div></li>
        </ul>
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