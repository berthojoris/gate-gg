@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-6 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-2">Add your new user</h4>
                <hr>
                <form id="update_user_form" action="{{ route('admin_user_update') }}" method="POST">
                    @csrf
                    <input class="form-control" type="hidden" value="" name="update_id">
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="name" name="name" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="email" id="email" name="email" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="password" id="password" name="password" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirm" class="col-sm-4 col-form-label">Confirm Password</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Assign To App</label>
                        <div class="col-sm-8">
                            <select name="assign_app" id="assign_app" class="form-control">
                                <option value="ADMIN">Administrator</option>
                                @foreach($selectItem as $key => $val)
                                    <option value="{!! $key !!}">{!! $val !!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirm" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="submit" value="Submit" class="btn btn-primary waves-effect waves-light float-right">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-3">

    </div>
</div>
@endsection
