<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #395144">
  <div class="container">
    <a class="navbar-brand" href="/">Lex Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "product") ? 'active' : '' }}" href="/product">Product</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        </li>
        @auth
        <li class="nav-item">
          <?php
          $ordered = App\Models\Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
          if(!empty($ordered)){
            $notification = App\Models\OrderDetail::where('order_id', $ordered->id)->count();
          }
        ?>
          <a href="/checkout" class="nav-link {{ ($active === "cart") ? 'active' : '' }}"><i class="bi bi-cart-fill"></i>
            @if(!empty($notification))
              <span class="position-absolute translate-middle badge rounded-pill bg-danger">{{ $notification }}
              <span class="visually-hidden">unread messages</span>
            @endif
          </span>
          </a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window"></i> Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a href="/history" class="dropdown-item"><i class="bi bi-journal-text"></i> History</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-door-open"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
        <li class="nav-item">
          <a href="/checkout" class="nav-link {{ ($active === "cart") ? 'active' : '' }}"><i class="bi bi-cart-fill"></i><span class="position-absolute translate-middle badge rounded-pill bg-danger">
            <span class="visually-hidden">unread messages</span>
          </span></a>
        </li>
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-door-closed"></i> Login</a>
        </li>
        <li class="nav-item">
          <a href="/register" class="nav-link {{ ($active === "register") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Register</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
