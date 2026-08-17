@extends('layouts.adminLayout')

@section('main')
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- User Summary Card -->
                    <div class="col-md-3">
                        <div class="card card-warning card-outline bg-white shadow-sm">
                            <div class="card-body box-profile text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg"
                                     alt="User profile picture">

                                <h3 class="profile-username text-center text-dark mt-2">{{ Auth::user()->name }}</h3>
                                <p class="text-muted text-center">{{ Auth::user()->email }}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item bg-white">
                                        <b>Joined</b> <a class="float-right text-warning font-weight-bold">{{ Auth::user()->created_at->format('M Y') }}</a>
                                    </li>
                                    <li class="list-group-item bg-white">
                                        <b>Status</b> <a class="float-right text-success font-weight-bold">Active</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Settings Tabs -->
                    <div class="col-md-9">
                        <div class="card bg-white shadow-sm">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#information" data-toggle="tab">
                                            <i class="fas fa-user-edit mr-1"></i> Profile Info
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#password" data-toggle="tab">
                                            <i class="fas fa-key mr-1"></i> Update Password
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-danger" href="#delete-account" data-toggle="tab">
                                            <i class="fas fa-trash-alt mr-1"></i> Delete Account
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- Profile Info Tab -->
                                    <div class="active tab-pane" id="information">
                                        @include('profile.partials.update-profile-information-form')
                                    </div>

                                    <!-- Password Tab -->
                                    <div class="tab-pane" id="password">
                                        @include('profile.partials.update-password-form')
                                    </div>

                                    <!-- Delete Account Tab -->
                                    <div class="tab-pane" id="delete-account">
                                        @include('profile.partials.delete-user-form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Required Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
@endsection
