@extends('admin.admin_layout')
@section('admin-content')
@foreach($product as $key=>$pro)
<div style="margin-top:20px;font-weight:bold">PRODUCT / DETAILS / {{$pro->product_name}}</div>
<h2 class="text-center" style="margin-top:20px">PRODUCT INFORMATION</h2>
<div class="container" style="margin-top:50px">
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                   <p>MAIN :</p>
                    <img src="{{asset('images/product/'.$pro->product_main_image)}}" alt="{{$pro->product_name}}" style="width:300;height:300px"" alt="">
                </div>
                <div class="col-lg-12">
                    <p>GALLERY :</p>
                    <img src="{{asset('images/product/'.$pro->product_image_gallery)}}" alt="{{$pro->product_name}}" style="width:300;height:300px">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="title" style="font-size: 30px;font-weight:bold">{{$pro->product_name}}</div>
            <div style="font-size:20px">Sku : {{$pro->product_sku}}</div>
            <div style="font-size:20px">Category : {{$pro->categories->category_name}}</div>
            <div style="font-size:20px">Brand : {{$pro->brands->brand_name}}</div>
            <div style="font-size:20px">Price : {{number_format($pro->product_price).' VNĐ    '}}</div>
            SPEC
            <ul>
                    @if($pro->cpu_speed_id != null)
                    <li>
                       Speed: {{$pro->cpu_speed->cpu_speed_name}}
                    </li>
                    @else
                    @endif

                    @if($pro->core_id != null)
                    <li>
                       Core: {{$pro->core->core_name}}
                    </li>
                    @else
                    @endif

                    @if($pro->socket_id != null)
                    <li>
                       Socket: {{$pro->socket->socket_name}}
                    </li>
                    @else
                    @endif

                    @if($pro->size_form_id != null)
                    <li>
                       Size form: {{$pro->size_form->size_form_name}}
                    </li>
                    @else
                    @endif

                    @if($pro->cpu_id != null)
                    <li>
                       GPU: {{$pro->cpu->cpu_name}}
                    </li>
                    @else
                    @endif

                    @if($pro->memory_size_id != null)
                    <li>
                       Memory size: {{$pro->memory_size->memory_size}}
                    </li>
                    @else
                    @endif

                    @if($pro->memory_type != null)
                    <li>
                       Memory type: {{$pro->memory_type->memory_name}}
                    </li>
                    @else
                    @endif

                    @if($pro->bus_id != null)
                    <li>
                       Bus: {{$pro->bus->bus_speed}}
                    </li>
                    @else
                    @endif

                    @if($pro->color_id != null)
                    <li>
                       Color: {{$pro->color->color_name}}
                    </li>
                    @else
                    @endif

                    @if($pro->fan_qty_id != null)
                    <li>
                       Fan: {{$pro->fan_qty->fan_qty}}
                    </li>
                    @else
                    @endif

                    @if($pro->storage_type_id != null)
                    <li>
                       Type: {{$pro->storage_type->storage_name}}
                    </li>
                    @else
                    @endif

                    @if($pro->storage_capacity_id != null)
                    <li>
                       Capacity: {{$pro->storage_capacity->storage_capacity}}
                    </li>
                    @else
                    @endif

                    @if($pro->storage_speed_id != null)
                    <li>
                       Speed: {{$pro->storage_speed->storage_speed_value}}
                    </li>
                    @else
                    @endif

                    @if($pro->video_output_id != null)
                    <li>
                       Video Output: {{$pro->video_output->video_output}}
                    </li>
                    @else
                    @endif

                    @if($pro->power_id != null)
                    <li>
                       Power: {{$pro->power->power_value}}
                    </li>
                    @else
                    @endif

                    @if($pro->efficiency_id != null)
                    <li>
                      Efficiency : {{$pro->efficiency->efficiency_value}}
                    </li>
                    @else
                    @endif

                    @if($pro->fan_size_id != null)
                    <li>
                      Fan : {{$pro->fan_size->fan_size}}
                    </li>
                    @else
                    @endif

                    @if($pro->key_qty_id != null)
                    <li>
                      Keys : {{$pro->key_qty->key_qty}}
                    </li>
                    @else
                    @endif

                    @if($pro->wireless_id != null)
                    <li>
                      Wireless : {{$pro->wireless->isWireless}}
                    </li>
                    @else
                    @endif

                    @if($pro->switch_id != null)
                    <li>
                      Switch : {{$pro->switch->switch_name}}
                    </li>
                    @else
                    @endif


                    @if($pro->dpi_id != null)
                    <li>
                      DPI : {{$pro->dpi->dpi_value}}
                    </li>
                    @else
                    @endif

                    @if($pro->headphone_type_id != null)
                    <li>
                      Type : {{$pro->headphone_type->headphone_type}}
                    </li>
                    @else
                    @endif

                    @if($pro->micro_id != null)
                    <li>
                      Micro : {{$pro->micro->isMicro}}
                    </li>
                    @else
                    @endif

                    @if($pro->resolution_id != null)
                    <li>
                      Resolution : {{$pro->resolution->resolution_value}}
                    </li>
                    @else
                    @endif

                    @if($pro->moniter_size_id != null)
                    <li>
                      Size : {{$pro->monitor_size->monitor_size}}
                    </li>
                    @else
                    @endif

                    @if($pro->refresh_rate_id != null)
                    <li>
                      Refresh rate : {{$pro->refresh_rate->refresh_rate_value}}
                    </li>
                    @else
                    @endif
            </ul>
            <div style="font-size:20px">Descriptions : </div>
            <div>{{$pro->product_descriptions}}</div>
            <div style="font-size:20px">Sort Descriptions : </div>
            <div>{{$pro->product_sort_descriptions}}</div>
        </div>
    </div>
</div>
@endforeach
@endsection