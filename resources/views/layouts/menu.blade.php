<li class="nav-item {{ Request::is('admin/settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.settings.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/settings.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/faqs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.faqs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/faqs.plural')</span>
    </a>
</li>


<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon cui-puzzle"></i> @lang('models/cars.plural')
    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item {{ Request::is('admin/carTypes*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.carTypes.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>@lang('models/carTypes.plural')</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/cars*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.cars.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>@lang('models/cars.plural')</span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {{ Request::is('admin/locations*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.locations.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/locations.plural')</span>
    </a>
</li>
<li class="nav-item {{ Request::is('admin/drivers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.drivers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/drivers.plural')</span>
    </a>
</li>
