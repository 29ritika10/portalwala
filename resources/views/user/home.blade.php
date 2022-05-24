@extends('user.base')

@section('content')
    
  <div class="container my-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="..." class="d-block w-100" alt="...">
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
          <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Services
              </a>
              <a href="#" class="list-group-item list-group-item-action">electric bill</a>
              <a href="#" class="list-group-item list-group-item-action">dth recharge</a>
              <a href="#" class="list-group-item list-group-item-action">novopay</a>
              <a href="#" class="list-group-item list-group-item-action">bharatpay</a>
              <a href="#" class="list-group-item list-group-item-action">googlepay</a>
              <a href="#" class="list-group-item list-group-item-action">mobile recharge</a>
              <a href="#" class="list-group-item list-group-item-action">aadhar payment</a>
              
            </div>
             
            
        </div>
        <div class="col-lg-9">
            <div class="row">
              @foreach ($portals as $item)
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                      <img src="">
                      <h1>{{$item->title}}</h1>
                      <p>{{$item->description}}</p>
                      <p>{{$item->tags}}</p>
                      <p>{{$item->price}}</p>
                      <p>{{$item->image}}</p>
                      <button class="btn btn-success btn-sm">apply</button>
                  </div>
              </div>
              </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
  
@endsection