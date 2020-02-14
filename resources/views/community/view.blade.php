@extends('layouts.admin')

@section('content')

<div class="row">
    @if (count($data->communitylist) == 0)
    <div class="card mo-mt-2">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-lg-4 offset-lg-1">
                    <div class="ex-page-content">
                        <h4 class="mb-4">This community does not have a user</h4>
                        <p class="mb-5">Please ensure that if there are mistakes you can make corrections directly to the <mark>GATE System</mark></p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1"><img src="{{ asset('template/images/error.png') }}" alt="" class="img-fluid mx-auto d-block"></div>
            </div>
        </div>
    </div>
    @else
        <div class="col-xl-12 mt-3">
        <h4 class="mt-2 header-title mb-4"><mark>{{ strtoupper($data->user->community_name) }}</mark> has <span class="badge badge-success">{{ count($data->communitylist) }} users</span></h4>
        </div>
        @foreach ($data->communitylist as $d)
            <div class="col-xl-4 col-md-6">
                <div class="card directory-card">
                    <div class="card-body">
                    <div class="float-left mr-4"><img src="{{ asset('template/images/dummy2.png') }}" alt="" class="img-fluid img-thumbnail rounded-circle thumb-lg"></div>
                        <h5 class="text-primary font-18 mt-0 mb-2">{{ ucwords($d->user->name) }}</h5>
                        <p class="mb-2">{{ strtolower($d->user->email) }}</p>
                        <p class="mb-2">Last login : <b>{{ humanDateRead($d->user->last_login) }}</b></p>
                        <hr>
                        <p class="mb-0"><b>{{ ucwords($d->user->name) }}</b> join in this community added by <b>{{ ucwords($d['addedby']->addedby) }}</b> {{ humanDateRead($d->datetime_added) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
