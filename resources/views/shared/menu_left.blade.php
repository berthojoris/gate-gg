<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->is('home') ? 'mm-active' : 'mm-show' }}"><i class="ti-home"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('user') }}" class="{{ request()->is('user') || request()->is('user/*') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-user-tie"></i><span>User</span></a></li>
                <li>
                    <a href="{{ route('application') }}" class="{{ request()->is('application') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-address-card"></i><span>Application</span></a>
                </li>
                <li>
                    <a href="{{ route('community') }}" class="{{ request()->is('community') || request()->is('community/*') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-user-friends"></i><span>Community</span></a>
                </li>
                <li class="menu-title">Points</li>
                <li>
                    <a href="{{ route('point') }}" class="{{ request()->is('point') || request()->is('point/*/view') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-dollar-sign"></i><span>User Point</span></a>
                    <a href="{{ route('point_category') }}" class="{{ request()->is('point/*') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-dollar-sign"></i><span>Point Category</span></a>
                </li>
                <li class="menu-title">Report</li>
                <li>
                    <a href="{{ route('report_point') }}" class="{{ request()->is('report/point') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-cloud-download-alt"></i><span>Point</span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
