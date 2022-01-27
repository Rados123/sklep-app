@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
        <h5>Moje zamówienia</h5>
     <div class="card-deck">
    @foreach ($orders as $item)
        <div class="item {{$item->id}}" style="width:400px">
        <div class="item-list">
        <img class="card-img" src="{{$item->gallery}}"  style="width:100%">
            <div class="card-body">
            <h4 class="card-title">{{$item->name}}</h4>
            <p class="card-text">{{$item->description}}</p>
            <p class="card-text">Status przesyłki: {{$item->status}}</p>
            <p class="card-text">Adres: {{$item->address}}</p>
            <p class="card-text">Status płatności: {{$item->payment_status}}</p>
            <p class="card-text">Metoda płatności: {{$item->payment_method}}</p>

            <a href="detail/{{$item->id}}" class="btn btn-card">Zobacz</a>
            </div>
        </div>
        </div>
    @endforeach
    </div>
    <a class="btn btn-success" href="ordernow">Zamów</a><br>
    </div>
</div>
@endsection 

