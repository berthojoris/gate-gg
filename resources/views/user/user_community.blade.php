@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-12 mt-3">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card pricing-box">
                    <div class="card-body">
                        @if (count($communityName) < 1)
                            <h4 class="mt-0 header-title">This user is not registered in any community</h4>
                        @else
                            <h4 class="mt-0 header-title">This user is registered in {{ count($communityName) }}
                                @if (count($communityName) == 1)
                                    community
                                @else
                                    communities
                                @endif
                            </h4>
                            <ul class="list-unstyled">
                                <li>
                                    <ul>
                                        @foreach ($communityName as $commName)
                                            <li>{{ Illuminate\Support\Str::upper($commName->name) }}</li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
