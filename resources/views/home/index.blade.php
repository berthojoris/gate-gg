@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12 mt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">{{ $totalCommunity }}</h1>
                            <p class="text-muted">Community registered</p>
                            <div class="mt-4"><a href="{{ route('community') }}" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">{{ number_format($userRegistered) }}</h1>
                            <p class="text-muted">User registered</p>
                            <div class="mt-4"><a href="{{ route('user') }}" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">{{ number_format($totalPoint) }}</h1>
                            <p class="text-muted">Users has points</p>
                            <div class="mt-4"><a href="{{ route('point') }}" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page_js')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
