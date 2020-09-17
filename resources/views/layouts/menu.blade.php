<li class="nav-item {{ Request::is('admin/settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.settings.index') }}">
        <i class="nav-icon icon-settings"></i>
        <span>@lang('models/settings.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/faqs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.faqs.index') }}">
        <i class="nav-icon icon-book-open"></i>
        <span>@lang('models/faqs.plural')</span>
    </a>
</li>


<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon icon-disc"></i> @lang('models/cars.plural')
    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item {{ Request::is('admin/carTypes*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.carTypes.index') }}">
                <i class="nav-icon icon-options"></i>
                <span>@lang('models/carTypes.plural')</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/cars*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.cars.index') }}">
                <i class="nav-icon icon-trophy"></i>
                <span>@lang('models/cars.plural')</span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon icon-compass"></i> @lang('models/locations.plural')
    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item {{ Request::is('admin/locations*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.locations.index') }}?type=2">
                <i class="nav-icon icon-map"></i>
                <span>@lang('models/locations.regions')</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/locations*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.locations.index') }}?type=3">
                <i class="nav-icon icon-direction"></i>
                <span>@lang('models/locations.cities')</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/locations*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.locations.index') }}?type=4">
                <i class="nav-icon icon-plane"></i>
                <span>@lang('models/locations.airports')</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/locations*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.locations.index') }}?type=5">
                <i class="nav-icon icon-location-pin"></i>
                <span>@lang('models/locations.subregions')</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/drivers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.drivers.index') }}">
        <i class="nav-icon icon-people"></i>
        <span>@lang('models/drivers.plural')</span>
    </a>
</li>

<li class="nav-item {{ Request::is('admin/customers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.customers.index') }}">
        <i class="nav-icon icon-user"></i>
        <span>@lang('models/customers.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/bookings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.bookings.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/bookings.plural')</span>
    </a>
</li>
