<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner align-items-center">
      {{-- @foreach($products as $product) --}}
      <div class="carousel-item active align-items-center" >
        <img src="https://www.omen.com/content/dam/sites/omen/worldwide/laptops/2022-omen-victus-intel-2-0/21-c-1-victus-calhoun-16-80-w-lcd-mica-silver-nt-h-dcam-non-odd-win-10-core-set-front-right-copy.png" class="d-block img-fluid align-items-center" style="height: 400px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.yangcanggih.com/wp-content/uploads/2018/05/Fujfilm-X-T100-2.jpg" class="d-block img-fluid align-items-center" style="height: 400px" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://images.samsung.com/is/image/samsung/p6pim/id/sm-a135fzkjxid/gallery/id-galaxy-a13-sm-a135-sm-a135fzkjxid-531621482?$650_519_PNG$" style="height: 400px" class="d-block img-fluid align-items-center" alt="...">
      </div>
      {{-- @endforeach --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>