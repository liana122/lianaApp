@extends('layouts.customer')
@section('contents')
<div class="container mt-3" >
    <div class="row " style="margin-top: 8rem">
        <div class="col-md-3">
            <form class="">
                <input class="form-control mr-sm-2" type="search" id="cari" placeholder="Search" aria-label="Search">
              </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <span>See All</span>
<a href="http://" class="btn btn-sm float-right text-light" style="background-color: #060606"><i class="fas fa-cart-plus fa-lg mr-2" style="color:white"></i>pesanan</a>

        </div>
    </div>
    <div class="row mt-3">
      
      @foreach ($category as $item)
          
      <div class="col-md-4">
        <div class="card" >
          <div class="row">
            <div class="col-md-10">
              <span class="text-center">No.{{$loop->iteration}}</span>
              <img class="card-img-top" id="img" src="{{asset('/photo-category/'.$item->exampleImage )}}" alt="Card image cap" height="300px">

            </div>
          </div>
            <div class="card-body">

              <h5 class="card-title">{{$item->categoryPhoto}}</h5>
              <p class="card-text">{{$item->description}}</p>
              <h5>Rp.{{$item->priceCategory}}</h5>
              <a href="#" class="btn btn-sm float-right" id="btnCart">add to cart</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    
    <div class="row mt-3">
      <div class="col-md-4">
        <span>Bingkai</span>
      </div>
    </div>
   <div class="row">
     @foreach ($product as $item)
     <div class="col-md-4">
       <div class="card" >
         <div class="row">
           <div class="col-md-10">
             <img class="card-img-top" id="img" src="{{asset('/foto-product/'.$item->image)}}" alt="Card image cap" height="300px">
           </div>
         </div>
         <div class="card-body">
           <h5 class="card-title">{{$item->description}}</h5>
           <p class="card-text">stock: {{$item->stock}}</p>
           <h5>Rp.{{$item->unitPrice}}</h5>
           <a href="#" class="btn btn-sm float-right" id="btnCart">add to cart</a>
          </div>
        </div>
      </div> 
      @endforeach
    </div>
</div>
</div>

@endsection