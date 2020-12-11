<li class="{{ Request::is('*users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>@lang('menu.Users')</span></a>
</li>
