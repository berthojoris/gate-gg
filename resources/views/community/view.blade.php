@extends('layouts.admin')

@section('content')

<div class="row">
    @if (count($data) == 0)
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-5">
                            <div class="text-center faq-title pt-4 pb-4">
                                <div class="pt-3 pb-3">
                                    <i class="ti-comments text-primary h3"></i>
                                    <h5>Can't find what you are looking for?</h5>
                                    <p class="text-muted">This community <mark>does not have a user</mark>. Please ensure that if there
                                        are mistakes you can make corrections directly to the GATE System</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-xl-12 mt-3">
            <h4 class="mt-2 header-title mb-4"><mark>{{ strtoupper($data[0]->communityName->name) }}</mark> has <span class="badge badge-success">{{ count($data) }} users</span></h4>
        </div>
        @foreach ($data as $d)
            <div class="col-xl-4 col-md-6">
                <div class="card directory-card">
                    <div class="card-body">
                        <div class="float-left mr-4">
                            <img src="{{ asset('template/images/dummy2.png') }}"
                            class="img-fluid img-thumbnail rounded-circle thumb-lg"
                            />
                        </div>
                            <h5 class="text-primary font-18 mt-0 mb-2">{{ Illuminate\Support\Str::limit(Illuminate\Support\Str::upper($d->communityMember->name), 20, '...') }}</h5>
                            <p class="mb-2" data-toggle="tooltip" title="{{ strtolower($d->communityMember->email) }}">
                                {{ Illuminate\Support\Str::limit($d->communityMember->email, 30, '...') }}</p>
                            <p class="mb-2">Last login : <b>{{ humanDateRead($d->communityMember->last_login) }}</b></p>
                            <hr>
                            <p class="mb-0"><b>{{ ucwords($d->communityMember->name) }}</b> join in this community added by <b>{{ ucwords($d->addedBy->name) }}</b> {{ humanDateRead($d->datetime_added) }}</p>
                    </div>
                    <a href="{{ route('community_user_view', [
                        'id' => $id,
                        'iduser' => $d->communityMember->id
                    ]) }}" class="btn btn-primary waves-effect waves-light">View User</a>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection