@section('title', 'Order Details | full Surveilance')
@extends('admin.master.layout')
@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Order Details</h1>
                    <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Details
                    </p>
                </div>
                <div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card p-4">
                        <div class="card-header d-flex justify-content-between">
                             <span>
                                Invoice
                                <strong>{{ $order->created_at->format('d-M-Y') }}</strong>
                             </span>
                            <span class="float-right"> <strong>Status:</strong> {{ $order->status }}</span>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <h6 class="mb-3">Billing Address</h6>
                                    <div>
                                        <strong>{{ $order->order_billing_address->f_name.' '.$order->order_billing_address->l_name }}</strong>
                                    </div>
                                    <div>Street: {{ $order->order_billing_address->street }}</div>
                                    <div>City: {{ $order->order_billing_address->city }}</div>
                                    <div>District: {{ $order->order_billing_address->district }}</div>
                                    <div>Country: {{ $order->order_billing_address->country }}</div>
                                    <div>Zip: {{ $order->order_billing_address->zip }}</div>
                                    @if ($order->order_billing_address->company_name)
                                    <div>Company: {{ $order->order_billing_address->company_name }}</div>
                                    @endif
                                    <div>Email: {{ $order->order_billing_address->email }}</div>
                                    <div>Phone: {{ $order->order_billing_address->mobile }}</div>
                                </div>

                                <div class="col-sm-6">
                                    <h6 class="mb-3">Shipping Address</h6>
                                    <div>
                                        <strong>{{ $order->order_ship_address->f_name.' '.$order->order_ship_address->l_name }}</strong>
                                    </div>
                                    <div>Street: {{ $order->order_ship_address->street }}</div>
                                    <div>City: {{ $order->order_ship_address->city }}</div>
                                    <div>District: {{ $order->order_ship_address->district }}</div>
                                    <div>Country: {{ $order->order_ship_address->country }}</div>
                                    <div>Zip: {{ $order->order_ship_address->zip }}</div>
                                    @if ($order->order_ship_address->company_name)
                                    <div>Company: {{ $order->order_ship_address->company_name }}</div>
                                    @endif
                                    <div>Email: {{ $order->order_ship_address->email }}</div>
                                    <div>Phone: {{ $order->order_ship_address->mobile }}</div>
                                </div>
                            </div>

                            <div class="table-responsive-sm">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th>Item</th>
                                            <th class="right">Unit Cost</th>
                                            <th class="center">Qty</th>
                                            <th class="right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ( $order->order_detail as $item)
                                         <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td class="left strong">{{ $item->product_name }}</td>
                                            <td class="right">${{ $item->amount }}</td>
                                            <td class="center">{{ $item->quantity }}</td>
                                            <td class="right">${{ $item->amount * $item->quantity }}</td>
                                        </tr> 
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-5">
                                      <a href="{{ route('order.index') }}" class="btn btn-success">Back</a>
                                </div>
                                <div class="col-lg-4 col-sm-5 ml-auto">
                                    <table class="table table-clear">
                                        <tbody>
                                            <tr>
                                                <td class="left">
                                                    <strong>Subtotal</strong>
                                                </td>
                                                <td class="right">${{ $order->amount }}</td>
                                            </tr>
                                            @if ($order->coupon_amount > 0)
                                            <tr>
                                                <td class="left">
                                                    <strong>Coupon Code</strong>
                                                </td>
                                                <td class="right">{{ $order->coupon->name }}</td>
                                            </tr>
                                            @endif
                                            @if ($order->coupon_amount > 0)
                                            <tr>
                                                <td class="left">
                                                    <strong>Coupon Discount Amount</strong>
                                                </td>
                                                <td class="right">${{ $order->coupon_amount }}</td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td class="left">
                                                    <strong>Total</strong>
                                                </td>
                                                <td class="right">
                                                    <strong>${{ $order->payable_amount }}</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Content -->
        </div>
    </div> <!-- End Page Wrapper -->
@endsection
