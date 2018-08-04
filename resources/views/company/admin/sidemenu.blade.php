<div class="list-group">
    <a href="{{ route('company.admin') }}" class="list-group-item list-group-item-action {{ (Request::routeIs('company.admin') ? 'active' : '') }}">
        {{ __('Admin Dashboard') }}
    </a>
    <a href="{{ route('company.admin.users') }}" class="list-group-item list-group-item-action {{ (Request::routeIs(array('company.admin.users','company.admin.users.new','company.admin.users.edit')) ? 'active' : '') }}">
        {{ __('Users') }}
    </a>
</div>