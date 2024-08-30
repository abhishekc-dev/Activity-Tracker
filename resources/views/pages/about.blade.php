@extends('master')

@section('site-content')
<div class="container py-5">
    <!-- Page Title -->
    <div class="text-center mb-4">
        <h1 class="display-4">About Us</h1>
        <p class="lead text-muted">Learn more about our mission, vision, and features.</p>
    </div>

    <!-- Mission and Vision Cards Section -->
    <div class="row mb-5">
        <!-- Mission Card -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-light rounded">
                <div class="card-body text-center">
                    <h2 class="h4 card-title">Our Mission</h2>
                    <p class="card-text text-muted">Our mission is to empower individuals and teams to stay organized
                        and productive with our innovative activity tracker.</p>
                </div>
            </div>
        </div>
        <!-- Vision Card -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-light rounded">
                <div class="card-body text-center">
                    <h2 class="h4 card-title">Our Vision</h2>
                    <p class="card-text text-muted">We strive to continuously enhance our tool to meet the evolving
                        needs of our users and make productivity effortless.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="text-center mb-5">
        <h2 class="h3">Key Features</h2>
        <p class="text-muted">Discover what makes our activity tracker unique.</p>
    </div>
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="d-inline-block p-3"
                style="border: 1px solid #e0e0e0; border-radius: 8px; background-color: #fafafa;">
                <i class="fas fa-calendar-check fa-2x mb-3 text-custom"></i>
                <h4>Task Management</h4>
                <p class="text-muted">Create, manage, and track tasks easily with an intuitive interface.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="d-inline-block p-3"
                style="border: 1px solid #e0e0e0; border-radius: 8px; background-color: #fafafa;">
                <i class="fas fa-chart-line fa-2x mb-3 text-custom"></i>
                <h4>Progress Tracking</h4>
                <p class="text-muted">Monitor your progress with detailed analytics and reports.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="d-inline-block p-3"
                style="border: 1px solid #e0e0e0; border-radius: 8px; background-color: #fafafa;">
                <i class="fas fa-users fa-2x mb-3 text-custom"></i>
                <h4>Team Collaboration</h4>
                <p class="text-muted">Collaborate effectively with your team on projects and goals.</p>
            </div>
        </div>
    </div>
</div>
@endsection