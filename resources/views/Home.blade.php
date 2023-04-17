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
    <a href="{{ route('Register') }}"  class="nav-link"><h3>Register Course</h3></a>
     <a href="{{ route('Login') }}"  class="nav-link"><h3>Log in</h3></a>
    <a href="#about" class="nav-link"><h3>about us</h3></a>
    <a href="#courses" class="nav-link"><h3>The Courses</h3></a>
  </nav>
</header>

@endsection
@section('content')
<div id="about" style="direction: ltr" class="container-fluid bounce-in-top ">
    <div class="row">
        <div class="col-sm-8">
            <h2>GET TO KNOW US</h2><br>
            <h4>Learn new medical skills  </h4><br>
            <p>(the name of the website) is a multiple different level courses aim to help you develop the skills you need to properly use point of care ultrasound, integrate that knowledge into your practice and helping doctor to achieve their goal. 
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
           
      <div class="col-sm-4 col-xs-12">
      
        <div class="flip-card">
          <div class="flip-card-inner">
        
                <div class="flip-card-front" style="background-color: #2b2b84c5">
                
                  <h1 style="color: white">BASIC POCUS</h1>
                
                </div>
                <div class="flip-card-back" style="background-color: #2b2b84c5">
                    <h3 id="pcart" >
                        In this course, you’ll learn how to use POCUS Ideal for anyone who’s just starting to use POCUS
                                    For more information
                    </h3>
                    <button  
                   type="submit"  onclick="formore()" id="create" class="btn btn-dark" data-toggle="modal" data-target="#exampl" id="btnmodel">
                      for more ...
                    </button>
                </div>
              </div>      
            </div>     
          </div>
          
      <div class="col-sm-4 col-xs-12 " >
        
  <div class="flip-card">
    <div class="flip-card-inner">
  
          <div class="flip-card-front" style="background-color: #2b2b84c5">
          
            <h1  style="color: white">ADVANCE POCUS</h1>
          
          </div>
          <div class="flip-card-back" style="background-color: #2b2b84c5">
          
            
      <button style="margin-top: 20%" type="button" id="create" class="btn btn-dark" data-toggle="modal" data-target="#exampl" id="btnmodel">
       Comming soon 
        </button>
      
      
  
          </div>
        </div>      
      </div>     
    </div>
       </div>
  </div>
  @endsection
   