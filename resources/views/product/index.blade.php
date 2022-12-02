@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    @foreach($products as $product)
      <div class="col-md-4">
        <div class="card">
          <img src="{{ $product->images }}" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{ $product->product_name }}</h5>
            <p class="card-text">
              <strong>Rp{{ number_format($product->price) }}</strong> <br>
              <strong>Stock : </strong>{{ $product->stock }} <br>
              <br>
              {{ $product->description }}
            </p>
            <a href="/product/order/{{ $product->product_name }}" class="btn btn-primary"><i class="bi bi-cart4"></i> Order</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection