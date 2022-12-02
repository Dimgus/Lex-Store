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
          <div class="row">
            <div class="col-md-6">
              <img src="https://loremflickr.com/500/500?{{ $products->product_name }}" alt="" class="img-fluid" style="width: 100%">
            </div>
            <div class="col-md-6 mt-5">
              <h2>{{ $products->product_name }}</h2>
              <table class="table">
                <tbody>
                  <tr>
                    <td><strong>Price</strong>
                    </td>
                    <td>
                      :
                    </td>
                    <td><strong>Rp{{ number_format($products->price) }}</strong>
                    </td>
                  </tr>
                  <tr>
                    <td>Stock
                    </td>
                    <td>
                      :
                    </td>
                    <td>
                      {{ number_format($products->stock) }}
                    </td>
                  </tr>
                  <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td>{{ $products->description }}</td>
                  </tr>
                    <tr>
                      <td>Orders Quantity</td>
                      <td>:</td>
                      <td>
                        <form action="/product/order/{{ $products->product_name }}" method="POST">
                          @csrf
                        <input type="text" name="order_quantity" id="" class="form-control" required>
                        <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-cart"></i> Add to Cart</button>
                      </form>
                      </td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection