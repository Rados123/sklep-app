@extends('master')
@section("content")
<div class="custom-product">

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