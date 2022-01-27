@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset -4">
            <form action="register" method="POST">
            @csrf  
                <div class="form-group">       
                   <label for="exampleInputEmail1">Nazwa Użytkownika</label>
                   <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wprowadź nazwę">
               </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Adres Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wprowadź email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hasło</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Hasło">
                </div>
                <button type="submit" class="btn btn-primary">Zarejestruj</button>
            </form>
        </div>
    </div>
</div>
@endsection