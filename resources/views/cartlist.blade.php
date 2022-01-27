@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
        <h5>Zawartość Koszyka</h5>
        <a class="btn btn-success" href="ordernow">Zamów</a><br>
    <div class="card-deck">
    @foreach ($products as $item)
        <div class="item {{$item->id}}" style="width:400px">
        <div class="item-list">
        <img class="card-img" src="{{$item->gallery}}"  style="width:100%">
            <div class="card-body">
            <h4 class="card-title">{{$item->name}}</h4>
            <p class="card-text">{{$item->description}}</p>
            <a href="detail/{{$item->id}}" class="btn btn-card">Zobacz</a>
            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Usuń z Koszyka</a>
            </div>
        </div>
        </div>
    @endforeach
    </div>
    <a class="btn btn-success" href="ordernow">Zamów</a><br>
    </div>
</div>
@endsection 

