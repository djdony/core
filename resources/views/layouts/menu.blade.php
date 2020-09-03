<li class="nav-item {{ Request::is('admin/settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.settings.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>@lang('models/settings.plural')</span>
    </a>
</li>
