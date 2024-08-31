@extends('master')

@section('site-content')
<div class="container py-5">
    <!-- Page Title -->
    <div class="text-center mb-4">
        <h1 class="display-4">License Information</h1>
        <p class="lead ">Understand the terms and conditions of using our activity tracker.</p>
    </div>

    <!-- License Overview Section -->
    <div class="row mb-5">
        <div class="col-md-12">
            <h2 class="h3">License Overview</h2>
            <p class="">
                Our activity tracker is licensed under the MIT, which allows you to use, modify, and
                distribute the software under certain conditions. Please review the details below to ensure compliance
                with the licensing terms.
            </p>
        </div>
    </div>

    <!-- License Terms Section -->
    <div class="row mb-5">
        <div class="col-md-12">
            <h2 class="h4">License Terms and Conditions</h2>
            <ul class="list-unstyled">
                <li><i class="fas fa-check-circle text-success"></i> You may use the software for personal and
                    commercial purposes.</li>
                <li><i class="fas fa-check-circle text-success"></i> You may modify and distribute the software,
                    provided that the original license terms are included.</li>
                <li><i class="fas fa-check-circle text-success"></i> You may not use the software for illegal activities
                    or in ways that violate the license agreement.</li>
                <li><i class="fas fa-check-circle text-success"></i> The software is provided "as is," without any
                    warranties or guarantees.</li>
            </ul>
        </div>
    </div>

</div>
@endsection