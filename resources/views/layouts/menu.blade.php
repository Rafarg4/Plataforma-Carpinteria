<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>USUARIOS</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>CATEGORIAS</span></a>
</li>

<li class="{{ Request::is('proveedors*') ? 'active' : '' }}">
    <a href="{{ route('proveedors.index') }}"><i class="fa fa-edit"></i><span>Proveedors</span></a>
</li>

