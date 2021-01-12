@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12 mt-3">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card pricing-box">
                    <div class="card-body">
                        <div class="mb-2 pt-3 pb-1">
                            <div class="text-left">
                                @if (count($comm) < 1)
                                    <h5 class="mt-0">User Has No Community</h5>
                                @else
                                    <h5 class="mt-0">User Has Community</h5>
                                @endif
                                <p class="text-muted">For user with ID {{ $id }}</p>
                            </div>
                        </div>
                        @if (count($comm) < 1)
                            <div class="alert alert-info" role="alert">
                                <strong>Heads up!</strong> This user has no community.
                            </div>
                        @else
                            <div class="pricing-features mb-4">
                                @foreach ($comm as $uc)
                                    <p><i class="mdi mdi-check text-primary mr-2"></i> {{ $uc->application->name }}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
