{{-- admin --}}
@hasrole('Admin')
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->




        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#assets-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layers"></i><span>Assets Control</span><i class="bi bi-chevron-left ms-auto"></i>
            </a>
            <ul id="assets-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ route('asset-list')}}">
                        <i class="bi bi-circle"></i><span>Assets</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('asset-request-list')}}">
                        <i class="bi bi-circle"></i><span>Asset Requests</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="asset-receipt.html">
                        <i class="bi bi-circle"></i><span>Asset Receipt and Inventory</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('assign-asset')}}">
                        <i class="bi bi-circle"></i><span>Assign Assets </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('assigned-asset')}}">
                        <i class="bi bi-circle"></i><span>Assigned Assets</span>
                    </a>
                </li>

                <li>
                    <a href="asset-retirement.html">
                        <i class="bi bi-circle"></i><span>Asset Disposal</span>
                    </a>
                </li>
                <li>
                    <a href="documentation-reporting.html">
                        <i class="bi bi-circle"></i><span>Reports</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Assets Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#maintenance-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-tools"></i><span>Maintenance</span><i class="bi bi-chevron-left ms-auto"></i>
            </a>
            <ul id="maintenance-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="maintenance-tasks.html">
                        <i class="bi bi-circle"></i><span>Tasks</span>
                    </a>
                </li>
                <li>
                    <a href="maintenance-schedules.html">
                        <i class="bi bi-circle"></i><span>Schedules</span>
                    </a>
                </li>
                <li>
                    <a href="maintenance-requests.html">
                        <i class="bi bi-circle"></i><span>Requests</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Maintenance Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>User Management</span><i class="bi bi-chevron-left ms-auto"></i>
            </a>
            <ul id="users-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                {{-- <li>
                    <a href="{{ route('create-user') }}">
                        <i class="bi bi-circle"></i><span>Create User </span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('user-list') }}">
                        <i class="bi bi-circle"></i><span>Users</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Users Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed submenu-toggle" data-bs-toggle="collapse" href="#reports-nav">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
                <i class="bi bi-chevron-left ms-auto submenu-chevron"></i>
            </a>
            <ul id="reports-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('department-list')}}"><i class="bi bi-circle"></i><span>Departments</span></a>
                </li>
                <li>
                    <a href="{{ route('position-list')}}"><i class="bi bi-circle"></i><span>Positions</span></a>
                </li>

                <li>
                    <a href="{{ route('category-list')}}"><i class="bi bi-circle"></i><span>Categories</span></a>
                </li>

                <li>
                    <a href="{{ route('type-list')}}"><i class="bi bi-circle"></i><span>Types</span></a>
                </li>

                <li>
                    <a href="{{ route('manufacturer-list')}}"><i class="bi bi-circle"></i><span>Manufacturers</span></a>
                </li>
                <li>
                    <a href="{{ route('supplier-list')}}"><i class="bi bi-circle"></i><span>Suppliers</span></a>
                </li>

                <li>
                    <a href=""><i class="bi bi-circle"></i><span>Depreciation</span></a>
                </li>
            </ul>
        </li>


        <li class="nav-item">
            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf
            <a class="nav-link collapsed" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-power"></i>
                <span>Logout</span>
            </a>
        </form>
        </li><!-- End Settings Nav -->

    </ul>
</aside>
@endhasrole
{{-- employees --}}
@hasrole('Employee')
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#assets-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layers"></i><span>Assets</span><i class="bi bi-chevron-left ms-auto"></i>
            </a>
            <ul id="assets-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ route('asset-request')}}">
                        <i class="bi bi-circle"></i><span>Request Asset</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('asset-request-list')}}">
                        <i class="bi bi-circle"></i><span>My Requests</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Assets Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#maintenance-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-tools"></i><span>Maintenance</span><i class="bi bi-chevron-left ms-auto"></i>
            </a>
            <ul id="maintenance-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                {{-- <li>
                    <a href="maintenance-tasks.html">
                        <i class="bi bi-circle"></i><span>Tasks</span>
                    </a>
                </li>
                <li>
                    <a href="maintenance-schedules.html">
                        <i class="bi bi-circle"></i><span>Schedules</span>
                    </a>
                </li> --}}
                <li>
                    <a href="maintenance-requests.html">
                        <i class="bi bi-circle"></i><span>Requests</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Maintenance Nav -->

        <li class="nav-item">
            <a class="nav-link" href="settings.html">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </li><!-- End Settings Nav -->

        <li class="nav-item"></li>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                <a class="nav-link collapsed" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                <i class="bi bi-power"></i>
                <span>Logout</span>
            </a>
            </form>
        </li><!-- End Settings Nav -->

    </ul>
</aside>

@endhasrole


