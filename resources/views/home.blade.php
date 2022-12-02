@extends('layouts.main')

@section('container')
@include('partials.sliders')
<h1 class="mt-5 mb-3 text-center">Trending</h1>

<div class="row justify-content-center mb-3">
  @foreach($products as $product)
  <div class="col-md-4">
    <div class="card">
      <img src="https://loremflickr.com/500/500?{{ $product->product_name }}" alt="" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"><a href="/product/order/{{ $product->product_name }}" class="text-dark">{{ $product->product_name }}</a></h5>
        <p class="card-text">
          <strong>Rp{{ number_format($product->price) }}</strong> <br>
          <strong>Stock : </strong>{{ $product->stock }} <br>
          <br>
          {{ $product->description }}
        </p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection