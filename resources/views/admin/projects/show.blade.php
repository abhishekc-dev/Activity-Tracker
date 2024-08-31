@extends('dashboard.admin')

@section('internal-style')
<style>
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
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
        font-size: 24px;
    }

    .filters {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
    }

    .filters input,
    .filters select {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%;
        max-width: 250px;
        box-sizing: border-box;
    }

    .filters select {
        width: 100%;
        max-width: 250px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transform: scale(1.02);
        transition: 2s;
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .card-header h2 {
        margin: 0;
        font-size: 1.25em;
        color: #333;
    }

    .card-body p {
        margin: 10px 0;
        font-size: 14px;
        color: #555;
    }

    .card-body p strong {
        color: #333;
    }

    .card-footer {
        text-align: right;
        font-size: 14px;
    }

    .card-footer a {
        color: #3498db;
        text-decoration: none;
        margin-right: 10px;
    }

    .card-footer a:hover {
        text-decoration: underline;
    }

    .card-footer-left-buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .card-footer-left-buttons button,
    .card-footer-left-buttons a {
        background-color: transparent;
        border: none;
        cursor: pointer;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .card-footer-left-buttons button:hover,
    .card-footer-left-buttons a:hover {
        color: #007bff;
    }

    .card-footer-left-buttons .edit {
        color: #28a745;
    }

    .card-footer-left-buttons .delete {
        color: #dc3545;
    }

    .badge {
        padding: 5px 10px;
        border-radius: 5px;
        color: #fff;
        text-align: center;
        display: inline-block;
        font-size: 12px;
        margin-right: 5px;
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
<div class="container ">
    <h1>Projects Overview</h1>
    <div class="filters">
        <input type="text" id="search-bar" class="form-control" placeholder="Search by project name...">
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

    <a href="{{url('admin/manage-project/add')}}">
        <button class="bg-custom rounded text-white px-2 py-2 mb-4">Add Project</button>
    </a>

    <div class="grid" id="projects-grid">
        @foreach ($projects as $project)
            <div class="card" data-name="{{ $project->project_name }}" data-type="{{ $project->project_type }}"
                data-status="{{ $project->status }}" data-priority="{{ $project->priority }}">
                <div class="card-header">
                    <h2><a href="#">{{ $project->project_name }}</a></h2>
                    <span class="badge {{ $project->project_type }}">{{ $project->project_type }}</span>
                </div>
                <div class="card-body">
                    <p><strong>Description:</strong> {{ $project->project_description }}</p>
                    <p><strong>Duration:</strong> {{ $project->duration }}</p>
                    <p><strong>Start Time:</strong> {{ $project->start_time }}</p>
                    <p><strong>Team Size:</strong> {{ $project->team_size }}</p>
                    <p style="word-wrap: break-word;"><strong>Skill Set:</strong> {{ $project->skill_set }}</p>
                    <p><strong>Priority:</strong> <span class=" {{ $project->priority }}">{{ $project->priority }}</span>
                    </p>
                    <p><strong>Status:</strong> <span class=" {{ $project->status }}">{{ $project->status }}</span></p>
                    <p><strong>Client Name:</strong> <a href="#">{{ $project->client_name }}</a></p>
                    <p><strong>Client @:</strong> <a href="#">{{ $project->client_email_address }}</a></p>
                    <p><strong>Client Mobile No:</strong> <a href="#">{{ $project->client_contact_number }}</a></p>
                </div>
                <hr>
                <div class="card-footer-left-buttons">
                    <a href="{{ url('admin/manage-project/edit/' . $project->id) }}" class="edit" title="Edit"><i
                            class="fas fa-edit"></i></a>
                    <a href="{{ url('admin/manage-project/delete/' . $project->id) }}" class="delete" title="Delete"><i
                            class="fas fa-trash"></i></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@section('internal-script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('search-bar');
        const filterType = document.getElementById('filter-project-type');
        const filterStatus = document.getElementById('filter-status');
        const filterPriority = document.getElementById('filter-priority');
        const projectsGrid = document.getElementById('projects-grid');
        const cards = projectsGrid.getElementsByClassName('card');

        function filterProjects() {
            const searchTerm = searchInput.value.toLowerCase();
            const typeFilter = filterType.value;
            const statusFilter = filterStatus.value;
            const priorityFilter = filterPriority.value;

            Array.from(cards).forEach(card => {
                const name = card.getAttribute('data-name').toLowerCase();
                const type = card.getAttribute('data-type');
                const status = card.getAttribute('data-status');
                const priority = card.getAttribute('data-priority');

                const matchesSearch = name.includes(searchTerm);
                const matchesType = typeFilter === '' || type === typeFilter;
                const matchesStatus = statusFilter === '' || status === statusFilter;
                const matchesPriority = priorityFilter === '' || priority === priorityFilter;

                if (matchesSearch && matchesType && matchesStatus && matchesPriority) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        searchInput.addEventListener('input', filterProjects);
        filterType.addEventListener('change', filterProjects);
        filterStatus.addEventListener('change', filterProjects);
        filterPriority.addEventListener('change', filterProjects);
    });
</script>
@endsection

@endsection