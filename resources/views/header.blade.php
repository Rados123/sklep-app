<?php
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total= ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Sklep internetowy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
           
      <li class="nav-item">
        
        @if(Session::has('user'))
        <li class="nav-item">
          <a class="nav-link" href="/myorders">Zamówienia</a>
        </li> 
        <a class="nav-link" href="/cartlist">Koszyk({{$total}})</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>  
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/register">Rejestracja</a>
        </li>
        @endif
    </ul>
  </div>
</nav>