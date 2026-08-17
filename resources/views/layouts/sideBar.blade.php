<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!-- Brand -->
    <div class="sidebar-brand border-bottom border-secondary border-opacity-25 py-3">
        <a href="{{ route('dashboard') }}" class="brand-link d-flex align-items-center gap-2 text-decoration-none px-3">
            <img src="{{ asset('backend/assets/img/AdminLTELogo.png') }}" alt="Logo" class="brand-image opacity-75 shadow" width="33" />
            <span class="brand-text fw-semibold fs-5">Admin Panel</span>
        </a>
    </div>

    <!-- Navigation -->
    <div class="sidebar-wrapper mt-2">
        <nav role="navigation" aria-label="Main navigation">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Hero Section -->
                <li class="nav-item {{ request()->routeIs('heroes.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('heroes.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-easel3-fill"></i>
                        <p>
                            Hero Section
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('heroes.index') }}" class="nav-link {{ request()->routeIs('heroes.index') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-list-ul"></i>
                                <p>Manage Hero</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('heroes.create') }}" class="nav-link {{ request()->routeIs('heroes.create') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Create Hero</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Portfolio Section -->
                <li class="nav-item {{ request()->routeIs('portfolios.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('portfolios.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-images"></i>
                        <p>
                            Portfolio
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('portfolios.index') }}" class="nav-link {{ request()->routeIs('portfolios.index') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-grid-3x3-gap-fill"></i>
                                <p>All Portfolios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('portfolios.create') }}" class="nav-link {{ request()->routeIs('portfolios.create') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Create Portfolio</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- About Section -->
                <li class="nav-item {{ request()->routeIs('about.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('about.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-person-vcard-fill"></i>
                        <p>
                            About Me
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('about.index') }}" class="nav-link {{ request()->routeIs('about.index') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-file-earmark-person-fill"></i>
                                <p>View About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about.create') }}" class="nav-link {{ request()->routeIs('about.create') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Create About</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Services Section -->
                <li class="nav-item {{ request()->routeIs('myServices.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('myServices.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-tools"></i>
                        <p>
                            My Services
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('myServices.index') }}" class="nav-link {{ request()->routeIs('myServices.index') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-layers-fill"></i>
                                <p>All Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('myServices.create') }}" class="nav-link {{ request()->routeIs('myServices.create') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Create Service</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Skills Section -->
                <li class="nav-item {{ request()->routeIs('skills.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('skills.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-trophy-fill"></i>
                        <p>
                            Skills
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('skills.index') }}" class="nav-link {{ request()->routeIs('skills.index') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-bar-chart-line-fill"></i>
                                <p>All Skills</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('skills.create') }}" class="nav-link {{ request()->routeIs('skills.create') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Create Skill</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<!--end::Sidebar-->
