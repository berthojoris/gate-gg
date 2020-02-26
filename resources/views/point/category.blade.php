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
                    <a href="{{ route('download_point_category') }}"><img src="{{ asset('template/images/excel.png') }}" alt="Download" class="iconExcel"></a>
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
                    <table id="dt_point_category" class="table mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Name</th>
                                <th>Application</th>
                                <th>Action</th>
                                <th>Rule</th>
                                <th>Date Add</th>
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
<script src="{{ asset('template/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/numeral.min.js') }}"></script>
@endpush

@push('page_js')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
