@extends('master')
<!-- Main.blade.php -->

@section('site-content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <p>Welcome to Dashboard,
            @if (session()->has('userdata'))
                <b>{{ ucfirst(session()->get('userdata')->name) }}</b> (
                <b>{{ session()->get('userdata')->email }}</b>
                )
            @endif
        </p>
        <hr />
    </div>

    <div class="mb-4">
        <a href="{{ url('dashboard/user/manage-task/add') }}" class="rounded px-2 py-2 bg-custom text-white add-task">
            Add Task
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <b>My Task List</b>
        </div>
        <div class="card-body m-4">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task Name</th>
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
                                                                        <span class="badge bg-success">{{ $task->taskInfo }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <a href="#">{{ ProjectHelper::getProjectName($task->project_id) }}</a>
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-primary">{{ $task->startTime }}</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-danger">{{ $task->endTime }}</span>
                                                                    </td>
                                                                    <td>{{ $task->totalTime }} sec</td>
                                                                    <td>
                                                                        @php
                                                                            $url = url('uploads/' . $task->vedio_uniqueFileName);
                                                                        @endphp
                                                                        <img src="{{ asset('assets/images/view-icons.png') }}" alt="View Recording"
                                                                            style="height:30px;width:30px;cursor:pointer"
                                                                            onclick="openVedioPlayer('{{ $url }}')">
                                                                    </td>
                                                                </tr>
                                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">No Record Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
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