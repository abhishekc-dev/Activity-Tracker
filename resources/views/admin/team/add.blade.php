@extends('dashboard.admin')

@section('internal-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    h3 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
    }

    .back-button {
        color: purple;
        border: none;
        padding: 5px 15px;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        margin-left: 10px;
        border: 1px solid gray;
    }

    .back-button:hover {
        text-decoration: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #551347;
        color: white;
        font-weight: bold;
    }

    .formcontrol {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 5px;
    }

    .loader {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
        margin-top: 20px;
    }

    .loader i {
        color: #551347;
    }
</style>
@endsection

@section('admin-content')
<div class="container">
    <a href="{{url('admin/manage-team')}}" class="back-button">
        Back
    </a>
    <h3 class="text-center">
        Add Member to Team
    </h3>
    <form action="{{url('admin/manage-team/add')}}" method="POST">
        @csrf
        <table>
            <tr>
                <th>Select Project</th>
                <td>
                    <select class="formcontrol" onchange="handleAjaxProjectForm(this.value);" name="project_id">
                        <option value="">Select Project</option>
                        @if (count($projects) > 0)
                            @foreach ($projects as $project)
                                <option value="{{$project->id}}">{{$project->project_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </td>
            </tr>
            <tbody id="ajax_project_form">
                <!-- Ajax content will be loaded here -->
            </tbody>
        </table>
    </form>
</div>

<script>
    function handleAjaxProjectForm(project_id) {
        if (project_id.trim() === "") {
            alert('Please Select a Project');
            return;
        }

        document.querySelector("#ajax_project_form").innerHTML = `<div class="loader">
            <i class="fas fa-spinner fa-spin fa-3x"></i>
        </div>`;

        fetch(`{{url('api/ajax/project_listing')}}/${project_id}`, {
            headers: {
                "Content-Type": "application/json;charset=utf-8"
            }
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('API Error');
                }
                return response.json();
            })
            .then(result => {
                if (result.code === 200 && result.status === true) {
                    setTimeout(() => {
                        document.querySelector("#ajax_project_form").innerHTML = result.data.html;
                    }, 2000);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>
@endsection