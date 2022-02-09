@extends('layouts.main')

@section('container')

{{-- header --}}
<div class="row mb-4 kk mmx">
  <div class="col-lg-2 p-0" style="border-right: .5px solid rgb(221, 221, 221)">
    <ul class="navbar-nav">
      <li class="nav-item py-2 category-h"> Accessories </li>
      <li class="nav-item py-2 category-h"> Adult clothes </li>
      <li class="nav-item py-2 category-h"> Kids clothes </li>
      <li class="nav-item py-2 category-h"> Cosmetics </li>
      <li class="nav-item py-2 category-h"> Electronic </li>
      <li class="nav-item py-2 category-h"> Tickets and Holidays </li>
    </ul>
  </div>
  <div class="col-lg-7 p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/800x289?random" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/800x289?random" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/800x289?random" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="col-lg-3 p-0">
     <div class="row py-2 px-2 pt-3">
       <div class="col-lg-4">
         <img src="https://source.unsplash.com/60x60?cosmetics" alt="" class="d-block hot w-100">
         <p class="text-muted text-center" style="font-size:12px">3.800.000,-</p>
       </div>
       <div class="col-lg-4">
         <img src="https://source.unsplash.com/60x60?skin-care" alt="" class="d-block hot w-100">
         <p class="text-muted text-center" style="font-size:12px">7.550.000,-</p>
       </div>
       <div class="col-lg-4">
         <img src="https://source.unsplash.com/60x60?computer" alt="" class="d-block hot w-100">
         <p class="text-muted text-center" style="font-size:12px">25.000.000,-</p>
       </div>
       <div class="col-lg-4">
         <img src="https://source.unsplash.com/60x60?shoe" alt="" class="d-block hot w-100">
         <p class="text-muted text-center" style="font-size:12px">2.000.000,-</p>
       </div>
       <div class="col-lg-4">
         <img src="https://source.unsplash.com/60x60?dress" alt="" class="d-block hot w-100">
         <p class="text-muted text-center" style="font-size:12px">2.300.000,-</p>
       </div>
       <div class="col-lg-4">
         <img src="https://source.unsplash.com/60x60?motorcycle" alt="" class="d-block hot w-100">
         <p class="text-muted text-center" style="font-size:12px">640.000.000,-</p>
       </div>
     </div>
  </div>
</div>



{{-- content --}}
  <div class="row mb-4">
    <div class="col-lg-3 kk position-relative rounded">
     <div class="row">
       <p class="fs-5 text-center">Hot Brands</p>
       <div class="col d-flex justify-content-evenly align-items-evenly flex-wrap">
         <button class="btn hot-brand hot text-light mx-1 my-1">Hammer</button>
         <button class="btn hot-brand hot text-light mx-1 my-1">Phenomenal</button>
         <button class="btn hot-brand hot text-light mx-1 my-1">Hassenda</button>
         <button class="btn hot-brand hot text-light mx-1 my-1">Triset</button>
         <button class="btn hot-brand hot text-light mx-1 my-1">Nevada</button>
         <button class="btn hot-brand hot text-light mx-1 my-1">3Second</button>
         <button class="btn hot-brand hot text-light mx-1 my-1">Greenlight</button>
         <button class="btn hot-brand hot text-light mx-1 my-1">Osella</button>
         <button class="btn hot-brand hot text-light mx-1 my-1">Lea</button>
         <button class="btn hot-brand hot text-light mx-1 my-1">Executive</button>
         <button class="btn hot-brand hot text-light mx-1 my-1">Minimal</button>
       </div>
     </div>
     <div class="row">
       <div class="col border-top mt-2 pt-3">
         {{-- satu baris --}}
         <div class="row mb-3">
          <div class="d-flex mb-1" style="margin-left: 20px">
            <img src="https://source.unsplash.com/40x40?person" alt="" class="rounded-circle me-2"> 
            <small class="text-muted" style="line-height: 40px;">nama toko</small>
          </div>
           <div class="d-flex justify-content-evenly">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot"> 
           </div>
         </div>
         {{-- end --}}
         {{-- satu baris --}}
         <div class="row mb-3">
          <div class="d-flex mb-1" style="margin-left: 20px">
            <img src="https://source.unsplash.com/40x40?person" alt="" class="rounded-circle me-2"> 
            <small class="text-muted" style="line-height: 40px;">nama toko</small>
          </div>
           <div class="d-flex justify-content-evenly">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot"> 
           </div>
         </div>
         {{-- end --}}
         {{-- satu baris --}}
         <div class="row mb-3">
          <div class="d-flex mb-1" style="margin-left: 20px">
            <img src="https://source.unsplash.com/40x40?person" alt="" class="rounded-circle me-2"> 
            <small class="text-muted" style="line-height: 40px;">nama toko</small>
          </div>
           <div class="d-flex justify-content-evenly">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot"> 
           </div>
         </div>
         {{-- end --}}
         {{-- satu baris --}}
         <div class="row mb-3">
          <div class="d-flex mb-1" style="margin-left: 20px">
            <img src="https://source.unsplash.com/40x40?person" alt="" class="rounded-circle me-2"> 
            <small class="text-muted" style="line-height: 40px;">nama toko</small>
          </div>
           <div class="d-flex justify-content-evenly">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot"> 
           </div>
         </div>
         {{-- end --}}
         {{-- satu baris --}}
         <div class="row mb-3">
          <div class="d-flex mb-1" style="margin-left: 20px">
            <img src="https://source.unsplash.com/40x40?person" alt="" class="rounded-circle me-2"> 
            <small class="text-muted" style="line-height: 40px;">nama toko</small>
          </div>
           <div class="d-flex justify-content-evenly">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot"> 
           </div>
         </div>
         {{-- end --}}
         {{-- satu baris --}}
         <div class="row mb-3">
          <div class="d-flex mb-1" style="margin-left: 20px">
            <img src="https://source.unsplash.com/40x40?person" alt="" class="rounded-circle me-2"> 
            <small class="text-muted" style="line-height: 40px;">nama toko</small>
          </div>
           <div class="d-flex justify-content-evenly">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot">
             <img src="https://source.unsplash.com/100x100?computer" alt="" class="hot"> 
           </div>
         </div>
         {{-- end --}}
       </div>
     </div>
    </div>
    <div class="col-lg-9 kk kk2 position-relative rounded">
      <div class="row mt-2">
        @foreach ($products as $product)
        <div class="col-lg-3 mb-2">
            <div class="card shadow">
                <img src="https://source.unsplash.com/1000x500?{{ $product->category->title }}" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
                <div class="card-body">
                  <h5 class="card-title fs-6">{{ $product->title }}</h5>
                 <p class="text-muted fs-6">Rp. {{ currency_conversion($product->price) }},-</p>
                  <a href="#" class="badge bg-primary text-decoration-none">Buy</a>
                  <a href="#" class="badge bg-success text-decoration-none"><i class="bi bi-bag-plus" style="font-size: 15px;"></i> Add</a>
                  <a href="#" class="badge bg-danger text-decoration-none"><i class="bi bi-backspace-reverse" style="font-size: 15px"></i></a>
                </div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="container d-flex justify-content-center mt-3">
        {{ $products->links() }}
      </div>
    </div>
  </div>

{{-- end content --}}
<div class="row mb-5">
  <p class="fs-5 text-center">Other products</p>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-2 mb-2">
    <div class="card pb-0">
      <div class="card shadow">
        <img src="https://source.unsplash.com/1000x500?random" class="card-img-top hot" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal" >
        <div class="card-body p-0 d-flex flex-column px-4">
         <p class="text-muted fs-6 text-center m-0">Rp. 400.000,-</p>
         <p class="badge bg-success text-center">More Info</p>
        </div>
      </div>
    </div>
  </div>

</div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="https://source.unsplash.com/1000x500?computer" class="img-fluid" alt="...">
        </div>
      </div>
    </div>
  </div>
@endsection