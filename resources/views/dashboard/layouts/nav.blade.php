<!-- For Admin Navigation start -->
<nav>
        <ul>
                <li><a href="{{url('/admin/manage-project/')}}"
                                style="{{request()->segment(2) == 'manage-project' ? 'text-decoration:underline overline' : ''}}">Manage
                                Project</a></li>
                <li><a href="{{url('/admin/manage-role/')}}"
                                style="{{request()->segment(2) == 'manage-role' ? 'text-decoration:underline overline' : ''}}">Manage
                                Role</a></li>
                <li><a href="{{url('/admin/manage-team/')}}"
                                style="{{request()->segment(2) == 'manage-team' ? 'text-decoration:underline overline' : ''}}">Manage
                                Team</a>
                </li>
                <li><a href="{{url('/admin/manage-task/')}}"
                                style="{{request()->segment(2) == 'manage-task' ? 'text-decoration:underline overline' : ''}}">Manage
                                Task</a></li>
        </ul>
</nav>
`
<!-- For Admin Navigation End-->