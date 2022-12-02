@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="/history" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back</a>
    </div>
    <div class="col-md-12 mt-3">
      <div class="card">
        <div class="card-body">
          <h3>Checkout Success</h3>
          <h5>The order has been checkout, for payment please transfer to the virtual account <strong> 5147 6510 1170 0187 </strong> with nominal : <strong>Rp{{ number_format($order->total_price+$order->code) }}</strong> </h5>
        </div>
      </div>
      <div class="card mt-3">
        <div class="card-body">
          <h3><i class="bi bi-cart-fill"></i> Order Details</h3>
          @if(!empty($order))
          <p align="right">Order Date : {{ $order->date }}</p>
          <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th>No</th>
                <th style="text-align: left">Product Name</th>
                <th align="left">Total</th>
                <th style="text-align: left">Price</th>
                <th style="text-align: left">Total Price</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach($order_details as $order_detail)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $order_detail->product->product_name }}</td>
                <td>{{ $order_detail->total }}</td>
                <td style="text-align: left">Rp{{number_format($order_detail->product->price) }}</td>
                <td align="left">Rp{{ number_format($order_detail->total_price) }}</td>
              </tr>
              @endforeach
              <tr>
                <td colspan="4" align="right"><strong>Total Price :</strong></td>
                <td><strong>Rp{{ number_format($order->total_price) }}</strong></td>
              </tr>
              <tr>
                <td colspan="4" align="right"><strong>Unique Code :</strong></td>
                <td><strong>Rp{{ number_format($order->code) }}</strong></td>
              </tr>
                <td colspan="4" align="right"><strong>Price to Pay :</strong></td>
                <td><strong>Rp{{ number_format($order->code+$order->total_price) }}</strong></td>
              </tr>
            </tbody>
          </table>
          @endif
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection