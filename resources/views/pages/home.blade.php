@extends('master')

@section('site-content')
<!-- Hero Section -->
<div class="bg-light py-5 text-center">
    <div class="container">
        <h1 class="display-4 font-weight-bold">Activity Tracker Management Tool</h1>
        <p class="lead">Modern Tasks Need Modern Solutions</p>
    </div>
</div>

<!-- Features Section -->
<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-tasks fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Task Management</h4>
                    <p class="card-text">Organize and prioritize your tasks with ease.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-chart-line fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Progress Tracking</h4>
                    <p class="card-text">Monitor your progress with detailed reports.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-users fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Team Collaboration</h4>
                    <p class="card-text">Work together with your team seamlessly.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-bell fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Real-time Notifications</h4>
                    <p class="card-text">Stay updated with instant alerts and notifications.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-calendar-alt fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Calendar Integration</h4>
                    <p class="card-text">Sync your tasks with your calendar for better planning.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-mobile-alt fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Mobile Access</h4>
                    <p class="card-text">Manage your tasks on the go with our mobile-friendly platform.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection