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
           {{-- 
            <div class="w3-dropdown-hover nav-link">
                <img src="/image/arabic.png" width="50" height="50" alt="" class="nav-icon">
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a style="text-align: center" href="#" class="w3-bar-item w3-button">English</a>
                    <a style="text-align: center" href="#" class="w3-bar-item w3-button">عربي</a>
                </div>
            </div>comment --}}
            <a href="{{ route('Register') }}" class="nav-link">
                <h3>Register Course</h3>
            </a>
            <a href="{{ route('login') }}" class="nav-link">
                <h3>Log in</h3>
            </a>
            <a href="{{ route('AboutUs') }}" class="nav-link">
                <h3>about us</h3>
            </a>
            <a href="#courses" class="nav-link">
                <h3>The Courses</h3>
            </a>
        </nav>
    </header>
@endsection
@section('content')
    <div id="about" style="direction: ltr" class="container-fluid bounce-in-top ">
        <div class="row">
            <div class="col-sm-8">
                <h2>GET TO KNOW US</h2><br>
                <h4>Learn new medical skills </h4><br>
                <p>(the name of the website) is a multiple different level courses aim to help you develop the
                    skills you
                    need to properly use point of care ultrasound, integrate that knowledge into your practice
                    and helping
                    doctor to achieve their goal.
                </p>
            </div>

            <div class="col-sm-3">
                <img id="im" src="/image/p1.png" alt="">
            </div>

        </div>
    </div>



    <div id="courses" class="container-fluid  bg-grey">
        <div style="margin-bottom: 2%" class="row">
            <h1 id="htitle">Courses</h1>

        </div>

        <div class="row slideanim">
            @foreach ($all['courses'] as $course)
                <div class="col-sm-4 col-xs-12" style="padding-top: 2%">

                    <div class="flip-card">
                        <div class="flip-card-inner">

                            <div class="flip-card-front" style="background-color: #2b2b84c5">

                                <h1 style="color: white">{{ $course->title_en }}</h1>

                            </div>
                            <div class="flip-card-back" style="background-color: #2b2b84c5">
                                <h3 id="pcart" style="direction: ltr">
                                    {{ $course->description_en }}
                                </h3>
                                <button type="submit" onclick="formore( {{ $course->id }})" id="create"
                                    class="btn btn-dark" data-toggle="modal" data-target="#exampl" id="btnmodel">
                                    for more ...
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div  class="container-fluid" style="text-align: left;direction: ltr">

    <div class="notification-dashboard slideanim">
      <div class="row" style="margin-left: 3%;margin-bottom: 1%">
        <h3>
            For feedback and complaints
                </h3>
      </div>
        <div class="row">
         
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Note"rows="5" required></textarea><br>
        <div class="row">
            <div class="col-sm" style="margin-left: 28% ;margin-top: 1%">
                <button onclick="Login()" type="submit" id="Register" class="btn btn-dark" data-toggle="modal"
                    data-target="#exampl" id="btnmodel">
                    Login
                </button>
            </div>
        </div>
      </div>
    </div>
@endsection
@section('script')
    <script>
        function formore(id) {
            window.location.href = '/AboutCourse-' + id;
        }
    </script>
 
      <script>
       var x = 0;
        var images = new Array("/image/p1.png","/image/p2.jpeg");
        var i = setInterval(auto, 3000);

        function auto()
          {
            x++;
            if (x == images.length)
               x=0;
            document.getElementById('im').src=images[x];      
          }
              </script>

              
@endsection
