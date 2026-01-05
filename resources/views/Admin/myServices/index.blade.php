@extends('layouts.adminLayout')

@section('main')
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">

            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">All Services</h3>

                            <a href="{{ route('myServices.create') }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle"></i> Add Service
                            </a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover align-middle">
                                <thead>
                                <tr>
                                    <th style="width: 60px">#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th style="width: 140px">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($myServices as $key => $myService)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        <td>{{ $myService->title }}</td>

                                        <td>
                                            {{ Str::limit($myService->description, 50) }}
                                        </td>
                                        <td>
                                            <a href="{{ route('myServices.edit', $myService->id) }}"
                                               class="btn btn-info btn-sm"
                                               title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <a href="{{ route('myServices.delete', $myService->id) }}"
                                               class="btn btn-danger btn-sm"
                                               title="Delete"
                                               onclick="return confirm('Are you sure you want to delete this Service?')">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">
                                            No Service found
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div>
            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
