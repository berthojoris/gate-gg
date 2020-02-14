@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12 mt-3">
        <div class="row">
            @foreach ($data as $d)
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h1 class="text-primary mt-2">{{ $d->title }}</h1>
                            <p class="text-muted">Testing</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
