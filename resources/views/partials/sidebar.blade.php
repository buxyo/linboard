<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <!-- Insert your logo SVG here or keep Sneat default -->
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">{{ config('app.name') }}</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
        </a>
    </div>

    <div class="menu-divider mt-0"></div>
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Example: Dashboard link -->
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div class="text-truncate">{{ __('Dashboard') }}</div>
            </a>
        </li>
    </ul>
</aside>
