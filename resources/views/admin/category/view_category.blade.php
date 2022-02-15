@extends('admin.admin_layout')
@section('admin-content')
<h1 class="text-center">Liệt kê danh mục</h1>
<div class="table-responsive" style="margin-top:50px; text-align:center">
    <table class="table table-striped b-t b-light">
      <thead>
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Hiển thị</th>
            <th>Hành động</th>
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
            @foreach($category as $key=>$cate)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$cate->category_name}}</td>
                <td><span class="text-ellipsis">
                    <?php
                    if($cate->category_status==0){ ?>
                    <a href="{{URL::to('admin/view_category/unactive_category/'.$cate->category_id)}}"><span class="badge badge-primary">Hiển thị</span></a>
                    <?php
                    }else{ ?>
                    <a href="{{URL::to('admin/view_category/active_category/'.$cate->category_id)}}"><span class="badge badge-success">Ẩn</span></a>
                  <?php  }
                    ?>
                  </span></td>
                <td>
                    <a href="{{URL::to('admin/update_category/'.$cate->category_id)}}" class="active" ui-toggle-class="" ><i  style="font-size:25px" class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{URL::to('admin/delete_category/'.$cate->category_id)}}" class="active" ui-toggle-class="" onclick="return confirm('Bạn có muốn xóa {{$cate->category_name}}')"><i style="font-size:25px')"><i style="font-size:25px" class="fa fa-trash text-danger text"></i></a>
                </td>
            </tr>
            @endforeach
      </tbody>
    </table>
  </div>
  @endsection