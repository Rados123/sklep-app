
@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset -4">
            <form action="createproduct" method="POST">
                @csrf
                <div class="form-group">
                   <label for="name">Nazwa Produktu</label>
                   <input type="text" name="name" class="form-control" id="name" placeholder="Wprowadź nazwę produktu">
                </div>
                <div class="form-group">
                    <label for="price">Cena</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Wprowadź cenę">
                </div>
                <div class="form-group">
                    <label for="category">Kategoria</label>
                    <input type="text" name="category" class="form-control" id="category" placeholder="Kategoria">
                </div>
                <div class="form-group">
                    <label for="description">Opis (max 255 znaków)</label>
                    <textarea name="description" class="form-control" id="description" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="URL">Adres URL</label>
                    <input type="text" name="gallery" class="form-control" id="gallery" placeholder="Adres Url">
                </div>
                <button type="submit" class="btn btn-primary">Dodaj produkt</button>
            </form>
        </div>
    </div>
</div>
@endsection