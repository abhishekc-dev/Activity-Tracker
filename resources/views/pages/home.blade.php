@extends('master')

@section('site-content')
<!-- Marquee Section -->
<div class="marquee-container">
    <div class="marquee-content">
        <span>Track Your Activities with Precision &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; Real-Time Updates
            on Your Interactions &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; Advanced Insights and Analytics
            &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; Seamless Integration with Your Tools</span>
    </div>
    <div class="marquee-content marquee-reverse">
        <span>Track Your Activities with Precision &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; Real-Time Updates
            on Your Interactions &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; Advanced Insights and Analytics
            &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; Seamless Integration with Your Tools</span>
    </div>
</div>

<!-- Features Section -->
<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card shadow-sm card-hover">
                <div class="card-body">
                    <i class="fas fa-tasks fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Task Management</h4>
                    <p class="card-text">Organize and prioritize your tasks with ease.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm card-hover">
                <div class="card-body">
                    <i class="fas fa-chart-line fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Progress Tracking</h4>
                    <p class="card-text">Monitor your progress with detailed reports.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm card-hover">
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
            <div class="card shadow-sm card-hover">
                <div class="card-body">
                    <i class="fas fa-bell fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Real-time Notifications</h4>
                    <p class="card-text">Stay updated with instant alerts and notifications.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm card-hover">
                <div class="card-body">
                    <i class="fas fa-calendar-alt fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Calendar Integration</h4>
                    <p class="card-text">Sync your tasks with your calendar for better planning.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm card-hover">
                <div class="card-body">
                    <i class="fas fa-mobile-alt fa-3x mb-3 text-custom"></i>
                    <h4 class="card-title">Mobile Access</h4>
                    <p class="card-text">Manage your tasks on the go with our mobile-friendly platform.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@section('internal-style')
<style>
    .marquee-container {
        position: relative;
        overflow: hidden;
        white-space: nowrap;
        height: 50px;
        padding-top: 10px;
        background-color: #55147;
        border-radius: 5px;
        margin-top: 0;
    }

    .marquee-content {
        display: inline-block;
        padding-left: 100%;
        animation: marquee 20s linear infinite;
    }

    .marquee-content.marquee-reverse {
        position: absolute;
        top: 0;
        left: 0;
        animation: marquee-reverse 10s linear infinite;
    }

    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    @keyframes marquee-reverse {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(0);
        }
    }
</style>
@endsection
@endsection