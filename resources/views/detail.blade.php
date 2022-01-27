@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Wróć</a>
            <h2 class="detail-title">{{$product['name']}}</h4>
            <h5 class="detail-price">Cena: {{$product['price']}}zł</h3>
            <h6 class="detail-category">Kategodia: {{$product['category']}}</h3>
            <p class="detail-text">{{$product['description']}}</p>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Dodaj do koszyka</a>
            </form>
        </div>
    </div>
</div>
@endsection