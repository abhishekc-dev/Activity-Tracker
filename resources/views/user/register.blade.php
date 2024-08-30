@extends('master')

@section('site-content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%; background-color: #f8f9fa;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">User Registration</h3>
            <form action="{{url('user/save')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fas fa-user"></i>
                        </div>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name"
                            required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"
                            required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Enter your password" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fas fa-phone"></i>
                        </div>
                        <input type="tel" name="mobile" id="mobile" class="form-control"
                            placeholder="Enter your mobile number" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="designation" class="form-label">Designation</label>
                    <select name="designation" id="designation" class="form-select" required>
                        <option value="">-- Select --</option>
                        @if (count($roles) > 0)
                            @foreach ($roles as $role)
                                <option>{{$role->designations}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="d-grid">
                    <button type="submit" class="bg-custom text-white rounded px-2 py-1 w-100">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection