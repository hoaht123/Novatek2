@extends('admin.admin_layout')
@section('admin-content')
<h2 class="text-center">List all brand</h2>
<div class="table-responsive" style="margin-top:50px; text-align:center">
  <p class="float-right"><a href="{{route('create_brand')}}" class="btn btn-primary">Add Brand</a></p>
    <table class="table table-striped b-t b-light">
      <thead>
        <tr>
            <th>STT</th>
            <th>Brand name</th>
            <th>slug</th>
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
            @foreach($brand as $key=>$br)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$br->brand_name}}</td>
                <td>{{$br->brand_slug}}</td>
                <td><span class="text-ellipsis">
                    <?php
                    if($br->brand_status==0){ ?>
                    <a href="{{URL::to('admin/view_brand/unactive_brand/'.$br->brand_id)}}"><span class="badge badge-primary">Show</span></a>
                    <?php
                    }else{ ?>
                    <a href="{{URL::to('admin/view_brand/active_brand/'.$br->brand_id)}}"><span class="badge badge-success">Hide</span></a>
                  <?php  }
                    ?>
                  </span></td>
                <td>
                    <a href="{{URL::to('admin/update_brand/'.$br->brand_id)}}" class="active" ui-toggle-class="" ><i  style="font-size:25px" class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{URL::to('admin/delete_brand/'.$br->brand_id)}}" class="active" ui-toggle-class="" onclick="return confirm('Do you wanna delete {{$br->brand_name}}')"><i style="font-size:25px')"><i style="font-size:25px" class="fa fa-trash text-danger text"></i></a>
                </td>
            </tr>
            @endforeach
      </tbody>
    </table>
  </div>
  @endsection