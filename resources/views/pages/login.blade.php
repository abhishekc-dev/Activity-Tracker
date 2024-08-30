@extends('master')

@section('site-content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%; background-color: #f8f9fa;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">User Login</h3>
            <form action="{{url('user/login')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"
                            required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Enter your password" required>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="rounded text-white bg-custom btn-block px-2 py-1">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection