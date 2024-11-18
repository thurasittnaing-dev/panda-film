<div class="sidebar-wrapper" style="background-color:#fff;">
    <nav class="mt-2"> <!--begin::Sidebar Menu-->
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

            <li class="nav-header">Dashboard</li>

            <li class="nav-item {{ menuOpen('dashboard') }}">
                <a href="#" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                    <p>
                        Dashboard
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link {{ isActive('dashboard') }}">
                            <i class="bi bi-bar-chart"></i>
                            <p>Main Dashboard</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-header">Menus</li>

            <li class="nav-item {{ menuOpen('movie') }}">
                <a href="#" class="nav-link"><i class="bi bi-film"></i>
                    <p>
                        Movie
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('videos.create') }}" class="nav-link {{ isActive('videos.create') }}">
                            <p>Upload New Movie</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-header">Master Data</li>

            <li class="nav-item {{ menuOpen('configuration') }}">
                <a href="#" class="nav-link"><i class="bi bi-database-fill-gear"></i>
                    <p>
                        Configuration
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link {{ isResourceActive('users') }}">
                            <p>Users</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <p>Genres</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <p>Video Types</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <p>Stars</p>
                        </a>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <p>Countries</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <p>Qualities</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul> <!--end::Sidebar Menu-->
    </nav>
</div>
