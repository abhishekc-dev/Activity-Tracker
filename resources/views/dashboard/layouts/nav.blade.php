<!-- For Admin Navigation start -->
<nav class="bg-custom rounded">
        <div class="nav-wrapper">
                <div class="menu-toggle" onclick="toggleMenu('.admin-nav-links')">
                        <i class="fas fa-bars"></i>
                </div>
                <ul class="nav-links admin-nav-links">
                        <li><a href="{{ url('/admin/manage-project/') }}"
                                        class="{{ request()->segment(2) == 'manage-project' ? 'active' : '' }}">Manage
                                        Project</a></li>
                        <li><a href="{{ url('/admin/manage-role/') }}"
                                        class="{{ request()->segment(2) == 'manage-role' ? 'active' : '' }}">Manage
                                        Role</a></li>
                        <li><a href="{{ url('/admin/manage-team/') }}"
                                        class="{{ request()->segment(2) == 'manage-team' ? 'active' : '' }}">Manage
                                        Team</a></li>
                        <li><a href="{{ url('/admin/manage-task/') }}"
                                        class="{{ request()->segment(2) == 'manage-task' ? 'active' : '' }}">Manage
                                        Task</a></li>
                </ul>
        </div>
</nav>

<!-- For Admin Navigation End-->