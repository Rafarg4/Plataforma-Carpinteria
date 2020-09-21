<li class="{{ Request::is('stocks*') ? 'active' : '' }}">
    <a href="{{ route('stocks.index') }}"><i class="fa fa-book"></i></i><span>STOCK</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>USUARIO</span></a>
</li>



<li class="{{ Request::is('depositos*') ? 'active' : '' }}">
    <a href="{{ route('depositos.index') }}"><i class="fa fa-clone"></i><span>DEPOSITO</span></a>
</li>


