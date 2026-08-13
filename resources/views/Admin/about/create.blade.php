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
                            <div class="card-title">Create About Section</div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Form-->
                        <form action="{{ route('about.store') }}" method="POST">
                            @csrf

                            <!--begin::Body-->
                            <div class="card-body">

                                <!-- Description 1 -->
                                <div class="mb-3">
                                    <label class="form-label">Description 1</label>
                                    <textarea
                                        name="description"
                                        class="form-control @error('description') is-invalid @enderror"
                                        rows="4"
                                        placeholder="Yoftahe is a video editor and motion designer..."
                                    >{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Description 2 -->
                                <div class="mb-3">
                                    <label class="form-label">Description 2</label>
                                    <textarea
                                        name="description2"
                                        class="form-control @error('description2') is-invalid @enderror"
                                        rows="4"
                                        placeholder="The path started at Saint Joseph School..."
                                    >{{ old('description2') }}</textarea>
                                    @error('description2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <!--end::Body-->

                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Save About
                                </button>

                                <a href="{{ route('about.index') }}" class="btn btn-secondary">
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
@endsection
