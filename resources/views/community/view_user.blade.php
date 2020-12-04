@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">User Detail</h4>
                <p class="text-muted m-b-20">You can see all user registred <a href="{{ route('user') }}" class="btn btn-outline-primary waves-effect waves-light">Here</a>
                @if (!empty(url()->previous()))
                Or <a class="btn btn-outline-primary waves-effect waves-light" href="{{ route('community') }}">Back To Community List</a></p>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                    <input class="form-control" readonly type="text" value="{{ $data->name }}" id="name" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                    <input class="form-control" readonly type="text" value="{{ $data->email }}" id="email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Date of birth</label>
                    <div class="col-sm-8">
                    <input class="form-control" readonly type="text" value="{{ indonesianDate($data->dob) }}" id="date_of_birth" name="date_of_birth">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Date Joined</label>
                    <div class="col-sm-8">
                    <input class="form-control" readonly type="text" value="{{ indonesianDate($data->date_joined) }}" id="date_joined" name="date_joined">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Is Active</label>
                    <div class="col-sm-8">
                    @if ($data->is_active == 1)
                    <input class="form-control" readonly type="text" value="Active" id="is_active" name="date_joined">
                    @else
                    <input class="form-control" readonly type="text" value="Nonactive" id="is_active" name="date_joined">
                    @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">City</label>
                    <div class="col-sm-8">
                        <input class="form-control" readonly type="text" value="{{ $data->city->name }}" id="city" name="city">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-4 col-form-label">Last Update</label>
                    <div class="col-sm-8">
                        <input class="form-control" readonly type="text" value="{{ indonesianDateTime($data->datetime_updated) }}" id="city" name="city">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection