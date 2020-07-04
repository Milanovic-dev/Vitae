@extends('layouts.master')

@section('title', 'Welcome')

@section('css_files')
    <link href="{{url('/css/welcome.css')}}" rel="stylesheet">
@endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="welcome-header">
        <h1 class="welcome-header-title">Land the job you want. <br/> Create a perfect resume. 100% free.</h1>
        <div class="welcome-header-subtitle">Your resume needs to be <b>short</b>, <b>clean</b> and <b>readable</b>.<br/>Create one using one of our carefully crafted templates.</div>
        <button class="button-default">Make My Resume</button>
    </div>
    <div class="welcome-templates">
        <h2 class="welcome-templates-header">Templates</h2>
    </div>
@endsection


