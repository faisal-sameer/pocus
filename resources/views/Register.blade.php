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
    <a href="{{ route('login') }}"  class="nav-link"><h3>Log in</h3></a>
    <a href="/" class="nav-link"><h3>Home</h3></a>
 
  </nav>
</header>

@endsection
@section('content')
    <div class="container" style="direction: ltr">
        <form method="POST" action="{{ route('RegisterTC') }}">
            @csrf
            <div class="notification-dashboard bounce-in-top">
                <h1>Register</h1>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <input type="text" id="inputregister" name="Name" placeholder="Enter your name">
                    </div>
                    <div class="col-sm-3">
                        <input inputmode="numeric" id="inputregister" name="phone" placeholder="Enter your phone" />
                    </div>
                    <div class="col-sm-3">
                        <input type="text" id="inputregister" name="Email" placeholder="Enter your Email">
                    </div>
                    <div class="col-sm-3">
                        <select name="course" class="form-select form-select-lg mb-3" style="width: 80%"
                            aria-label=".form-select-lg example">
                            <option disabled selected value="0">Courses</option>

                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title_en }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm" style="margin-left: 28% ;margin-top: 5%">
                        <button type="submit" id="Register" class="btn btn-dark" data-toggle="modal" data-target="#exampl"
                            id="btnmodel">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
