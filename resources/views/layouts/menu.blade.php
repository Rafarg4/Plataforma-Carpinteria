<li class="{{ Request::is('stocks*') ? 'active' : '' }}">
    <a href="{{ route('stocks.index') }}"><i class="fa fa-book"></i></i><span>Stocks</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Usuario</span></a>
</li>



<li class="{{ Request::is('depositos*') ? 'active' : '' }}">
    <a href="{{ route('depositos.index') }}"><i class="fa fa-edit"></i><span>Depositos</span></a>
</li>

