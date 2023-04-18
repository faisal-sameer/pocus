@extends('welcome')
@section('navbar')
    <header class="header">
        <div class="brand">
            <div id="nav-burger" class="nav-burger is-active">
                <img src="/image/hamburger-button.png" alt="Menu" class="nav-icon">
            </div>
            <a href="/" class="brand-logo">
                <img id="imglogo" src="/image/logo.png" width="100" height="100" alt="">
            </a>
            <div id="nav-search" class="nav-search is-hidden">

<header class="header">
  <div class="brand">
    <div id="nav-burger" class="nav-burger is-active">
      <img src="/image/hamburger-button.png" alt="Menu" class="nav-icon">
    </div>
    <a href="/" class="brand-logo">
      <img id="imglogo" src="/image/logo.png" width="100" height="100" alt="">
          </a>
    <div id="nav-search" class="nav-search is-hidden">
      
      <img src="/image/cancel-button.png" alt="" id="nav-search-cancel" class="nav-icon">
    </div>
  </div>
  <nav id="nav" class="nav">
    <div id="nav-cancel" class="nav-cancel">
      <img src="/image/cancel-button.png" alt="" class="nav-icon">
    </div>
    <div class="w3-dropdown-hover nav-link">
      <img src="/image/arabic.png" width="50" height="50" alt="" class="nav-icon">
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a style="text-align: center" href="#" class="w3-bar-item w3-button">English</a>
         <a style="text-align: center" href="#" class="w3-bar-item w3-button">عربي</a>
       </div>
     </div>
    <a href="{{ route('Register') }}"  class="nav-link"><h3>Register Course</h3></a>
    <a href="/" class="nav-link"><h3>Home</h3></a>
  
  </nav>
</header>

@endsection
@section('content')
    <div class="container" style="direction: ltr">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="notification-dashboard bounce-in-top">
                <h1>Log In</h1>
                <hr>
                <div class="row" id="rowLog">
                    <div class="col-sm-6">
                        <input type="text" id="inputregister" name="email" placeholder="Enter your Email">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" id="inputregister" name="password" placeholder="Enter your Password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm" style="margin-left: 28% ;margin-top: 5%">
                        <button onclick="Login()" type="submit" id="Register" class="btn btn-dark" data-toggle="modal"
                            data-target="#exampl" id="btnmodel">
                            Login
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
