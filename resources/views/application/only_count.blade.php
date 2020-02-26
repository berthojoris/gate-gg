@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12 mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h5 class="text-primary mt-4">Total Member {{ number_format(count($unique)) }}</h5>
                            <p class="text-muted">You can download all member data with link above.</p>
                            <div class="mt-4">
                                <a href="{{ route('download_app_user', $id) }}" class="btn btn-primary btn-sm">Download Member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
