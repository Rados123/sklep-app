@extends('master')
@section("content")
<div class="custom-product">
<!-- <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @foreach ($products as $item) 
        <div class="item {{$item['id']==1?'active':''}}">
            <img src="{{$item['gallery']}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>

        @endforeach 
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
-->
<div class="row">
    @foreach ($products as $item) 
    <div class="card" style="width:400px">
      <div class="item {{$item['id']==1?'active':''}}" >
      <img class="card-img" src="{{$item['gallery']}}" >
          <div class="card-body">
          <h4 class="card-title">{{$item['name']}}</h4>
          <p class="card-text">{{$item['description']}}</p>
          <a href="detail/{{$item['id']}}" class="btn btn-card">Zobacz</a>
          </div>
      </div>
    </div>
    @endforeach
</div>
@endsection