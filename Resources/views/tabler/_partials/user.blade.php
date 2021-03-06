<div class="dropdown">
    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
        <img class="avatar" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
        <span class="ml-2 d-none d-lg-block">
            <span class="text-default">{{ Auth::user()->name }}</span>
            <small class="text-muted d-block mt-1">{{ Auth::user()->email }}</small>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="{!! url(config('tabler.urls.settings')) !!}">
            <i class="dropdown-icon fe fe-settings"></i> @lang('core::user.settings')
        </a>
        <a class="dropdown-item" href="{!! url(config('tabler.urls.logout')) !!}">
            <i class="dropdown-icon fe fe-log-out"></i> @lang('core::user.logout')
        </a>
    </div>
</div>