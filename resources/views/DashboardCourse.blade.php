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

            <a href="{{ route('CreateCourse') }}" class="nav-link">
                <h3>Create Course</h3>
            </a>
            <div class="w3-dropdown-hover nav-link">
                <img src="/image/arabic.png" width="50" height="50" alt="" class="nav-icon">
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a style="text-align: center" href="#" class="w3-bar-item w3-button">English</a>
                    <a style="text-align: center" href="#" class="w3-bar-item w3-button">عربي</a>
                </div>
            </div>
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <img src="/image/switch.png" width="50" height="50" alt="" class="nav-icon">
            </a>
        </nav>
    </header>


    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </nav>
    </header>
@endsection
@section('content')
    <div class="container" style="direction: ltr">
        <div class="notification-dashboard bounce-in-top">
            <h1>Dashboard Course</h1>
            <hr>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Capacity</th>
                            <th>Details</th>
                            <th>Edit</th>
                            <th>Create</th>
                            <th>Hidden</th>
                            <th>Remove</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BASIC POCUS</td>
                            <td>30/35</td>
                            <td>
                                <lord-icon class="open-modal-btn" src="https://cdn.lordicon.com/ckatldkn.json"
                                    trigger="loop" delay="2000" style="width:80px;height:50px">
                                </lord-icon>
                            </td>
                            <td>
                                <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="loop" delay="2000"
                                    style="width:80px;height:50px">
                                </lord-icon>
                            </td>
                            <td>
                                <lord-icon src="https://cdn.lordicon.com/rfbqeber.json" trigger="loop" delay="2000"
                                    style="width:80px;height:50px">
                                </lord-icon>
                            </td>
                            <td>
                                <img id="imglogo" src="/image/hidden.png" width="50" height="30" alt="">
                            </td>
                            <td>
                                <img id="imglogo" src="/image/remove.png" width="50" height="30" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td>ADVANCE POCUS</td>
                            <td>0/0</td>
                            <td>
                                <lord-icon class="open-modal-btn" src="https://cdn.lordicon.com/ckatldkn.json"
                                    trigger="loop" delay="2000" style="width:80px;height:50px">
                                </lord-icon>
                            </td>
                            <td>
                                <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="loop" delay="2000"
                                    style="width:80px;height:50px">
                                </lord-icon>
                            </td>
                            <td>
                                <lord-icon src="https://cdn.lordicon.com/rfbqeber.json" trigger="loop" delay="2000"
                                    style="width:80px;height:50px">
                                </lord-icon>
                            </td>
                            <td>
                                <img id="imglogo" src="/image/hidden.png" width="50" height="30" alt="">
                            </td>
                            <td>
                                <img id="imglogo" src="/image/remove.png" width="50" height="30"
                                    alt="">
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>


        </div>
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="notification-dashboard">
                    <h1>BASIC POCUS</h1>
                    <div class="notification-container">
                        <div class="notification shadow-drop-center">
                            <div class="notification-header">
                                <h3>
                                    Capacity:</h3>
                            </div>
                            <p>35

                            </p>
                        </div>
                        <div class="notification shadow-drop-center">
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
                        <div class="notification shadow-drop-center">
                            <div class="notification-header">
                                <h3>Goal:

                                </h3>
                            </div>
                            <p>2 days intensive hands-on course on basic POCUS skills enable trainees to be ready to use
                                POCUS and be ready to learn advance POCUS skills.
                                In this course, you’ll learn how to use point-of-care ultrasound (POCUS) Ideal for anyone
                                who’s just starting to use POCUS</p>
                        </div>
                        <div class="notification shadow-drop-center">
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

                </div>
            </div>
        </div>
    </div>
@endsection
