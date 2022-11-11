<div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu mt-2">
        <li class="br-menu-item">
            <a href="#" class="br-menu-link">
                <i class="menu-item-icon icon ion-ios-home tx-24"></i>
                <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href=""
                class="br-menu-link {{ Request::is('admin/blank') ? 'active' : '' }}">
                <i class="menu-item-icon icon ion-document tx-24"></i>
                <span class="menu-item-label">BlankBoard</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon icon icon ion-person-stalker tx-20"></i>
                <span class="menu-item-label">User Manager</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="#" class="sub-link">All User</a></li>
                <li class="sub-item"><a href="#" class="sub-link">All Role</a></li>
            </ul>
        </li>
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon icon ion-grid tx-24"></i>
                <span class="menu-item-label">Category</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('admin.category') }}" class="sub-link">All Category</a></li>
                <li class="sub-item"><a href="#" class="sub-link">All Sub Category</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Brand</a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon icon ion-grid tx-24"></i>
                <span class="menu-item-label">Coupon</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('coupon.create') }}" class="sub-link">Add Coupon</a></li>
                <li class="sub-item"><a href="{{ route('coupon.manage') }}" class="sub-link">Manage Coupon</a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link">
                <i class="menu-item-icon icon ion-gear-a tx-22"></i>
                <span class="menu-item-label">Setting</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="{{ url('/') }}" class="br-menu-link" target="_blank">
                <i class="menu-item-icon icon ion-help-buoy tx-22"></i>
                <span class="menu-item-label">Live Visit</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
            <a href="{{ route('logout') }}" class="br-menu-link" target="_blank">
                <i class="menu-item-icon icon ion-power tx-22 text-danger"></i>
                <span class="menu-item-label">Logout</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
    </ul><!-- br-sideleft-menu -->
    <br>
</div><!-- br-sideleft -->
