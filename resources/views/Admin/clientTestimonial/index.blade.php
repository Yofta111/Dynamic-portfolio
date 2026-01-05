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
                            <h3 class="card-title">All Clients</h3>

                            <a href="{{ route('clientTestimonial.create') }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle"></i> Add client
                            </a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover align-middle">
                                <thead>
                                <tr>
                                    <th style="width: 60px">#</th>

                                    <th>Description</th>
                                    <th>footer</th>
                                    <th style="width: 140px">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($clients as $key => $client)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{ Str::limit($client->description, 50) }}
                                        </td>
                                        <td>{{ $client->footer }}</td>
                                        <td>
                                            <a href="{{ route('clientTestimonial.edit', $client->id) }}"
                                               class="btn btn-info btn-sm"
                                               title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <a href="{{ route('clientTestimonial.delete', $client->id) }}"
                                               class="btn btn-danger btn-sm"
                                               title="Delete"
                                               onclick="return confirm('Are you sure you want to delete this client?')">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">
                                            No client found
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
