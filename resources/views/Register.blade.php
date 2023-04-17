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
      
      <img src="/image/cancel-button.png" alt="" id="nav-search-cancel" class="nav-icon">
    </div>
  </div>
  <nav id="nav" class="nav">
    <div id="nav-cancel" class="nav-cancel">
      <img src="/image/cancel-button.png" alt="" class="nav-icon">
    </div>
    <a href="{{ route('Login') }}"  class="nav-link"><h3>Log in</h3></a>
    <a href="/" class="nav-link"><h3>Home</h3></a>
    <a href="{{ route('AboutCourse') }}" class="nav-link"><h3>The Courses</h3></a>
  </nav>
</header>

@endsection
@section('content')
    <div class="container" style="direction: ltr">
      
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
                    <select name="Cat" class="form-select form-select-lg mb-3" style="width: 80%"
                    aria-label=".form-select-lg example">
                    <option selected value="0">Courses</option>
                  
                        <option value="1">BASIC POCUS</option>
                        <option value="2">ADVANCE POCUS </option>

                </select>
     </div>
              </div>
              <div class="row">
                <div class="col-sm" style="margin-left: 28% ;margin-top: 5%">
                  <button type="submit" id="Register" class="btn btn-dark" data-toggle="modal" data-target="#exampl" id="btnmodel">
                    Register    
                  </button>
                </div>
              </div>
        </div>
    </div>
    @endsection