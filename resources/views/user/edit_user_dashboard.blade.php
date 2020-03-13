@extends('layouts.admin')

@section('content')
<style>
.rednotif {
    font-size: 11px;
    color: red;
}
</style>
<div class="row">
    <div class="col-lg-6 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-2">Create or update user</h4>
                <hr>
                <form id="update_user_form" action="{{ route('admin_user_update', $user->id) }}" method="POST">
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
                                <option value="ALL" {{ ($user->userprivilege->assign_to == 'ALL') ? 'selected' : '' }}>ALL</option>
                                @foreach($selectItem as $key => $val)
                                    <option value="{{ $key }}" {{ ($user->userprivilege->assign_to == $key) ? 'selected' : '' }}>{{ $val }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Privilege</label>
                        <div class="col-sm-8">
                            <select name="privilege" id="privilege" class="form-control">
                                <option value="USER" {{ ($user->userprivilege->privilege == 'USER') ? 'selected' : '' }}>USER</option>
                                <option value="ADMIN" {{ ($user->userprivilege->privilege == 'ADMIN') ? 'selected' : '' }}>ADMINISTRATOR</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <select name="status" id="status" class="form-control">
                                <option value="ACTIVE" {{ ($user->userprivilege->status == 'ACTIVE') ? 'selected' : '' }}>ACTIVE</option>
                                <option value="NONACTIVE" {{ ($user->userprivilege->status == 'NONACTIVE') ? 'selected' : '' }}>NONACTIVE</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_confirm" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="submit" value="Update" class="btn btn-primary waves-effect waves-light float-right">
                            <a href="{{ route('admin_user_add') }}" class="btn btn-info waves-effect waves-light float-right mr-1">Back to create</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-2">List user</h4>
                <hr>
                <div class="table-responsive">
                    <table class="table table-sm m-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Privileges</th>
                                <th>Status</th>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->userprivilege->privilege }}</td>
                                <td><span class="badge badge-{{ ($user->userprivilege->status == "ACTIVE") ? "success" : "danger" }}">{{ $user->userprivilege->status }}</span></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="{{ route('admin_user_edit', $user->id) }}"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
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
