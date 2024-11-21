<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">StyleNtech</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="/myorders">Orders</a></li>
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/cartlist">cart({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <style>
    <style>
    /* Navbar background and text color */
    .navbar {
        background-color: #333;
        border-radius: 0;
        margin-bottom: 0;
    }

    .navbar .navbar-brand {
        color: orange !important;
        font-weight: bold;
        font-size: 24px;
    }

    .navbar .navbar-nav li a {
        color: #bbb !important;
        font-size: 16px;
    }

    /* Hover effect for links */
    .navbar .navbar-nav li a:hover {
        color: #fff !important;
        background-color: #555;
    }

    /* Search input field */
    .navbar .search-box {
        width: 250px;
        border-radius: 20px;
        padding: 5px 10px;
    }

    .navbar .navbar-form .btn {
        background-color: #f39c12;
        color: white;
        border-radius: 20px;
        border: none;
        padding: 6px 15px;
        font-size: 16px;
    }

    .navbar .navbar-form .btn:hover {
        background-color: #e67e22;
        transition: background-color 0.3s ease;
    }

    /* Cart and user links */
    .navbar .navbar-nav.navbar-right li a {
        color: orange !important;
        font-weight: bold;
    }

    /* Dropdown styles */
    .navbar .navbar-nav .dropdown-menu {
        background-color: #333;
        border: none;
        padding: 10px;
    }

    .navbar .navbar-nav .dropdown-menu li a {
        color: #bbb !important;
    }

    .navbar .navbar-nav .dropdown-menu li a:hover {
        color: #fff !important;
        background-color: #555;
    }

    /* Active link color */
    .navbar .navbar-nav .active a {
        background-color: #f39c12 !important;
        color: #fff !important;
    }
</style>

  </style>