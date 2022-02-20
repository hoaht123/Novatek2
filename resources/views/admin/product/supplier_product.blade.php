@extends('admin.admin_layout')
@section('admin-content')
<h2 class="text-center">List all products</h1>
    <div class="button" style="display: flex;justify-content: end;">
        <div class="right" style="display: flex;">
            <div class="dropdown" style="padding-right: 50px;">
                <button  class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Category
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{URL::to('admin/view_product')}}">All</a>
                  @foreach($category as $key=>$cate)
                  <a class="dropdown-item" href="{{URL::to('admin/view_product_cate/'.$cate->category_id)}}">{{$cate->category_name}}</a>
                  @endforeach   
                </div>
        </div>
        <div class="dropdown" style="padding-right: 50px;">
            <button  class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Brand
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{URL::to('admin/view_product')}}">All</a>
              @foreach($brand as $key=>$bra)
              <a class="dropdown-item" href="{{URL::to('admin/view_product_brand/'.$bra->brand_id)}}">{{$bra->brand_name}}</a>
              @endforeach   
            </div>
        </div>
        <div class="dropdown" >
            <button  class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Supplier
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{URL::to('admin/view_product')}}">All</a>
              @foreach($supplier as $key=>$sup)
              <a class="dropdown-item" href="{{URL::to('admin/view_product_sup/'.$sup->supplier_id)}}">{{$sup->supplier_name}}</a>
              @endforeach   
            </div>
        </div>
        </div>
    </div>
<div class="table-responsive" style="margin-top:50px; text-align:center">
    <table class="table table-striped b-t b-light">
      <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Image</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Supplier</th>
            <th>isHot</th>
            <th>isNew</th>
            <th>Stock</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $i = 1;
            $message = Session::get('message');
            if($message){
                echo '<script>alert("'.$message.'");</script>';
                Session::put('message', null);
            }
            ?>
            @foreach($product as $key=>$pro)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$pro->product_name}}</td>
                <td><img src="{{asset('images/product/'.$pro->product_image)}}" alt="{{$pro->product_name}}" style="width:100;height:100px"></td>
                <td>{{$pro->categories->category_name}}</td>
                <td>{{$pro->brands->brand_name}}</td>
                <td>{{$pro->suppliers->supplier_name}}</td>
                <td>
                    @if($pro->product_isHot == 0)
                        Normal
                    @else
                        Hot
                    @endif
                </td>
                <td>
                    @if($pro->product_isNew == 0)
                        Old
                    @else
                        New
                    @endif
                </td>
                <td>
                    @if($pro->product_inStock == 0)
                        Instock
                    @else
                        Outstock
                    @endif
                </td>
                <td><span class="text-ellipsis">
                    <?php
                    if($pro->product_status==0){ ?>
                    <a href="{{URL::to('admin/view_product/unactive_product/'.$pro->product_id)}}"><span class="badge badge-primary">Show</span></a>
                    <?php
                    }else{ ?>
                    <a href="{{URL::to('admin/view_product/active_product/'.$pro->product_id)}}"><span class="badge badge-success">Hide</span></a>
                  <?php  }
                    ?>
                  </span></td>
                <td>
                  <a href="{{URL::to('admin/product_details/'.$pro->product_id)}}" class="active" ui-toggle-class="" ><i style="font-size:25px" class="fa-solid fa-eye"></i></a>
                    <a href="{{URL::to('admin/update_product/'.$pro->product_id)}}" class="active" ui-toggle-class="" ><i  style="font-size:25px" class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{URL::to('admin/delete_product/'.$pro->product_id)}}" class="active" ui-toggle-class="" onclick="return confirm('Do you wanna delete {{$pro->product_name}}')"><i style="font-size:25px')"><i style="font-size:25px" class="fa fa-trash text-danger text"></i></a>
                </td>
            </tr>
            @endforeach
      </tbody>
    </table>
    {{ $product->links('vendor.custom_pagination') }}
  </div>
  @endsection