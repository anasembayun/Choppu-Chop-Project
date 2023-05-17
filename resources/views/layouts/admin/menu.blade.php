    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item">         
            <p class="sidebar-menu-title">GENERAL</p>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.contact') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.contact') }}">
            <i class="typcn typcn-message-typing menu-icon"></i>
            <span class="menu-title">Contact</span>
            </a>
        </li>
        <li class="nav-item">         
            <p class="sidebar-menu-title">MASTER UI</p>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.banner') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="typcn typcn-briefcase menu-icon"></i>
            <span class="menu-title">Home Page</span>
            <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.banner') }}">Banner</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.benefit') }}">Benefit</a></li>
            </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.partnership') ? 'active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="typcn typcn-briefcase menu-icon"></i>
            <span class="menu-title">Partnership Page</span>
            <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.partnership') }}">Partnership</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.terms') }}">Terms</a></li>
            </ul>
            </div>
        </li>
        <li class="nav-item">         
            <p class="sidebar-menu-title">SALES</p>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.customer') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.customer') }}">
            <i class="typcn typcn-user-outline menu-icon"></i>
            <span class="menu-title">Customer</span>
            </a>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.product') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.product') }}">
            <i class="typcn typcn-user-outline menu-icon"></i>
            <span class="menu-title">Product</span>
            </a>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.transaction') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.transaction') }}">
            <i class="typcn typcn-user-outline menu-icon"></i>
            <span class="menu-title">Transaction</span>
            </a>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.package') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.package') }}">
            <i class="typcn typcn-user-outline menu-icon"></i>
            <span class="menu-title">Package</span>
            </a>
        </li>
        <li class="nav-item">         
            <p class="sidebar-menu-title">FRANCHISE</p>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.material') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.material') }}">
            <i class="typcn typcn-user-outline menu-icon"></i>
            <span class="menu-title">Product Material</span>
            </a>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.partner') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.partner') }}">
            <i class="typcn typcn-user-outline menu-icon"></i>
            <span class="menu-title">Partner</span>
            </a>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.outlet') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.outlet') }}">
            <i class="typcn typcn-user-outline menu-icon"></i>
            <span class="menu-title">Outlet</span>
            </a>
        </li>
        <li class="nav-item {{ Request::routeIs('admin.stock-transaction') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.stock-transaction') }}">
            <i class="typcn typcn-user-outline menu-icon"></i>
            <span class="menu-title">Stock Transaction</span>
            </a>
        </li>
        </ul>
    </nav>