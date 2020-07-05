<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="{{url('/js/app.js')}}"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{url('/css/app.css')}}" rel="stylesheet">
        <link href="{{url('/css/header.css')}}" rel="stylesheet">
        @yield('css_files')
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-brand" onclick="goHome()">Vitae</div>
            <div class="navbar-links">
                <a class="navbar-option" href="/">Home</a>
                <a class="navbar-option" href="/dashboard">Create</a>
                <a class="navbar-option" href="/templates">Templates</a>
                <a class="navbar-option" href="/pricing">Pricing</a>
                <span class="separator"></span>
                @if(!isset(Auth::user()->email))
                    <a class="navbar-option" href="/login" style="margin-right: 20px">Sign In</a>
                @else
                    <a class="navbar-option" href="/dashboard" style="margin-right: 20px">{{ Auth::user()->name }}</a>
                @endif
            </div>
            <div onclick="callMenu()" class="navbar-hamburger">
                <img width="48" src="{{ url('hamburger_menu.png') }}"></img>
            </div>
        </div>
        <div class="hamburger-menu">
            <a href="/" class="hamburger-option" style="flex:0.2">
                Home
            </a>
            <a href="/dashboard" class="hamburger-option">
                Create
            </a>
            <a href="/templates" class="hamburger-option">
                Templates
            </a>
            <a href="/pricing" class="hamburger-option">
                Pricing
            </a>
            @if(!isset(Auth::user()->email))
                <a href="/login" class="hamburger-option">
                    Sign In
                 </a>
            @else
                <a class="hamburger-option" href="/dashboard">{{ Auth::user()->name }}</a>
            @endif
        </div>
        <main>
            @yield('content')
        </main>
    </body>
</html>

<script>
    function goHome(){
        window.location.href = '/';
    }

    async function callMenu(){
        const h = $('.hamburger-menu').css('height');
        if(h != '0px'){
            $('.hamburger-menu').css('height', 0);
        } else {
            $('.hamburger-menu').css('height', 400);
        }
    }
</script>
