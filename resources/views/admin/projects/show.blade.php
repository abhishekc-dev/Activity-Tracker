@extends('dashboard.admin')

@section('internal-style')
<style>
    .card-footer-left-buttons {
        float: left;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 90%;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .filters {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .filters input,
    .filters select {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 30%;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .card-header h2 {
        margin: 0;
        font-size: 1.5em;
    }

    .card-body p {
        margin: 10px 0;
    }

    .card-footer {
        text-align: right;
    }

    .card-footer a {
        color: #3498db;
        text-decoration: none;
    }

    .card-footer a:hover {
        text-decoration: underline;
    }

    .badge {
        padding: 5px 10px;
        border-radius: 5px;
        color: #fff;
        text-align: center;
        display: inline-block;
    }

    .badge.small {
        background-color: #3498db;
    }

    .badge.medium {
        background-color: #f1c40f;
    }

    .badge.large {
        background-color: #e67e22;
    }

    .badge.enterprise {
        background-color: #e74c3c;
    }

    .badge.high {
        background-color: #e74c3c;
    }

    .badge.medium {
        background-color: #f1c40f;
    }

    .badge.low {
        background-color: #2ecc71;
    }

    .badge.open {
        background-color: #3498db;
    }

    .badge.todo {
        background-color: #f1c40f;
    }

    .badge.pending {
        background-color: #e67e22;
    }

    .badge.in-progress {
        background-color: #3498db;
    }

    .badge.testing {
        background-color: #9b59b6;
    }

    .badge.completed {
        background-color: #2ecc71;
    }

    .badge.on-hold {
        background-color: #f39c12;
    }

    .badge.cancelled {
        background-color: #e74c3c;
    }

    .badge.entry {
        background-color: #3498db;
    }

    .badge.intermediate {
        background-color: #f1c40f;
    }

    .badge.experienced {
        background-color: #e67e22;
    }

    .badge.remote {
        background-color: #3498db;
    }

    .badge.onsite {
        background-color: #95a5a6;
    }

    .badge.slack {
        background-color: #3498db;
    }

    .badge.skype {
        background-color: #00aff0;
    }

    .badge.whatsapp {
        background-color: #25d366;
    }

    .badge.telegram {
        background-color: #0088cc;
    }

    .badge.trello {
        background-color: #0079bf;
    }
</style>

@endsection


@section('admin-content')
<b>Projects List</b>
<a href="{{url('admin/manage-project/add')}}">
    <button>
        Add Project
    </button>
</a>


<div class="container">
    <h1>Projects Overview</h1>
    <div class="filters">
        <input type="text" placeholder="Search by project name..." id="search-bar">
        <select id="filter-project-type">
            <option value="">All Types</option>
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
            <option value="Enterprise">Enterprise</option>
        </select>
        <select id="filter-status">
            <option value="">All Status</option>
            <option value="Open">Open</option>
            <option value="To Do">To Do</option>
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
            <option value="Testing">Testing</option>
            <option value="Completed">Completed</option>
            <option value="On Hold">On Hold</option>
            <option value="Cancelled">Cancelled</option>
        </select>
        <select id="filter-priority">
            <option value="">All Priorities</option>
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select>
    </div>
    <div class="grid">
        <!-- Repeat -->
        @if (count($projects) > 0)
            @foreach ($projects as $project)
                <div class="card">
                    <div class="card-header">
                        <h2><a href="#">{{$project->project_name}}</a></h2>
                        <span class="badge small">{{$project->project_type}}</span>
                    </div>
                    <div class="card-body">
                        <p><strong>Description:</strong> {{$project->project_description}}</p>
                        <p><strong>Duration:</strong> {{$project->duration}}</p>
                        <p><strong>Start Time:</strong>{{$project->start_time}}</p>
                        <p><strong>Team Size:</strong> {{$project->team_size}}</p>
                        <p style="word-wrap: break-word;"><strong>Skill Set:</strong>{{$project->skill_set}}</p>
                        <p><strong>Priority:</strong> <span class="badge high">{{$project->priority}}</span></p>
                        <p><strong>Status:</strong> <span class="badge in-progress">{{$project->status}}</span></p>
                        <p><strong>Client Name:</strong> <a href="#">{{$project->client_name}}</a></p>
                        <p><strong>Client @:</strong> <a href="#">{{$project->client_email_address}}</a></p>
                        <p><strong>Client Mobile No:</strong> <a href="#">{{$project->client_contact_number}}</a></p>
                    </div>
                    <hr color="grey" size="4" />
                    <div class="card-footer-left-buttons">
                        <a href="{{url('admin/manage-project/edit/' . $project->id)}}">
                            <button style="background:lightgreen;color:green;border:none;cursor:pointer">
                                Edit</button>
                        </a>
                        <form action="{{url('admin/manage-project/' . $project->id)}}" method="POST"
                            onsubmit="return window.confirm('Do you Really Want to Delete');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:pink;color:red;border:none;cursor:pointer">Delete</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="#">More Details</a>
                        <br />
                        <a href="{{url('admin/manage-project/agreement/' . $project->id)}}">Download Contract</a>
                    </div>
                </div>
            @endforeach
        @endif
        <!-- More cards as needed -->
    </div>
</div>



@endsection