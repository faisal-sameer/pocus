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

            <a href="{{ route('DashboardCourse') }}" class="nav-link">
                <h3>Dashboard Course</h3>
            </a>
            <div class="w3-dropdown-hover nav-link">
                <img src="/image/arabic.png" width="50" height="50" alt="" class="nav-icon">
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a style="text-align: center" href="#" class="w3-bar-item w3-button">English</a>
                    <a style="text-align: center" href="#" class="w3-bar-item w3-button">عربي</a>
                </div>
            </div>
            <a href="{{ route('Register') }}" class="nav-link">
                <img src="/image/switch.png" width="50" height="50" alt="" class="nav-icon">
            </a>
        </nav>
    </header>
@endsection
@section('content')
    <div class="container" style="direction: ltr">
        <div class="notification-dashboard bounce-in-top">
            <h1>Create Course</h1>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <input type="number" id="inputregister" name="Name" placeholder="Capacity">
                </div>
                <div class="col-sm-4">
                    <input type="text" id="inputregister" name="Name" placeholder="Course name">
                </div>
                <div class="col-sm-4">
                    <input type="text" style="text-align: right;direction: rtl" id="inputregister" name="Name"
                        placeholder="اسم الدورة">
                </div>
            </div>
            <div class="row" style="margin-top: 5%;margin-bottom: 2%">
                <div class="col-sm-3" style="display:flex;">
                    <p id="pBill">From</p>
                    <input type="date" id="inputregister" name="from">
                </div>
                <div class="col-sm-3" style="display:flex;">
                    <p id="pBill">To</p>
                    <input type="date" id="inputregister" name="to" placeholder="إلى يوم">

                </div>
                <div class="col-sm-3">
                    <input type="text" id="inputregister" name="Name" placeholder="Location">
                </div>
                <div class="col-sm-3">
                    <input type="text" id="inputregister" name="Name" placeholder="الموقع">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="paper">
                        <div class="paper-content">
                            <textarea name="notes" placeholder="Description" style="white-space: nowrap;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="paper" style="text-align: right;direction: rtl">
                        <div class="paper-content">
                            <textarea name="notes" placeholder="الوصف" style="white-space: nowrap;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="paper" style="height: 150px;">
                        <div class="paper-content">
                            <textarea name="notes" placeholder="Target audience" style="white-space: nowrap;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="paper" style="text-align: right;direction: rtl ;height: 150px;">
                        <div class="paper-content">
                            <textarea name="notes" placeholder="الجمهور المستهدف" style="white-space: nowrap;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="paper" style="height: 150px;">
                        <div class="paper-content">
                            <textarea name="notes" placeholder="Goal" style="white-space: nowrap;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="paper" style="text-align: right;direction: rtl;height: 150px;">
                        <div class="paper-content">
                            <textarea name="notes" placeholder="الهدف" style="white-space: nowrap;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="paper">
                        <div class="paper-content">
                            <textarea name="notes" placeholder="Course Structure" style="white-space: nowrap;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="paper" style="text-align: right;direction: rtl">
                        <div class="paper-content">
                            <textarea name="notes" placeholder="هيكل الدورة" style="white-space: nowrap;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm" style="margin-left: 28% ;margin-top: 5%">
                    <button type="submit" id="Register" class="btn btn-dark" data-toggle="modal"
                        data-target="#exampl" id="btnmodel">
                        Create
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
