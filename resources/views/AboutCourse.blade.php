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
            <div class="w3-dropdown-hover nav-link">
                <img src="/image/arabic.png" width="50" height="50" alt="" class="nav-icon">
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a style="text-align: center" href="#" onclick="setLanguage('en')" class="w3-bar-item w3-button">English</a>
                    <a style="text-align: center" href="#" onclick="setLanguage('ar')" class="w3-bar-item w3-button">عربي</a>
                </div>
            </div>
            <a href="{{ route('login') }}" class="nav-link">
                <h3>Log in</h3>
            </a>
            <a href="/" class="nav-link">
                <h3>Home</h3>
            </a>
        </nav>
    </header>
@endsection
@section('content')
    <div class="container"  style="direction: ltr">

        <div class="notification-dashboard">
            <h1>{{ $course->title_en }}</h1>
            <div class="notification-container">
                <div class="notification shadow-drop-center" onclick="test()">
                    <div class="notification-header">
                        <h3>
                            Target audience:</h3>
                    </div>
                    <p>{{ $course->target_en }}

                    </p>
                </div>
                <div class="notification shadow-drop-center">
                    <div class="notification-header">
                        <h3>Time and location:

                        </h3>
                    </div>
                    <p>{{ $course->location_en }} ({{ date('d F Y', strtotime($course->time)) }} )

                    </p>
                </div>
                <div class="notification shadow-drop-center">
                    <div class="notification-header">
                        <h3>Goal:

                        </h3>
                    </div>
                    <p>
                        {!! nl2br(e($course->goal_en)) !!}

                    </p>
                </div>
                <div class="notification shadow-drop-center">
                    <div class="notification-header">
                        <h3>Course Structure:</h3>
                    </div>
                    <p>
                        {!! nl2br(e($course->Structure_en)) !!}

                    </p>

                </div>
                <div class="notification shadow-drop-center">
                    <div class="notification-header">
                        <h3>seats :</h3>
                    </div>
                    <p>
                        {{ $course->seats }}/{{ $course->students->count() }} seats .

                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-sm" style="margin-left: 28%">
                    <button onclick="Register()" type="submit" id="Register" class="btn btn-dark" data-toggle="modal"
                        data-target="#exampl" id="btnmodel">
                        Register Now
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
