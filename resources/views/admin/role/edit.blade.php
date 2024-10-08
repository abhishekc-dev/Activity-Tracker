@extends('dashboard.admin')

@section('internal-style')
<style>
    .edit-role-container {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 8px;
        max-width: 500px;
        margin: auto;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .edit-role-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .edit-role-header h2 {
        margin: 0;
        font-size: 24px;
        color: #333;
    }

    .edit-role-header a {
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
<div class="edit-role-container">
    <div class="edit-role-header">
        <h2>Edit Role</h2>
        <a href="{{ url('admin/manage-role') }}">Back</a>
    </div>
    <form method="POST" action="{{ url('admin/manage-role/update/' . $role->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="designation">Enter Designation:</label>
            <input type="text" id="designation" name="designation" value="{{ $role->designations }}" required
                class="form-control">
        </div>
        <input type="submit" name="submit" value="Update" class="bg-custom">
    </form>
</div>
@endsection