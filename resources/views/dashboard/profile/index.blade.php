@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-3">
        <div class="card">
          <div class="card-body">
            <h4><i class="bi bi-person"></i> My Profile</h4>
            <table class="table">
              <tr>
                <td>Name</td>
                <td width="10">:</td>
                <td>{{ $user->name }}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $user->email }}</td>
              </tr>
              <tr>
                <td>Phone</td>
                <td>:</td>
                <td>{{ $user->phone }}</td>
              </tr>
              <tr>
                <td>Address</td>
                <td>:</td>
                <td>{{ $user->address }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12 mt-3">
        <div class="card">
          <div class="card-body">
            <h4><i class="bi bi-pencil"></i> Edit Profile</h4>
            <form action="/dashboard/profile" method="POST">
              @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ $user->name }}">
                <label for="name">Name</label>
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>        
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ $user->email }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>        
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="phone" class="form-control rounded-top @error('phone') is-invalid @enderror" id="phone" placeholder="Phone" required value="{{ $user->phone }}">
                <label for="phone">Phone</label>
                @error('phone')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>        
                @enderror
              </div>              
              <div class="form-floating">
                <textarea name="address" class="form-control rounded-top @error('address') is-invalid @enderror" id="address" placeholder="Address" required>{{ $user->address }}</textarea>
                <label for="address">address</label>
                @error('address')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>        
                @enderror
              </div>              
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>        
                @enderror
              </div>
              <button class="btn btn-primary mt-3" type="submit">Save</button>
            </form>      
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection