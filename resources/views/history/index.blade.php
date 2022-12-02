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
          <h3><i class="bi bi-journal-text"></i> History</h3>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Date</th>
                <th>Status</th>
                <th>Total Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach($orders as $order)
              <tr>
                <td>{{ $no }}</td>
                <td>{{ $order->date }}</td>
                <td>
                  @if($order->status == 1)
                  Ordered and haven't paid yet
                  @else
                  already paid
                  @endif
                </td>
                <td>Rp{{ number_format($order->total_price+$order->code) }}</td>
                <td>
                  <a href="/history/{{ $order->id }}" class="btn btn-primary"><i class="bi bi-info-lg"></i> Detail</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection