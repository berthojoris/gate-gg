@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Generate To CSV</h4>
                <div class="btn-group m-b-10">
                    <a href="{{ route('download_point_by_id', $id) }}" class="btn btn-success">Download</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-2 header-title mb-4">Point History</h4>
                <ol class="activity-feed">
                    @foreach ($data as $d)
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($d->datetime_added))->diffForHumans() }}</span>
                                <span class="activity-text">Topup amount <mark>{{ number_format($d->amount) }}</mark>
                                    @if ($d->application)
                                        from <mark>{{ optional($d->application)->name }}</mark>
                                    @endif and status is <b>{{ $d->status }}</b>
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
