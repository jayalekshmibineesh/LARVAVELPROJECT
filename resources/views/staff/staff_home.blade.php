
@extends('staff.index3')
<!DOCTYPE html>
<html>
<head>
    <title>Your App</title>
</head>
<body>
    <header>
        @auth
            <!-- <div class="top-bar">
                <div class="user-info">
                    <img src="{{ asset('storage/images'. Auth::user()->image) }}" class="img-fluid-rounded-circle" width="55">
                    <span>{{ Auth::user()->name }}</span> 
                </div>
            </div> -->
        @endauth
    </header>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
