@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">You can download this data</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div class="float-right d-none d-md-block">
                    <div class="dropdown">
                    <a href="{{ route('download_user') }}" class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light"><i class="mdi mdi-download mr-2"></i> Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        @include('flash::message')
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dt_user" class="table mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Last Login</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('library_css')
<link href="{{ asset('template/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('template/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('template/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('library_js')
<script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
@endpush

@push('page_js')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
