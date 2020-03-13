@extends('layouts.admin')

@section('content')
<style>
.rednotif {
    font-size: 11px;
    color: red;
}
.marginTop {
    margin-top: -20px;
}
</style>
<div class="row">
    <div class="col-lg-6 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-2">Update profile</h4>
                <hr>
                <form id="update_profile" action="{{ route('user_update_profile', $user->id) }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="email" id="email" name="email" value="{{ $user->email }}" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="password" id="password" name="password" value="" autocomplete="off">
                            <p class="rednotif">Leave empty if you don't want to change password</p>
                        </div>
                    </div>
                    <div class="form-group row marginTop">
                        <label for="password_confirm" class="col-sm-4 col-form-label">Confirm Password</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Phone</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="phone" id="phone" name="phone" value="{{ $user->phone }}" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Profile Icon</label>
                        <div class="col-sm-8">
                            <input type="file" class="filestyle" data-buttonname="btn-secondary">
                            <p class="rednotif">Image size must be 128 x 128</p>
                        </div>
                    </div>
                    <div class="form-group row marginTop">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="submit" value="Submit" class="btn btn-primary waves-effect waves-light float-right">
                        </div>
                    </div>
                </form>
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
<script src="{{ asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
@endpush



