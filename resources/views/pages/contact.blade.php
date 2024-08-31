@extends('master')

@section('site-content')
<div class="container mt-5" style="max-width: 600px;">

    <div class="card shadow-sm p-4">
        <h2 class="text-center">Contact Us</h2>
        <div class="card-body">
            <form action="#">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                </div>

                <div class="d-grid">
                    <button type="submit" class="bg-custom px-2 py-2 rounded  text-white btn-block">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection