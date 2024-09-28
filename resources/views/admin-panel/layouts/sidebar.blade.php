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
                    <span>Dashboard3</span>
                </a>
            </li>

            <li class="menu-header">Page</li>
            <li class="@if (request()->is('datatables')) active @endif">
                <a aria-label="vanrsin" class="nav-link" href="{{ url('datatables') }}"><i class="fas fa-table"></i>
                    <span>Santri2</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
