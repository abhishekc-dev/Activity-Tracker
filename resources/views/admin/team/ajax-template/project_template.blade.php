<table class="responsive-table">
    <tr>
        <th>Project Name</th>
        <td>
            <input type="text" name="project_name" readonly disabled class="formcontrol"
                value="{{$project->project_name}}" />
        </td>
    </tr>
    <tr>
        <th>Project Description</th>
        <td>
            <textarea name="project_description" class="formcontrol"
                disabled>{{$project->project_description}}</textarea>
        </td>
    </tr>
    <tr>
        <th>Duration</th>
        <td>
            <input type="text" name="duration" readonly disabled class="formcontrol" value="{{$project->duration}}" />
        </td>
    </tr>
    <tr>
        <th>Starting from</th>
        <td>
            <input type="text" name="start_time" readonly disabled class="formcontrol"
                value="{{$project->start_time}}" />
        </td>
    </tr>
    <tr>
        <th>No of Member(s)</th>
        <td>
            <input type="text" name="team_size" readonly disabled class="formcontrol" value="{{$project->team_size}}" />
        </td>
    </tr>
    <tr>
        <th>Skills</th>
        <td>
            @php
                $skills_Arr = explode(',', $project->skill_set);
            @endphp
            @foreach ($skills_Arr as $skill)
                <span class="badge">{{$skill}}</span>
            @endforeach
        </td>
    </tr>
    <tr>
        <th>Priority</th>
        <td>
            <input type="text" name="priority" readonly disabled class="formcontrol" value="{{$project->priority}}" />
        </td>
    </tr>
    <tr>
        <th>Project Status</th>
        <td>
            <input type="text" name="status" readonly disabled class="formcontrol" value="{{$project->status}}" />
        </td>
    </tr>
    <tr>
        <th>Project Progress</th>
        <td>
            @php
                $total = 9;
                $unit = 100 / 9;
                $unitPercentage = sprintf("%.2f", $unit);
                $min = 0;
                $max = 100;
                $statusPercentageArr = [
                    'Open' => 1 * $unitPercentage,
                    'To Do' => 2 * $unitPercentage,
                    'Pending' => 3 * $unitPercentage,
                    'In Progress' => 4 * $unitPercentage,
                    'Testing' => 5 * $unitPercentage,
                    'Deployment' => 6 * $unitPercentage,
                    'Suspended' => 7 * $unitPercentage,
                    'Delivered' => 8 * $unitPercentage,
                    'Closed' => ceil(9 * $unitPercentage)
                ];
                $value = $statusPercentageArr[$project->status];
            @endphp
            {!!$min!!}
            <meter min="0" max="100" class="formcontrol" value="{!!$value!!}" title="{!!$value!!}"></meter>
            {!!$max!!}
        </td>
    </tr>
    <tr>
        <th>Team Name(*)</th>
        <td>
            <input type="text" name="team_name" class="formcontrol" required value="" />
        </td>
    </tr>
    @if ($project->team_size > 0)
        <tr>
            <th>Add {{$project->team_size}} Member(s)</th>
            <td>
                @for ($i = 0; $i < $project->team_size; $i++)
                    <div class="team-member">
                        <h4>Member {{$i + 1}}</h4>
                        <select class="formcontrol" name="member[{{$i}}]">
                            <option>Select Member</option>
                            @if (count($members) > 0)
                                @foreach ($members as $user)
                                    <option value="{{$user->id}}">{{$user->name}} ({{$user->email}})</option>
                                @endforeach
                            @endif
                        </select>
                        <select class="formcontrol" name="member_type[{{$i}}]">
                            <option>Member Type</option>
                            <option>Manager</option>
                            <option>Developer</option>
                            <option>Team Leader</option>
                            <option>Tester</option>
                            <option>Scrum Master</option>
                        </select>
                        <select class="formcontrol" name="status[{{$i}}]">
                            <option>Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                @endfor
            </td>
        </tr>
    @endif
    <tr>
        <td colspan="2">
            <input type="submit" name="submit" class="formcontrol bg-custom text-white w-full" />
        </td>
    </tr>
</table>