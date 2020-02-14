@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-3">
        @include('flash::message')
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dt_notification" class="table mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Level</th>
                                <th>Recipient User</th>
                                <th>Datetime</th>
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
