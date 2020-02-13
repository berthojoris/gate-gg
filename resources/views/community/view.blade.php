@extends('layouts.admin')

@section('content')

<div class="row">
    @if (count($data->communitylist) == 0)
        <div class="col-xl-12 col-md-12 mt-3">
            <div class="alert alert-info" role="alert"><strong>Heads up!</strong> This community is empty.</div>
        </div>
    @else
        <div class="col-xl-12 mt-3">
            <h4 class="mt-2 header-title mb-4"><mark>{{ $data->user->community_name }}</mark> User List</h4>
        </div>
        @foreach ($data->communitylist as $d)
            <div class="col-xl-4 col-md-6">
                <div class="card directory-card">
                    <div class="card-body">
                    <div class="float-left mr-4"><img src="{{ asset('template/images/dummy2.png') }}" alt="" class="img-fluid img-thumbnail rounded-circle thumb-lg"></div>
                        <h5 class="text-primary font-18 mt-0 mb-2">{{ ucwords($d->user->name) }}</h5>
                        <p class="mb-2">{{ strtolower($d->user->email) }}</p>
                        <p class="mb-2">Last login : <b>{{ humanDateRead($d->user->last_login) }}</b></p>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
