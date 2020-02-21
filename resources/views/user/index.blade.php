@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Advanced Download</h4>
                <p class="text-muted m-b-20">You can filter all user or spesific condition</p>
                <div class="btn-group m-b-10">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter data to download</button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
                        <a class="dropdown-item" href="{{ route('download_user') }}">All User Data</a>
                        <a class="dropdown-item" href="{{ route('download_user_man') }}">Man Only</a>
                        <a class="dropdown-item" href="{{ route('download_user_woman') }}">Woman Only</a>
                        <a class="dropdown-item" href="{{ route('download_user_week') }}">Login In This Week</a>
                        <a class="dropdown-item" href="{{ route('download_user_month') }}">Login In This Month</a>
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
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('user.edit')
@endsection

@push('library_css')
<link href="{{ asset('template/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('template/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('template/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
{{-- <link href="{{ asset('template/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"> --}}
@endpush

@push('library_js')
<script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
{{-- <script src="{{ asset('template/plugins/sweet-alert2/sweetalert2.min.js') }}"></script> --}}
@endpush

@push('page_js')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
