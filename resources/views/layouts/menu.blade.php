<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Usuario</span></a>
</li>

<li class="{{ Request::is('stocks*') ? 'active' : '' }}">
    <a href="{{ route('stocks.index') }}"><i class="fa fa-edit"></i><span>Stocks</span></a>
</li>

