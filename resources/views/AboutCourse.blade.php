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
    <a href=""  class="nav-link"><h3>Log in</h3></a>
    <a href="/" class="nav-link"><h3>Home</h3></a>
  </nav>
</header>

@endsection
@section('content')
    <div class="container" style="direction: ltr">
      
        <div class="notification-dashboard">
            <h1>BASIC POCUS</h1>
            <div class="notification-container">
              <div class="notification shadow-drop-center" onclick="test()">
                <div class="notification-header">
                  <h3>
                    Target audience:</h3>
                </div>
                <p>Medical student, Intern, Medical and ICU resident, GP, physician and any medical professional

                </p>
            </div>
              <div class="notification shadow-drop-center">
                <div class="notification-header">
                  <h3>Time and location:

                  </h3>
                </div>
                <p>King Abdul-Aziz University hospital, Skill lab, 4th floor (July 15-16)

                </p>
              </div>
              <div class="notification shadow-drop-center" >
                <div class="notification-header">
                  <h3>Goal:

                  </h3>
                </div>
                <p>2 days intensive hands-on course on basic POCUS skills enable trainees to be ready to use POCUS and be ready to learn advance POCUS skills.
                    In this course, you’ll learn how to use point-of-care ultrasound (POCUS) Ideal for anyone who’s just starting to use POCUS</p>
              </div>
              <div class="notification shadow-drop-center" >
                <div class="notification-header">
                  <h3>Course Structure:</h3>
                </div>
             <p>
                (2 days course)
                <br>
Frist day:
<br>
8-9 Breakfast and coffee.<br>

9-10 introduction and basic knowledge about the US physics and the hardware (PP).<br>

9-10 Basic knowledge of the operation and modes(PP).<br>

10-12 hands on (how to use it).<br>

12-1 break, food and coffee.<br>

1-4 (2-4 group) heart, lung, abdomen (basic view+ hands on).
<br>
Day 2:
<br>
Hands on and image review of important dx.<br>

8-9 Breakfast and coffee.<br>

9-12 (2-4 group) lung, hands on and image.<br>

12-1 break, food and coffee.<br>

1-3 Heart, hands on and image.<br>

3-4 Exam
             </p>
             
              </div>
            </div>
            <div class="row">
              <div class="col-sm" style="margin-left: 28%">
                <button onclick="Register()" type="submit" id="Register" class="btn btn-dark" data-toggle="modal" data-target="#exampl" id="btnmodel">
                  Register Now   
                </button>
              </div>
            </div>
          </div>
    </div>
    @endsection
