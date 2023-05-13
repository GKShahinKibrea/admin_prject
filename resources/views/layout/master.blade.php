@include('layout.header')
<div class="main_div">
    <div class="header">
    </div>
    <div class="navbar">
        <div class="navbar_left">
        <ul>
            <li><a href="{{ url('/user') }}">User</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>
        </div>
        <div class="navbar_right">
            @yield('content')
        </div>
    </div>
@include('layout.footer')