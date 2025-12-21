@extends('layouts.adminLayout')

@section('main')
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
                <!--begin::Col-->
                <div class="col-md-8">

                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Edit Portfolio</div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Form-->
                        <form action="{{ route('portfolios.update', $portfolio->id) }}"
                              method="POST"
                              enctype="multipart/form-data">
                            @csrf

                            <!--begin::Body-->
                            <div class="card-body">

                                <!-- Title -->
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input
                                        type="text"
                                        name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title', $portfolio->title) }}"
                                    >
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea
                                        name="description"
                                        class="form-control @error('description') is-invalid @enderror"
                                        rows="4"
                                    >{{ old('description', $portfolio->description) }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Image -->
                                <div class="mb-3">
                                    <label class="form-label">Portfolio Image</label>
                                    <input
                                        type="file"
                                        name="image"
                                        class="form-control @error('image') is-invalid @enderror"
                                        onchange="previewImage(event)"
                                    >
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    <!-- Current Image -->
                                    @if($portfolio->image)
                                        <div class="mt-2">
                                            <p class="mb-1 text-muted">Current Image</p>
                                            <img
                                                src="{{ asset($portfolio->image) }}"
                                                alt="Portfolio Image"
                                                style="width:120px; height:80px; object-fit:cover; border-radius:6px;"
                                            >
                                        </div>
                                    @endif

                                    <!-- New Preview -->
                                    <img id="imagePreview"
                                         src=""
                                         style="display:none; margin-top:10px; width:120px; height:80px; object-fit:cover; border-radius:6px;">
                                </div>

                            </div>
                            <!--end::Body-->

                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Update Portfolio
                                </button>

                                <a href="{{ route('portfolios.index') }}"
                                   class="btn btn-secondary">
                                    Back
                                </a>
                            </div>
                            <!--end::Footer-->

                        </form>
                        <!--end::Form-->
                    </div>

                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->

    <!-- Image Preview Script -->
    <script>
        function previewImage(event) {
            const preview = document.getElementById('imagePreview');
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.style.display = 'block';
        }
    </script>
@endsection
