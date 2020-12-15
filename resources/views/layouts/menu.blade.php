<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-archive"></i><span>PRODUCTOS</span></a>
</li>
<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>CATEGORIAS</span></a>
</li>
<li class="{{ Request::is('stocks*') ? 'active' : '' }}">
    <a href="{{ route('stocks.index') }}"><i class="fa fa-book"></i></i><span>STOCK</span></a>
</li>

<li class="{{ Request::is('ventas*') ? 'active' : '' }}">
    <a href="{{ route('ventas.index') }}"><i class="fa fa-book"></i></i><span>Ventas</span></a>
<li class="{{ Request::is('depositos*') ? 'active' : '' }}">
    <a href="{{ route('depositos.index') }}"><i class="fa fa-clone"></i><span>DEPOSITO</span></a>
</li>

<li class="{{ Request::is('proveedors*') ? 'active' : '' }}">
    <a href="{{ route('proveedors.index') }}"><i class="fa fa-address-card"></i><span>PROVEEDORES</span></a>
</li>

<li class="{{ Request::is('transferencias*') ? 'active' : '' }}">
    <a href="{{ route('transferencias.index') }}"> <i class="fa fa-clipboard"></i><span>TRANSFERENCIA</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>USUARIO</span></a>

</li>


<li class="{{ Request::is('pedidos*') ? 'active' : '' }}">
    <a href="{{ route('pedidos.index') }}"><i class="fa fa-edit"></i><span>PEDIDOS</span></a>
</li>

<li class="{{ Request::is('produccions*') ? 'active' : '' }}">
    <a href="{{ route('produccions.index') }}"><i class="fa fa-edit"></i><span>PRODDUCION</span></a>

<li class="{{ Request::is('compras*') ? 'active' : '' }}">
    <a href="{{ route('compras.index') }}"><i class="fa fa-shopping-cart"></i><span>COMPRAS</span></a>

</li>



<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

