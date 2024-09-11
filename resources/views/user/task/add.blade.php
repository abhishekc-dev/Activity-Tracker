@extends('master')

@section('internal-style')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .text-center {
        text-align: center;
        margin-bottom: 20px;
    }

    .text-center p {
        font-size: 1.25rem;
        margin: 0;
    }

    .text-center h1 {
        font-size: 2rem;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .text-center a {
        color: #007bff;
        text-decoration: none;
        font-size: 1rem;
    }

    .text-center a:hover {
        text-decoration: underline;
    }

    table {
        width: 100%;
    }

    table td {
        padding: 10px;
        vertical-align: top;
    }

    .form-group label {
        font-weight: bold;
        color: #333;
    }

    .form-group input,
    .form-group select,
    .form-group button,
    .form-group progress {
        width: 100%;
        padding: 12px;
        margin: 5px 0;
        border-radius: 4px;
        border: 1px solid #ced4da;
        box-sizing: border-box;
    }

    .form-group input[readonly] {
        background-color: #e9ecef;
        cursor: not-allowed;
    }

    .form-group button {
        cursor: pointer;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 12px;
        font-size: 16px;
    }

    .form-group button:disabled {
        background-color: #cccccc;
        cursor: not-allowed;
    }

    #recordingIndicator {
        position: fixed;
        top: 15px;
        left: 15px;
        width: 24px;
        height: 24px;
        background-color: red;
        border-radius: 50%;
        display: none;
        animation: blink 1s infinite;
    }

    #timer {
        position: fixed;
        top: 15px;
        right: 15px;
        font-size: 18px;
        color: #333;
        font-weight: bold;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }
</style>
@endsection

@section('site-content')
<div class="text-center">
    <h1>Welcome to Dashboard</h1>
    <p>
        @if (session()->has('userdata'))
            {{ ucfirst(session()->get('userdata')->name) }}
            (
            {{ session()->get('userdata')->email }}
            )
        @endif
    </p>
    <hr />
    <a href="{{ url('dashboard/user') }}">
        Back to Dashboard
    </a>
</div>

<!-- Container Start -->
<div class="container p-4 mx-auto">
    <table>
        <tr class="form-group">
            <td><label for="projectSelect">Select Project</label></td>
            <td>
                <select id="projectSelect">
                    @if (count($projects) > 0)
                        @foreach ($projects as $project)
                            <option value="{{$project->project_id}}">
                                {{ ProjectHelper::getProjectName($project->project_id) }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </td>
        </tr>
        <tr class="form-group">
            @php
                $userName = session()->get('userdata')->name ?? "";
                $userID = session()->get('userdata')->id ?? "";
            @endphp
            <td><label for="nameInput">Name</label></td>
            <td>
                <input type="text" id="nameInput" placeholder="Enter Name" value="{!! $userName !!}" readonly
                    class="form-control">
                <input type="hidden" id="user_id" value="{!! $userID !!}">
            </td>
        </tr>
        <tr class="form-group">
            <td><label for="taskInput">Task Information</label></td>
            <td>
                <input type="text" id="taskInput" placeholder="Enter Task Information" class="form-control">
            </td>
        </tr>
        <tr class="form-group">
            <td>
                <label for="startButton"> Start </label>
            </td>
            <td>
                <button id="startButton" class="bg-success">Start Tracker</button>
            </td>
        </tr>
        <tr class="form-group">
            <td>
                <label for="stopButton"> Stop </label>
            </td>
            <td>
                <button id="stopButton" disabled>Stop Tracker</button>
            </td>
        </tr>
        <tr class="form-group">
            <td><label for="progressBar">Progress</label></td>
            <td>
                <progress id="progressBar" max="100" value="0"></progress>
            </td>
        </tr>
    </table>
</div>

<div id="recordingIndicator"></div>
<div id="timer">00:00</div>

<script>
    let AppURL = "{{ url('') }}/";
</script>
<script src="{{ asset('assets/js/package/recorder.js') }}"></script>
<!-- Container End -->
@endsection