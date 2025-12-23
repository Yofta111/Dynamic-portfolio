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
                            <h3 class="card-title">All about</h3>

                            <a href="{{ route('about.create') }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle"></i> Add Abouts
                            </a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover align-middle">
                                <thead>
                                <tr>
                                    <th style="width: 60px">#</th>
                                    <th>Description</th>
                                    <th>image</th>
                                    <th style="width: 140px">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($abouts as $key => $about)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{ Str::limit($abouts->description, 50) }}
                                        </td>

                                        <td>
                                            @if($abouts->image)
                                                <img src="{{ asset($abouts->image) }}"
                                                     alt="About Image"
                                                     style="width: 80px; height: 60px; object-fit: cover; border-radius: 6px;">
                                            @else
                                                <span class="badge bg-secondary">No Image</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('about.edit', $abouts->id) }}"
                                               class="btn btn-info btn-sm"
                                               title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <a href="{{ route('about.delete', $abouts->id) }}"
                                               class="btn btn-danger btn-sm"
                                               title="Delete"
                                               onclick="return confirm('Are you sure you want to delete this abouts?')">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">
                                            No about found
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
