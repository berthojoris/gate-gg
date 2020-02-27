<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                @if (in_array(auth()->user()->id, \App\Myuser::adminUser))

                @endif
                <li class="menu-title">Administrator</li>
                    <li>
                        <a href="{{ route('admin_user_add') }}" class="{{ request()->is('admin/user/add') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-user-plus"></i><span>User Add</span></a>
                    </li>
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->is('home') ? 'mm-active' : 'mm-show' }}"><i class="ti-home"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('user') }}" class="{{ request()->is('user') || request()->is('user/*') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-user-tie"></i><span>User</span></a></li>
                <li>
                    <a href="{{ route('application') }}" class="{{ request()->is('application') || request()->is('application/*') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-address-card"></i><span>Application</span></a>
                </li>
                <li>
                    <a href="{{ route('community') }}" class="{{ request()->is('community') || request()->is('community/*') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-user-friends"></i><span>Community</span></a>
                </li>
                <li class="menu-title">Points</li>
                <li>
                    <a href="{{ route('point') }}" class="{{ request()->is('point') || request()->is('point/*/history') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-dollar-sign"></i><span>User Point</span></a>
                    <a href="{{ route('point_category') }}" class="{{ request()->is('point/category') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-dollar-sign"></i><span>Point Category</span></a>
                </li>
                <li class="menu-title">Topup QR Scanner</li>
                <li>
                    <a href="{{ route('qrcode') }}" class="{{ request()->is('qrcode') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-barcode"></i><span>Master</span></a>
                    <a href="{{ route('qrcode_usage') }}" class="{{ request()->is('qrcode/*') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-barcode"></i><span>Usage</span></a>
                </li>
                <li class="menu-title">Tracking</li>
                <li>
                    <a href="{{ route('adminlog') }}" class="{{ request()->is('log') || request()->is('log/*') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-eye"></i><span>GATE Log</span></a>
                    <a href="{{ route('notification') }}" class="{{ request()->is('notification') || request()->is('notification/*') ? 'mm-active' : 'mm-show' }}"><i class="fas fa-eye"></i><span>GATE Notification</span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
