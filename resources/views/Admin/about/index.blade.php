@extends('layouts.adminLayout')

@section('main')

    <div class="container-fluid">

        {{-- Page Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
                     <a href="{{ route('about.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add About
            </a>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- About Table --}}
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">About Sections</h5>
            </div>

            <div class="card-body">

                @if($abouts->count() > 0)

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">

                            <thead>
                            <tr>
                                <th style="width: 60px;">#</th>
                                <th>Description 1</th>
                                <th>Description 2</th>
                                <th style="width: 180px;">Actions</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($abouts as $key => $about)

                                <tr>

                                    <td>
                                        {{ $key + 1 }}
                                    </td>

                                    <td>
                                        {{ Str::limit($about->description, 100) }}
                                    </td>

                                    <td>
                                        {{ Str::limit($about->description2, 100) }}
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            {{-- Edit --}}
                                            <a href="{{ route('about.edit', $about->id) }}"
                                               class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                                Edit
                                            </a>

                                            {{-- Delete --}}
                                            <form action="{{ route('about.delete', $about->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this About section?');">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </button>

                                            </form>

                                        </div>
                                    </td>

                                </tr>

                            @endforeach

                            </tbody>

                        </table>
                    </div>

                @else

                    <div class="text-center py-5">

                        <i class="fas fa-user fa-3x text-muted mb-3"></i>

                        <h5>No About Section Found</h5>

                        <p class="text-muted">
                            You haven't created an About section yet.
                        </p>

                        <a href="{{ route('about.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Create About Section
                        </a>

                    </div>

                @endif

            </div>
        </div>

    </div>

@endsection
