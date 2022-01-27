@extends('master')
@section("content")
<div class="table-buy">
<div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Łączna cena</td>
              <td>{{$total}}zł </td>
              </tr>
              <tr>
                <td>Opłata za dostawę </td>
                <td>10zł</td>
              </tr>
              <tr>
                <td>Suma do zapłaty</td>
              <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Wprowadź adres zamieszkania" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Forma Płatności</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Płatność online</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Płatność przy odbiorze</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-default">Zakup</button>
              </form>
          </div>
</div>
@endsection 

