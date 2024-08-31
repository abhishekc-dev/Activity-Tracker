@extends('dashboard.admin')
@section('internal-style')

<style>
    .roles-list-container {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .header h2 {
        margin: 0;
    }

    .btn-custom {
        background-color: #021e43;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .table-container {
        overflow-x: auto;
        background-color: #021e43;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }

    .btn-edit,
    .btn-delete {
        background-color: transparent;
        color: white;
        border: none;
        padding: 8px;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    .btn-edit i {
        color: green;
        font-size: 18px;
    }

    .btn-delete i {
        color: #dc3545;
        font-size: 18px;
    }
</style>

@endsection

@section('admin-content')
<div class="roles-list-container">
    <div class="header">
        <h2>Roles List</h2>
        <a href="{{ url('admin/manage-role/add') }}">
            <button class="btn-custom">
                Add Role
            </button>
        </a>
    </div>

    @if (count($roles) > 0)
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->designations}}</td>
                            <td>
                                <a href="{{ url('admin/manage-role/edit/' . $role->id) }}" class="btn-edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ url('admin/manage-role/' . $role->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>No roles available.</p>
    @endif
</div>

@endsection