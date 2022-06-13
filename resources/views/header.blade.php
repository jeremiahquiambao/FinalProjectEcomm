<?php
use App\Http\Controllers\ProductController;

$total = 0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>

<nav class="navbar-color">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand">
        <img src="/images/temporary_logo.png" width="180px">
      </a>
    </div>  

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="header navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="home-format">
          <a class="home-format" href="/"><span class="glyphicon glyphicon-home"></span> Home</a>
        </li>
        <li>
          <a class="orders-format" href="/myorders"><span class="glyphicon glyphicon-tags"></span> Orders</a>
        </li>
      </ul>

      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>

        
        
        <!--Old Shopping Cart
          <a class="cart-format" href="/cartlist">Cart({{$total}})</a>
        -->

      <ul class="nav navbar-nav navbar-right">
        <li>
        <a href="/cartlist" class="cart-format">
          <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart ({{$total}})
        </a>
        </li>

        @if(Session::has('user'))

        <li class="dropdown">
          <a class="account-format" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
          <span class="caret"></span></a>
          
          <ul class="dropdown-menu">
            <li><a> {{Session::get('user')['name']}} </a></li>
            <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </li>
        @else
        <li><a class="home-format" href="/login">Login</a></li>
        <li><a class="home-format" href="/register">Register</a></li>
        @endif
      </ul> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>