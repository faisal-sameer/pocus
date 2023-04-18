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
            <a href="/" class="nav-link">
                <h3>Create Course</h3>
            </a>

            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <img src="/image/switch.png" width="50" height="50" alt="" class="nav-icon">
            </a>
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
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Capacity</th>
                        <th>Details</th>
                        <th>Edit</th>
                        <th>rebuild</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BASIC POCUS</td>
                        <td>30/35</td>
                        <td>
                            <lord-icon class="open-modal-btn" src="https://cdn.lordicon.com/ckatldkn.json" trigger="loop"
                                delay="2000" style="width:80px;height:50px">
                            </lord-icon>
                        </td>
                        <td>
                            <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="loop" delay="2000"
                                style="width:80px;height:50px">
                            </lord-icon>
                        </td>
                    </tr>
                    <tr>
                        <td>ADVANCE POCUS</td>
                        <td>0/0</td>
                        <td>
                            <lord-icon class="open-modal-btn" src="https://cdn.lordicon.com/ckatldkn.json" trigger="loop"
                                delay="2000" style="width:80px;height:50px">
                            </lord-icon>
                        </td>
                        <td>
                            <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="loop" delay="2000"
                                style="width:80px;height:50px">
                            </lord-icon>
                        </td>
                    </tr>

                </tbody>
            </table>



        </div>
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>This is the modal content.</p>
            </div>
        </div>
    </div>
@endsection
