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
                    <a href="{{ route('download_community') }}" class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light"><i class="mdi mdi-download mr-2"></i> Download</a>
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
                    <table id="dt_community" class="table mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>App</th>
                                <th>Community</th>
                                <th>#</th>
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
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endpush

@push('library_js')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
@endpush

@push('page_js')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
