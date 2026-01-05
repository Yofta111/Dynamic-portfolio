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
                            <div class="card-title">Create Client</div>
                        </div   >
                        <!--end::Header-->

                        <!--begin::Form-->
                        <form action="{{ route('clientTestimonial.store') }}"
                              method="POST"
                              enctype="multipart/form-data">
                            @csrf

                            <!--begin::Body-->
                            <div class="card-body">

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea
                                        name="description"
                                        class="form-control @error('description') is-invalid @enderror"
                                        rows="4"
                                        placeholder="Description"
                                    >{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Title -->
                                <div class="mb-3">
                                    <label class="form-label">Footer</label>
                                    <input
                                        type="text"
                                        name="footer"
                                        class="form-control @error('footer') is-invalid @enderror"
                                        placeholder="footer"
                                        value="{{ old('footer') }}"
                                    >
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>
                            <!--end::Body-->

                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Save Client
                                </button>

                                <a href="{{ route('clientTestimonial.index') }}"
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
@endsection
