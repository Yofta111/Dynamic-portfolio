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
                    <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header"><div class="card-title">Create portfolio</div></div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form>
                            <!--begin::Body-->
                            <div class="card-body">
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Title"
                                    aria-label="default input example"
                                />
                                <br />
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Description"
                                    aria-label="default input example"
                                />
                                <br />
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02" />
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!--end::Footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Quick Example-->
                    <!--begin::Input Group-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
