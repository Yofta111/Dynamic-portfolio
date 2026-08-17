@extends('layouts.adminLayout')

@section('main')
    <div class="container-fluid">
        {{--
            Expected optional variables from the controller (all have safe fallbacks
            below so this view still renders untouched):
              $heroActive          bool
              $portfolioCount      int
              $serviceCount        int
              $skillCount          int
              $recentPortfolios    Collection|array of items with ->title, ->category, ->created_at, ->id
        --}}
        @php
            $heroActive = $heroActive ?? true;
            $portfolioCount = $portfolioCount ?? 0;
            $serviceCount = $serviceCount ?? 0;
            $skillCount = $skillCount ?? 0;
            $recentPortfolios = $recentPortfolios ?? collect();

            $categoryColors = [
                'Motion Design' => 'primary',
                'Web Development' => 'success',
                'Graphic Design' => 'warning',
                'Branding' => 'info',
                'UI/UX' => 'danger',
            ];
        @endphp

            <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <h3 class="fw-bold mb-1">Welcome back, {{ auth()->user()->name ?? 'Yoftahe' }}!</h3>
                <p class="text-muted mb-0">Here is an overview of your portfolio content and dynamic sections.</p>
            </div>
            <div>
                <a href="{{ route('portfolios.create') }}" class="btn btn-primary d-inline-flex align-items-center gap-2 shadow-sm">
                    <i class="bi bi-plus-lg"></i> Add New Portfolio
                </a>
            </div>
        </div>

        <!-- Quick Stats Cards Row -->
        <div class="row g-3 mb-4">
            <!-- Hero Section Status -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body d-flex align-items-center justify-content-between p-3">
                        <div>
                            <span class="text-muted fw-semibold fs-7 text-uppercase d-block mb-1">Hero Section</span>
                            <h4 class="fw-bold mb-0">
                                @if($heroActive)
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-secondary">Inactive</span>
                                @endif
                            </h4>
                        </div>
                        <div class="rounded-circle bg-primary bg-opacity-10 text-primary p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-easel3-fill fs-4"></i>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0 pt-0 pb-3 px-3">
                        <a href="{{ route('heroes.index') }}" class="text-decoration-none fs-7 fw-semibold text-primary d-flex align-items-center gap-1">
                            Manage Hero <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Portfolios -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body d-flex align-items-center justify-content-between p-3">
                        <div>
                            <span class="text-muted fw-semibold fs-7 text-uppercase d-block mb-1">Portfolios</span>
                            <h4 class="fw-bold mb-0">{{ $portfolioCount }}</h4>
                        </div>
                        <div class="rounded-circle bg-warning bg-opacity-10 text-warning p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-images fs-4"></i>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0 pt-0 pb-3 px-3">
                        <a href="{{ route('portfolios.index') }}" class="text-decoration-none fs-7 fw-semibold text-warning d-flex align-items-center gap-1">
                            View All Items <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Active Services -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body d-flex align-items-center justify-content-between p-3">
                        <div>
                            <span class="text-muted fw-semibold fs-7 text-uppercase d-block mb-1">My Services</span>
                            <h4 class="fw-bold mb-0">{{ $serviceCount }}</h4>
                        </div>
                        <div class="rounded-circle bg-success bg-opacity-10 text-success p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-tools fs-4"></i>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0 pt-0 pb-3 px-3">
                        <a href="{{ route('myServices.index') }}" class="text-decoration-none fs-7 fw-semibold text-success d-flex align-items-center gap-1">
                            Manage Services <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Skills -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body d-flex align-items-center justify-content-between p-3">
                        <div>
                            <span class="text-muted fw-semibold fs-7 text-uppercase d-block mb-1">Skills Listed</span>
                            <h4 class="fw-bold mb-0">{{ $skillCount }}</h4>
                        </div>
                        <div class="rounded-circle bg-danger bg-opacity-10 text-danger p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-trophy-fill fs-4"></i>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0 pt-0 pb-3 px-3">
                        <a href="{{ route('skills.index') }}" class="text-decoration-none fs-7 fw-semibold text-danger d-flex align-items-center gap-1">
                            Update Skills <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="row g-4">
            <!-- Quick Action Shortcuts -->
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-header bg-transparent border-0 pt-3 pb-0 px-4">
                        <h5 class="fw-bold mb-0"><i class="bi bi-lightning-charge-fill text-warning me-2"></i>Quick Actions</h5>
                    </div>
                    <div class="card-body px-4 py-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('heroes.create') }}" class="btn btn-outline-primary text-start d-flex align-items-center justify-content-between p-2">
                                <span><i class="bi bi-easel3-fill me-2"></i> Update Hero Content</span>
                                <i class="bi bi-chevron-right fs-7"></i>
                            </a>
                            <a href="{{ route('portfolios.create') }}" class="btn btn-outline-warning text-dark text-start d-flex align-items-center justify-content-between p-2">
                                <span><i class="bi bi-plus-square-fill me-2"></i> Add New Portfolio Item</span>
                                <i class="bi bi-chevron-right fs-7"></i>
                            </a>
                            <a href="{{ route('about.index') }}" class="btn btn-outline-info text-start d-flex align-items-center justify-content-between p-2">
                                <span><i class="bi bi-person-vcard-fill me-2"></i> Edit About Info</span>
                                <i class="bi bi-chevron-right fs-7"></i>
                            </a>
                            <a href="{{ route('skills.create') }}" class="btn btn-outline-danger text-start d-flex align-items-center justify-content-between p-2">
                                <span><i class="bi bi-trophy-fill me-2"></i> Add New Skill</span>
                                <i class="bi bi-chevron-right fs-7"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity / Overview Table -->
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-header bg-transparent border-0 pt-3 pb-2 px-4 d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0"><i class="bi bi-clock-history me-2 text-primary"></i>Recent Portfolio Additions</h5>
                        <a href="{{ route('portfolios.index') }}" class="btn btn-sm btn-light border fw-semibold">View All</a>
                    </div>
                    <div class="card-body p-0">
                        @if($recentPortfolios->count())
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th class="ps-4">Title</th>
                                        <th>Category</th>
                                        <th>Created At</th>
                                        <th class="text-end pe-4">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($recentPortfolios as $portfolio)
                                        <tr>
                                            <td class="ps-4 fw-semibold text-body">{{ $portfolio->title }}</td>
                                            <td>
                                                <span class="badge bg-{{ $categoryColors[$portfolio->category] ?? 'secondary' }} bg-opacity-10 text-{{ $categoryColors[$portfolio->category] ?? 'secondary' }} fw-medium px-2 py-1">
                                                    {{ $portfolio->category }}
                                                </span>
                                            </td>
                                            <td class="text-muted fs-7">{{ $portfolio->created_at->diffForHumans() }}</td>
                                            <td class="text-end pe-4">
                                                <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-sm btn-light border" title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-5 px-4">
                                <div class="rounded-circle bg-secondary bg-opacity-10 text-secondary d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="bi bi-inbox fs-3"></i>
                                </div>
                                <p class="text-muted mb-3">No portfolio items yet.</p>
                                <a href="{{ route('portfolios.create') }}" class="btn btn-sm btn-primary">
                                    <i class="bi bi-plus-lg me-1"></i> Add your first portfolio item
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
