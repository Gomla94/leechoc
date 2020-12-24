@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Order Details
    </div>
    <div class="card-body">
        <ul class="list-group">
                <li class="list-group-item">
                    <div>
                        User Name: <strong>{{ $order->user_name }}</strong>
                    </div>
                    <div>
                        User Phone: <strong>{{ $order->user_phone }}</strong>
                    </div>
                    <div>
                        User Address: <strong>{{ $order->user_address }}</strong>
                    </div>
                    <div>
                        From: <strong>{{ $order->created_at->toDateString() }}</strong>
                    </div>
                    <ul class="list-group">
                    <?php $total = 0; ?>
                        @foreach($order_details as $order)
                        <li class="list-group-item">
                            <div>
                                Product Name: <strong>{{ $order->product_name }}</strong>
                            </div>
                            <div>
                                Product Price: <strong>{{ $order->product_price }}</strong>
                            </div>
                            <div>
                                Quantity: <strong>{{ $order->quantity }}</strong>
                            </div>
                            <div>
                                Total: <strong>{{ $order->total }}</strong>
                            </div>
                            <?php $total+=$order->total; ?>
                        </li>
                        @endforeach
                    </ul>

                    <strong style="float:right">Sub Total: <?php echo $total; ?> ريال</strong>
                    
                    
                </li>
        </ul>
        
    </div>
</div>
@endsection
