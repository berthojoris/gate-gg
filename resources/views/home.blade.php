@extends('layouts.admin')

@section('content')
<div class="row">

    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">{{ number_format($totalUser) }}</h1>
                            <p class="text-muted">Total registered users</p>
                            <div class="mt-4"><a href="{{ route('user') }}" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">{{ $totalApp }}</h1>
                            <p class="text-muted">Total registered app</p>
                            <div class="mt-4"><a href="#" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">{{ $totalCommunity }}</h1>
                            <p class="text-muted">Total registered community</p>
                            <div class="mt-4"><a href="#" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">1.000.000</h1>
                            <p class="text-muted">Total users point</p>
                            <div class="mt-4"><a href="#" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
