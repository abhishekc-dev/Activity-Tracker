@extends('dashboard.admin')

@section('internal-style')
<style>
    /* Button Styles */
    .btn-custom {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 2px;
        cursor: pointer;
        border-radius: 5px;
    }

    .btn-custom:hover {
        background-color: red;
    }

    /* Card Styles */
    .card {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }

    .card-header {
        color: black;
        padding: 15px;
        border-bottom: 1px solid #ddd;
        font-size: 18px;
        font-weight: bold;
    }

    .card-body {
        padding: 25px;
        box-sizing: border-box;
    }

    .table-container {
        overflow-x: auto;
    }

    /* Table Styles */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 16px;
        text-align: left;
    }

    table th,
    table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }

    table th {
        background-color: #f4f4f4;
        font-weight: bold;
        color: #333;
    }

    table caption {
        font-size: 20px;
        margin-bottom: 10px;
        color: #333;
        font-weight: bold;
    }

    /* Responsive Table */
    @media screen and (max-width: 600px) {
        table thead {
            display: none;
        }

        table,
        table tbody,
        table tr,
        table td {
            display: block;
            width: 100%;
        }

        table tr {
            margin-bottom: 15px;
        }

        table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-weight: bold;
            text-align: left;
            color: #333;
        }
    }

    /* Custom Styles for Task Rows */
    .task-name {
        padding: 5px 10px;
        display: inline-block;
        color: white;
        background: green;
        border-radius: 5px;
        box-sizing: border-box;
        text-align: center;

    }

    .start-time {
        padding: 5px;
        display: inline-block;
        color: white;
        background: #42a5f5;
        border-radius: 4px;
        text-align: center;
    }

    .end-time {
        padding: 5px;
        display: inline-block;
        color: white;
        background: #f48fb1;
        border-radius: 5px;
        text-align: center;

    }

    .view-icon {
        height: 30px;
        width: 30px;
        cursor: pointer;
    }

    td a:hover {
        text-decoration: none;
    }
</style>
@endsection

@section('admin-content')
<div class="card">
    <div class="card-header">
        All Task List
    </div>
    <div class="card-body">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Task Name</th>
                        <th>User Name</th>
                        <th>Project Name</th>
                        <th>Start At</th>
                        <th>Ended At</th>
                        <th>Total Time (In Seconds)</th>
                        <th>View Recording</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($tasks) > 0)
                                    @foreach ($tasks as $task)
                                                    <tr>
                                                        <td>{{ $task->id }}</td>
                                                        <td>
                                                            <span class="task-name">{{ $task->taskInfo }}</span>
                                                        </td>
                                                        <td><b>{{ $task->user_name }}</b></td>
                                                        <td>
                                                            <a href="#">{{ ProjectHelper::getProjectName($task->project_id) }}</a>
                                                        </td>
                                                        <td>
                                                            <span class="start-time">{{ $task->startTime }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="end-time">{{ $task->endTime }}</span>
                                                        </td>
                                                        <td>{{ $task->totalTime }}</td>
                                                        <td>
                                                            @php
                                                                $url = url('uploads/' . $task->vedio_uniqueFileName);
                                                            @endphp
                                                            <img src="{{ asset('assets/images/view-icons.png') }}" class="view-icon"
                                                                onclick="openVedioPlayer('{!! $url !!}')">
                                                        </td>
                                                    </tr>
                                    @endforeach
                    @else
                        <tr>
                            <td colspan="8" style="text-align:center">No Record Found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function openVedioPlayer(vedioURL) {
        window.open(vedioURL, "_blank",
            "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
    }
</script>
@endsection