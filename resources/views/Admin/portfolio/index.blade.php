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
                        <div class="card-header"><h3 class="card-title">Bordered Table</h3></div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="align-middle">
                                    <td>1.</td>
                                    <td>Update software</td>
                                    <td>Update software</td>
                                    <td>Update software</td>
                                    <td>
                                        <a href="#" class="btn btn-info" title="Edit Data"> <i class="bi bi-pencil-square"></i> </a>
                                        <a href="#" class="btn btn-danger" id="delete" title="Delete Data" ><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
