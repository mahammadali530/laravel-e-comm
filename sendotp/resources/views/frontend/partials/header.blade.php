<?php
use App\Http\Controllers\FrontendController;
$total = 0;
if (Session::has('user')) {
$total= FrontendController::cartitems();
}
?>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">E-Comm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Order</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <li>
           {{-- // <button type="button" class="btn btn-success">Add To Cart({{$total}})</button> --}}
            <a href="cartlist" class="btn btn-success">Add To Cart({{$total}})</a>
        </li>
        @if(Session::has('user'))
        <li class="nav-item dropdown">
          <a class="btn btn-danger" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Session::get('user')['name'] }}
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="logoutt">Logout</a></li>
             </ul>
        </li>
        @else
        <li>
          <a class="btn btn-warning" href="login">Login</a>
        </li>
        <li>
          <a class="btn btn-info" href="Register">Register</a>
        </li>
        @endif
      </div>
  </nav>