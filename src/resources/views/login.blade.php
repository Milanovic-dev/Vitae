@extends('layouts.master')

@section('title', 'Login | Vitae')

@section('css_files')
    <link href="{{url('/css/login.css')}}" rel="stylesheet">
@endsection

<script>
    function socialSignIn(provider){
        window.location.href = `/auth/social/${provider}`
    }
</script>

@section('content')
<div class="bg">
        <div class="main-container">
            <div class="button-group">
                <h2 class="login-header">Sign In </h2>
                <button class="button-google" onclick="socialSignIn('google')"><span class="fa fa-google"></span> Sign In With Google</button>
                <button class="button-facebook" onclick="socialSignIn('facebook')"><span class="fa fa-facebook"></span> Sign In With Facebook</button>
                <button class="button-linkedin" onclick="socialSignIn('linkedin')"><span class="fa fa-linkedin"></span> Sign In With Linkedin</button>
                <p style="margin-bottom: 10px; margin-top: 10px">OR</p>
                <form method="POST" action="{{url('/auth/login')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input placeholder="Enter your email" name="email" type="email" style="font-family: inherit">
                    </div>
                    <div class="form-group">
                        <input placeholder="Enter your password" name="password" type="password">
                    </div>
                    <input class="button-default" type="submit" value="Sign In" style="margin-top: 15px; ; width:100%">
                    @if($message = Session::get('error'))
                        <p style="color:red; margin-top: 20px">{{$message}}</p>
                    @endif
                </form>
                <a href="#">Not registered? - Sign Up</a>
            </div>
        </div>
    </div>
@endsection