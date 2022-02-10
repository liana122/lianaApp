@extends('layouts.customer')
@section('contents')
<div class="container mt-3" >
    <div class="row" style="margin-top: 4rem">
        <div class="col-md-3">
            <form class="">
                <input class="form-control mr-sm-2" type="search" id="cari" placeholder="Search" aria-label="Search">
              </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <span>See All</span>
<a href="http://" class="btn btn-sm float-right"><i class="fas fa-cart-plus fa-lg mr-2" style="color:#060606"></i>pesanan</a>

        </div>
    </div>
    <div class="row mt-3">
    <div class="col-md-4">
        <div class="card" >
            <img class="card-img-top" id="img" src="{{asset('/foto/logo/logo.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h5>Rp.$5</h5>
              <a href="#" class="btn btn-sm float-right" id="btnCart">add to cart</a>
            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card" >
            <img class="card-img-top" id="img" src="{{asset('/foto/logo/logo.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h5>Rp.$5</h5>
              <a href="#" class="btn btn-sm float-right" id="btnCart">add to cart</a>
            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card" >
            <img class="card-img-top" id="img" src="{{asset('/foto/logo/logo.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h5>Rp.$5</h5>
              <a href="#" class="btn btn-sm float-right" id="btnCart">add to cart</a>
            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card rounded-3">
            <img class="card-img-top" id="img" src="{{asset('/foto/logo/logo.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h5>Rp.$5</h5>
              <a href="#" class="btn btn-sm float-right" id="btnCart">add to cart</a>
            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card" >
            <img class="card-img-top" id="img" src="{{asset('/foto/logo/logo.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h5>Rp.$5</h5>
              <a href="#" class="btn btn-sm float-right" id="btnCart">add to cart</a>
            </div>
          </div>
    </div>
    <div class="col-md-4">
        <div class="card" >
            <img class="card-img-top" id="img" src="{{asset('/foto/logo/logo.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h5>Rp.$5</h5>
              <a href="#" class="btn btn-sm float-right" id="btnCart">add to cart</a>
            </div>
          </div>
    </div>
</div>
</div>

@endsection