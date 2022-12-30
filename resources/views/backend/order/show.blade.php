
@extends('layouts.backend')
@section('content')
    <!-- main content start -->
    {{--<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Order Details</h4>
                </div>
                <div class="card-body">


                   <p>Product: {{$order->product['name']}}</p>
                    <p>Order Price: {{$order->price}}</p>
                    <p>Product Order: {{$order->product['price']}}</p>

                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <div class="form-group">
                            <label for="">Status</label>
                            <select class="form-control" name="status_id" id="status_id">
                                @foreach($statuses as $status)
                                    <option value="{{$status->id}}" {{$status->id==$order->status_id ? 'selected' : ''}}>{{$status->name}}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-primary mt-3">Update Status</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>--}}

    <div class="row" >

        <div class="invoice">
            <a role="button" class="btn btn-info" href="#" style="float: right;">Invoice</a>
        </div>

    </div>

    <br>
    <div class="row-fluid sortable">
        <div class="box span6">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Information</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Customer Mobile No</th>


                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Asif</td>
                        <td class="center">xxxxxxxxxxx</td>


                    </tr>


                    </tbody>
                </table>

            </div>
        </div><!--/span-->




        <div class="box span6">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping Details</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Shipping Address</th>
                        <th>Mobile No</th>
                        <th>Email Address</th>
                        <th>Payment Method</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>mr A</td>
                        <td class="center">Dhaka</td>
                        <td class="center">xxxxxxxx</td>
                        <td class="center">test@test.com</td>
                        <td class="center">Cash</td>

                    </tr>



                    </tbody>
                </table>


            </div>
        </div><!--/span-->




        <div class="box span12" style="margin-left: auto;">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Order Details</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>Product price</th>
                        <th>Quantity</th>
                        <th>Sub Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td class="">{{$order->product['name']}}</td>
                        <td class="center">{{$order->product['price']}}</td>
                        <td class="center">2</td>
                        <td class="center"> &#2547; 100</td>
                    </tr>

                    </tbody>

                    <tfoot>
                    <tr>
                        <td colspan="4" style="font-size: 20px;font-weight: 521;text-align: right; color: red"> Total Amount to pay</td>
                        <td><strong style="font-size: 20px; color: #007cff;">&#2547; 100 </strong></td>
                    </tr>
                    </tfoot>
                </table>


            </div>
        </div><!--/span-->

        <form action="" method="POST">
            @csrf
            <input type="hidden" name="order_id" value="{{$order->id}}">
            <div class="form-group">
                <label for="">Status</label>
                <select class="form-control" name="status_id" id="status_id">
                    @foreach($statuses as $status)
                        <option value="{{$status->id}}" {{$status->id==$order->status_id ? 'selected' : ''}}>{{$status->name}}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary mt-3">Update Status</button>
            </div>
        </form>

    </div><!--/row-->
@endsection

@section('scripts')


@endsection
