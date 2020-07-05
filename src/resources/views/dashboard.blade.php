@extends('layouts.master')

@section('title', 'Dashboard | Vitae')

@section('css_files')
    <link href="css/dashboard.css" rel="stylesheet">
@endsection

@section('content')
    <div class="dashboard">
        <div class="dashboard-header">
            <h2 class="dashboard-title">Dashboard</h2>
            <div class="dashboard-new"><button class="button-default" style="line-height: 35px" onclick="goCreate()">+New</button></div>
        </div>
        <div class="dashboard-separator"></div>
        <div class="dashboard-main">
            <div class="dashboard-resumes">
            My Resumes ({{ $resumeCount }})
        </div>
            <section style="margin-top: 30px">
            <div class="resume-row">
                <div class="resume-item">
                    <div class="resume-preview" onclick="goCreate()"><div style="text-align: center;">Create</div></div>
                </div>
                <div class="resume-item">
                    <div class="resume-preview" onclick="goCreate()"><div style="text-align: center;">Create</div></div>
                </div>
                <div class="resume-item">
                    <div class="resume-preview" onclick="goCreate()"><div style="text-align: center;">Create</div></div>
                </div>
            </div>
        </section>
    </div>
@endsection

<script>
    function goCreate(){
        window.location.href = '/dashboard/create'
    }
</script>