@extends('layouts.admin')

@section('content')
<div class="row">
    @if (count($unique) == 0)
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-5">
                            <div class="text-center faq-title pt-4 pb-4">
                                <div class="pt-3 pb-3">
                                    <i class="ti-comments text-primary h3"></i>
                                    <h5>Can't find what you are looking for?</h5>
                                    <p class="text-muted">This application does not have a user. Please ensure that if there are mistakes you can make corrections directly to the GATE System</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-xl-3 mt-3">
            <h4 class="mt-2 header-title mb-4"><mark>Application</mark> has <span class="badge badge-success">{{ number_format(count($unique)) }} users</span></h4>
        </div>
        @if (count($unique) > 5000)
            <div class="col-md-9 mt-3 text-right">
                <a href="{{ route('download_app_user', $id) }}"><img src="{{ asset('template/images/html.png') }}" alt="Download" class="iconExcel"></a>
            </div>
        @else
            <div class="col-md-9 mt-3 text-right">
                <a href="{{ route('download_app_user', $id) }}"><img src="{{ asset('template/images/excel.png') }}" alt="Download" class="iconExcel"></a>
            </div>
        @endif

        @foreach ($unique as $d)
            <div class="col-xl-4 col-md-6">
                <div class="card directory-card">
                    <div class="card-body">
                    <div class="float-left mr-4"><img src="{{ asset('template/images/dummy2.png') }}" alt="" class="img-fluid img-thumbnail rounded-circle thumb-lg"></div>
                        <h5 class="text-primary font-18 mt-0 mb-2">{{ ucwords($d->user->name) }}</h5>
                        <p class="mb-2" data-toggle="tooltip" title="{{ strtolower($d->user->email) }}">{{ Illuminate\Support\Str::limit($d->user->email, 28, '...') }}</p>
                        <p class="mb-2">Last login : <b>{{ humanDateRead($d->user->last_login) }}</b></p>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
{{-- <div class="row">
    <div class="col-xl-5 mt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h5 class="text-primary mt-4">Total Member {{ number_format(count($unique)) }}</h5>
                            <p class="text-muted">You can see all user with link above.</p>
                            <div class="mt-4"><a href="#" class="btn btn-primary btn-sm">Chack Status</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
