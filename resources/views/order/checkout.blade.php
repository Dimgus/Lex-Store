@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="/product" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back</a>
    </div>
    <div class="col-md-12 mt-3">
      <div class="card">
        <div class="card-body">
          <h3><i class="bi bi-cart-fill"></i> Checkout</h3>
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
                <th style="text-align: left">Action</th>
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
                <td style="text-align: left">Rp{{ number_format($order_detail->total_price) }}</td>
                <td>
                  <form action="/checkout/{{ $order_detail->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                      <i class="bi bi-trash align-text-bottom" style="align-items: center"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
              <tr>
                <td colspan="4" align="right"><strong>Total Price :</strong></td>
                <td><strong>{{ number_format($order->total_price) }}</strong></td>
                <td>
                  <a href="/confirm-checkout" class="btn btn-success"><i class="bi bi-cart-fill"></i> Checkout</a>
                </td>
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