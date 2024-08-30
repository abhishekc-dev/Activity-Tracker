@extends('master')
<!-- Main.blade.php -->

@section('site-content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="display-4">Welcome Admin</h1>
        @if (session()->has('userdata'))
            <p class="lead">
                <b>{{ ucfirst(session()->get('userdata')->name) }}</b> (
                <b>{{ session()->get('userdata')->email }}</b>
                )
            </p>
        @endif
        <hr />
    </div>

    <div class="d-flex justify-content-center mb-4">
        @include('dashboard.layouts.nav')
    </div>

    <div class="content">
        @yield('admin-content')
    </div>
</div>
@endsection