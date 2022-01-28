@extends('master')
@section("content")
<div class="custom-product">
    <div class="">
        <h1 class="text-center">Zawartość Koszyka</h5>
    @if(sizeof($products)>0)
        <a class="btn btn-primary btn-lg btn-block" href="ordernow">Zamów</a><br>
    <div class="row">
    @foreach ($products as $item)
    <div class="card" style="width:400px">
        <div class="item {{$item->id}}" >
            <div class="item-list">
            <img class="card-img" src="{{$item->gallery}}" >
                <div class="card-body">
                <h4 class="card-title">{{$item->name}}</h4>
                <p class="card-text">{{$item->description}}</p>
                <a href="detail/{{$item->id}}" class="btn btn-success">Zobacz</a>
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Usuń z Koszyka</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
        <a class="btn btn-primary btn-lg btn-block" href="ordernow">Zamów</a><br>
    </div>
    @endif
</div>
@endsection 

