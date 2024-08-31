@extends('dashboard.admin')

@section('internal-style')
<style>
    .add-role-container {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 8px;
        max-width: 500px;
        margin: auto;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .add-role-header {
        margin-bottom: 20px;
        text-align: left;
    }

    .add-role-header h2 {
        margin: 0;
        font-size: 24px;
        color: #333;
        text-align: center;
    }

    .add-role-header a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-size: 16px;
        color: #555;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 5px;
    }

    input[type="submit"] {
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
</style>
@endsection

@section('admin-content')
<div class="add-role-container">
    <div class="add-role-header">
        <a href="{{ url('admin/manage-role') }}">Back</a>
        <h2>Add Role</h2>

    </div>
    <form method="POST" action="{{ url('admin/manage-role/add') }}">
        @csrf
        <div class="form-group">
            <label for="designation">Enter Designation:</label>
            <input type="text" id="designation" name="designation" required class="form-control">
        </div>
        <input type="submit" name="submit" value="Add" class="bg-custom">
    </form>
</div>
@endsection