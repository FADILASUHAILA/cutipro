
@section('content')
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="container-xxl mt-100%">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('asset/logo.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('asset/6.jpeg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('asset/3.jpeg')}}" class="d-block w-100" alt="...">
      </div>
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




<!-- content marketing  -->

<hr class="featurette-divider">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  <div class="col">
    <div class="card shadow-sm">
      <img src="{{asset('asset/images/gambar4.jpeg')}}">
      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-body-secondary">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow-sm">
      <img src="{{asset('asset/images/gambar4.jpeg')}}">
      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-body-secondary">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow-sm">
      <img src="{{asset('asset/images/gambar4.jpeg')}}">
      <div class="card-body">
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
          <small class="text-body-secondary">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  
<!-- figure content --