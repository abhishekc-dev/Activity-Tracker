<!-- For Admin Navigation start -->
<nav class="bg-custom rounded">
        <ul>
                <li><a href="{{url('/admin/manage-project/')}}"
                                style="{{request()->segment(2) == 'manage-project' ? 'text-decoration:underline ' : ''}}">Manage
                                Project</a></li>
                <li><a href="{{url('/admin/manage-role/')}}"
                                style="{{request()->segment(2) == 'manage-role' ? 'text-decoration:underline ' : ''}}">Manage
                                Role</a></li>
                <li><a href="{{url('/admin/manage-team/')}}"
                                style="{{request()->segment(2) == 'manage-team' ? 'text-decoration:underline ' : ''}}">Manage
                                Team</a>
                </li>
                <li><a href="{{url('/admin/manage-task/')}}"
                                style="{{request()->segment(2) == 'manage-task' ? 'text-decoration:underline ' : ''}}">Manage
                                Task</a></li>
        </ul>
</nav>
`
<!-- For Admin Navigation End-->