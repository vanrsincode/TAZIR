<div class="main-sidebar sidebar-style-2 irounded-1 shadow" tabindex="0">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">PP SHOLAWAT</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Home</li>
            <li class="@if (request()->is('/', 'dashboard')) active @endif">
                <a aria-label="vanrsin" class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Page</li>
            <li class="@if (request()->is('perizinan')) active @endif">
                <a aria-label="vanrsin" class="nav-link" href="{{ url('perizinan') }}"><i class="fas fa-table"></i>
                    <span>Perizinan</span>
                </a>
            </li>
            <li class="@if (request()->is('santri')) active @endif">
                <a aria-label="vanrsin" class="nav-link" href="{{ url('santri') }}"><i class="fas fa-table"></i>
                    <span>Santri</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
