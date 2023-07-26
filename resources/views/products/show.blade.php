@extends('layouts.app')

@section('title','Productos')


@section('content')

<div class="container py-4">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/velas1.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/velas2.jpg')}}"" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/velas3.jpg')}}"" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <hr>
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2023/03/15/10/59/dandelion-7854275_1280.jpg" alt="">

                <div class="card-body">
                  <h4 class="card-title">Primary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">$3000</div>
              </div>

        </div>
        <div class="col">
            <div class="card border-success mb-3" style="max-width: 20rem;">

                <div class="card-body">
                  <h4 class="card-title">Success card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card border-light mb-3" style="max-width: 20rem;">

                <div class="card-body">
                  <h4 class="card-title">Light card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>

              </div>
        </div>
    </div>
</div>
@endsection
