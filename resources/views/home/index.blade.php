@extends('layouts.admin')

@section('content')
<div class="row">

    <div class="col-xl-12 mt-3">
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
                            <div class="mt-4"><a href="{{ route('application') }}" class="btn btn-primary btn-sm">Open Detail</a></div>
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
                            <div class="mt-4"><a href="{{ route('community') }}" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">{{ number_format($totalPoint) }}</h1>
                            <p class="text-muted">Total users has point</p>
                            <div class="mt-4"><a href="{{ route('point') }}" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">{{ number_format($totalQrCode) }}</h1>
                            <p class="text-muted">Total Master QRCode</p>
                            <div class="mt-4"><a href="{{ route('qrcode') }}" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">{{ number_format($totalQrCodeUsage) }}</h1>
                            <p class="text-muted">Total QRCode Usage</p>
                            <div class="mt-4"><a href="{{ route('qrcode_usage') }}" class="btn btn-primary btn-sm">Open Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection