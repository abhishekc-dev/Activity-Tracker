@extends('dashboard.admin')

@section('internal-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 12px;
        font-size: 14px;
    }

    th {
        background-color: #551347;
        color: white
    }

    td {
        background-color: #ffffff;
    }

    th,
    td {
        border-radius: 4px;
    }

    .formcontrol {
        width: 100%;
        padding: 8px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .badge {
        display: inline-block;
        padding: 5px 10px;
        font-size: 12px;
        color: #fff;
        font-weight: bold;
        background-color: grey;
        border-radius: 8px;
        text-align: center;
        font-family: Arial, sans-serif;
        margin: 5px;
    }

    .badge-success {
        background-color: #28a745;
    }

    .badge-warning {
        background-color: #ffc107;
    }

    .badge-error {
        background-color: #dc3545;
    }

    .back-button {
        border-radius: 5px;
        background-color: transparent;
        font-size: 18px;
    }

    .back-button:hover {
        text-decoration: none;
    }

    .loader {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px;
        margin: 20px 0;
    }

    .loader i {
        font-size: 24px;
        color: #551347;
    }

    .form-header {
        margin-bottom: 20px;
    }

    .form-header h3 {
        margin: 0;
        font-size: 20px;
        font-weight: bold;
        color: #333;
    }

    .form-header a {
        text-decoration: none;
    }

    .form-header button {
        background-color: #6c757d;
    }
</style>
@endsection

@section('admin-content')
<a href="{{url('admin/manage-team')}}" class="back-button">
    Back
</a>
<div class="form-header">
    <h3 class="text-center fs-1">
        Edit Member of Team
    </h3>
</div>
<form action="{{url('admin/manage-team/update/' . $selectedProject->id)}}" method="POST">
    @csrf
    @method('PUT')
    <table>
        <thead>
            <tr>
                <th>Select Project</th>
                <td>
                    <select class="formcontrol" onchange="handleAjaxProjectForm(this.value);" name="project_id"
                        id="project_id">
                        <option value="">Select Project</option>
                        @if (count($projects) > 0)
                            @foreach ($projects as $project)
                                <option value="{{$project->id}}" @if ($selectedProject->id == $project->id) selected @endif>
                                    {{$project->project_name}}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </td>
            </tr>
        </thead>
        <tbody id="ajax_project_form">
            <!-- Content will be loaded here via AJAX -->
        </tbody>
    </table>
</form>

<script>
    function handleAjaxProjectForm(project_id) {
        if (project_id.trim() === "") {
            window.alert('Please Select Some Project');
            return;
        }

        document.querySelector("#ajax_project_form").innerHTML = `<div class="loader">
            <i class="fas fa-spinner fa-spin"></i>
        </div>`;

        fetch(`{{url('api/ajax/project_listing/edit/')}}/${project_id}`, {
            headers: {
                "Content-Type": "application/json;charset=utf-8"
            }
        })
            .then(response => {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Api Error');
                }
            })
            .then(result => {
                if (result.code == 200 && result.status == true) {
                    setTimeout(() => {
                        document.querySelector("#ajax_project_form").innerHTML = result.data.html;
                    }, 1000);
                }
            })
            .catch(error => {
                console.log('Error:', error);
            });
    }

    document.addEventListener('DOMContentLoaded', function () {
        const projectID = document.querySelector("#project_id").value;
        if (projectID) {
            handleAjaxProjectForm(projectID);
        }
    });
</script>
@endsection