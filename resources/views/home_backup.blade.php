@extends('layouts.admin')

@section('content')
<div class="row">

    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Sales Report</h4>
                <div class="cleafix">
                    <p class="float-left"><i class="mdi mdi-calendar mr-1 text-primary"></i> Jan 01 - Jan 31</p>
                    <h5 class="font-18 text-right">$4230</h5></div>
                <div id="ct-donut" class="ct-chart wid"></div>
                <div class="mt-4">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <td><span class="badge badge-primary">Desk</span></td>
                                <td>Desktop</td>
                                <td class="text-right">54.5%</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-success">Mob</span></td>
                                <td>Mobile</td>
                                <td class="text-right">28.0%</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-warning">Tab</span></td>
                                <td>Tablets</td>
                                <td class="text-right">17.5%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Activity</h4>
                <ol class="activity-feed">
                    <li class="feed-item">
                        <div class="feed-item-list"><span class="date">Jan 22</span> <span class="activity-text">Responded to need “Volunteer Activities”</span></div>
                    </li>
                    <li class="feed-item">
                        <div class="feed-item-list"><span class="date">Jan 20</span> <span class="activity-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui deleniti atque...<a href="#" class="text-success">Read more</a></span></div>
                    </li>
                    <li class="feed-item">
                        <div class="feed-item-list"><span class="date">Jan 19</span> <span class="activity-text">Joined the group “Boardsmanship Forum”</span></div>
                    </li>
                    <li class="feed-item">
                        <div class="feed-item-list"><span class="date">Jan 17</span> <span class="activity-text">Responded to need “In-Kind Opportunity”</span></div>
                    </li>
                    <li class="feed-item">
                        <div class="feed-item-list"><span class="date">Jan 16</span> <span class="activity-text">Sed ut perspiciatis unde omnis iste natus error sit rem.</span></div>
                    </li>
                </ol>
                <div class="text-center"><a href="#" class="btn btn-primary">Load More</a></div>
            </div>
        </div>
    </div>

    <div class="col-xl-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="py-4"><i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                            <h5 class="text-primary mt-4">Order Successful</h5>
                            <p class="text-muted">Thanks you so much for your order.</p>
                            <div class="mt-4"><a href="#" class="btn btn-primary btn-sm">Chack Status</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="text-center text-white py-4">
                            <h5 class="mt-0 mb-4 text-white-50 font-16">Top Product Sale</h5>
                            <h1>1452</h1>
                            <p>Computer</p>
                            <p class="text-white-50 mb-0">At solmen va esser necessi far uniform myth... <a href="#" class="text-white">View more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Client Reviews</h4>
                        <p class="text-muted mb-5">" Everyone realizes why a new common language would be desirable one could refuse to pay expensive translators it would be necessary. "</p>
                        <div class="float-right mt-2"><a href="#" class="text-primary"><i class="mdi mdi-arrow-right h5"></i></a></div>
                        <h6 class="mb-0"><img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle mr-2"> James Athey</h6></div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
