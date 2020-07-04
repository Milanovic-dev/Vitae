@extends('layouts.master')

@section('title', 'Login | Vitae')

@section('css_files')
    <link href="{{url('/css/login.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="bg">
        <div class="main-container">
            <div class="button-group">
                <h2 class="login-header">Choose how to sign in</h2>
                <button class="button-google"><span class="fa fa-google"></span> Sign In With Google</button>
                <button class="button-facebook"><span class="fa fa-facebook"></span> Sign In With Facebook</button>
                <button class="button-linkedin"><span class="fa fa-linkedin"></span> Sign In With Linkedin</button>
            </div>
        </div>
    </div>
@endsection