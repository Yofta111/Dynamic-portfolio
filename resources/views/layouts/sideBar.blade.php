<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
                src="{{ asset('backend/assets/img/AdminLTELogo.png') }}"
                alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow"
            />

            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Admin Yoftahe</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation"
            >
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-person-lines-fill"></i>
                        <p>
                            Portfolio
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('portfolios.index')}}" class="nav-link active">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>All portfolio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('portfolios.create')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Create portfolio</p>
                            </a>
                        </li>
                    </ul>

                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
            <!--begin::Sidebar Menu-->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation"
            >
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-person-lines-fill"></i>
                        <p>
                            About
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('about.index')}}" class="nav-link active">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>All about</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about.create')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Create about</p>
                            </a>
                        </li>

                    </ul>

                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
            <!--begin::Sidebar Menu-->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation"
            >
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-person-lines-fill"></i>
                        <p>
                            My Services
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('myServices.index')}}" class="nav-link active">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>All My Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('myServices.create')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Create My Services</p>
                            </a>
                        </li>

                    </ul>

                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
            <!--begin::Sidebar Menu-->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation"
            >
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-person-lines-fill"></i>
                        <p>
                            Client Testimonial
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('clientTestimonial.index')}}" class="nav-link active">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>All Client Testimonial</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('clientTestimonial.create')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Create Client Testimonial</p>
                            </a>
                        </li>

                    </ul>

                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
