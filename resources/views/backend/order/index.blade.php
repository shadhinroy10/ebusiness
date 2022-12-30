
@extends('layouts.backend')
@section('content')
    <!-- main content start -->
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4>Orders</h4>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Product</th>

                                <th>Price</th>

                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@if($Products->count() >0)--}}
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>
                                            <img style="width: 90px" src="{{url('upload/images', $order->product['image'])}}" alt="">
                                        </td>
                                        <td>{{$order->product['name']}}</td>
                                       {{-- <td>{{$product->slug}}</td>
                                        <td>{{$product->sku}}</td>--}}
                                        <td>{{$order->price}}</td>
                                        {{--<td>{{$product->actual_price}}</td>--}}
                                        <td>{{$order->status['name']}}</td>
                                        <td >
                                            <a href="{{route('admin.order.show', $order->id)}}" class="btn btn-info">Show </a>
                                        </td>
                                    </tr>
                                @endforeach
                            {{--@else
                                <tr>
                                    <td colspan="5" class="text-center">No Data Found</td>
                                </tr>
                            @endif--}}
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- main content end -->

@endsection

