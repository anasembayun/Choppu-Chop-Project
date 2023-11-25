    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        {{-- <li class="nav-item">         
            <p class="sidebar-menu-title">GENERAL</p>
        </li>
        <li class="nav-item {{ Request::routeIs('list_contact') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('list_contact') }}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Contact</span>
            </a>
        </li> --}}
        {{-- <li class="nav-item {{ Request::routeIs('list_profile') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('list_profile') }}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Profile</span>
            </a>
        </li> --}}
        <li class="nav-item">         
            <p class="sidebar-menu-title">KELOLA WISATA</p>
        </li>
        <li class="nav-item {{ Request::routeIs('list_tourism') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('list_tourism') }}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Daftar Wisata</span>
            </a>
        </li>
        <li class="nav-item {{ Request::routeIs('list_gallery') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('list_gallery') }}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Daftar Galeri</span>
            </a>
        </li>
        <li class="nav-item">         
            <p class="sidebar-menu-title">KELOLA ARTIKEL</p>
        </li>
        <li class="nav-item {{ Request::routeIs('list_category') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('list_category') }}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Daftar Kategori</span>
            </a>
        </li>
        <li class="nav-item {{ Request::routeIs('list_artikel') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('list_artikel') }}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Daftar Artikel</span>
            </a>
        </li>
        {{-- <li class="nav-item {{ Request::routeIs('list_artikel') ? 'active' : '' }} {{ Request::routeIs('add_artikel') ? 'active' : '' }}" >
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="typcn typcn-briefcase menu-icon"></i>
            <span class="menu-title">Kelola UI</span>
            <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('list_slider') }}">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('list_profile') }}">Profile</a></li>
            </ul>
            </div>
        </li> --}}
        {{-- <li class="nav-item {{ Request::routeIs('list_tourism') ? 'active' : '' }} {{ Request::routeIs('add_tourism') ? 'active' : '' }} {{ Request::routeIs('list_gallery') ? 'active' : '' }}" >
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="typcn typcn-briefcase menu-icon"></i>
            <span class="menu-title">Kelola Wisata</span>
            <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('list_tourism') }}">Daftar Wisata</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('list_gallery') }}">Daftar Galeri</a></li>
            </ul>
            </div>
        </li> --}}
        {{-- <li class="nav-item {{ Request::routeIs('list_artikel') ? 'active' : '' }} {{ Request::routeIs('add_artikel') ? 'active' : '' }}" >
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="typcn typcn-briefcase menu-icon"></i>
            <span class="menu-title">Kelola Berita</span>
            <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('list_category') }}">Daftar Kategori</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('list_artikel') }}">Daftar Artikel</a></li>
            </ul>
            </div>
        </li> --}}
        </ul>
    </nav>