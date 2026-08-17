<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body shadow-sm">
    <div class="container-fluid">
        <!-- Sidebar Toggle & Brand Quick Links -->
        <ul class="navbar-nav align-items-center">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list fs-4"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('dashboard') }}" class="nav-link fw-medium">Dashboard</a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('messages.index') }}" class="nav-link fw-medium">Messages</a>
            </li>
        </ul>

        <!-- Right Navbar -->
        <ul class="navbar-nav ms-auto align-items-center gap-2">
            <!-- Fullscreen Toggle -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
            </li>

            <!-- User Dropdown -->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle d-flex align-items-center gap-2" data-bs-toggle="dropdown">
                    <img src="{{ asset('backend/assets/img/user2-160x160.jpg') }}" class="user-image rounded-circle shadow-sm" alt="User Image" width="32" height="32" />
                    <span class="d-none d-md-inline fw-semibold">{{ Auth::user()->name ?? 'Yoftahe' }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end shadow border-0">
                    <li class="user-header text-bg-primary text-center p-3 rounded-top">
                        <img src="{{ asset('backend/assets/img/user2-160x160.jpg') }}" class="rounded-circle shadow-sm mb-2" alt="User Image" width="64" height="64" />
                        <p class="mb-0 fw-bold">{{ Auth::user()->name ?? 'Yoftahe' }}</p>
                        <small class="text-white-50">Admin & Content Manager</small>
                    </li>
                    <li class="user-footer d-flex justify-content-between p-2 bg-light rounded-bottom">
                        <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-person me-1"></i> Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-box-arrow-right me-1"></i> Sign out
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!--end::Header-->
