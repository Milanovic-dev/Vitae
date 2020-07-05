@extends('layouts.master')

@section('title', 'Perfect Resume | Vitae')

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
        <button class="button-default" onclick="goDashboard()">Make My Resume</button>
    </div>
    <div class="welcome-templates">
        <h2 class="welcome-templates-header">Templates</h2>
        <div class="welcome-resume-preview"></div>
    </div>
    <div class="welcome-motivation">
        <h2 class="welcome-motivation-header">Create your resume with no effort.<br/> Your resume is waiting just a few click away!</h2>
        <h2 class="welcome-motivation-header">Create your resume with no effort. Your resume is waiting just a few click away!</h2>

    </div>
@endsection

<script>
    function goDashboard(){
        window.location.href = '/dashboard';
    }
</script>

