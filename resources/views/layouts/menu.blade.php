<li class="nav-item {{ Request::is('empleados*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('empleados.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Empleados</span>
    </a>
</li>
<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Usuarios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('empresas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('empresas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Empresas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('vehiculos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('vehiculos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Vehiculos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('clientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clientes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Clientes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('proveedores*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('proveedores.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Proveedores</span>
    </a>
</li>
<li class="nav-item {{ Request::is('inventarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('inventarios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Inventarios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('inventarioDets*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('inventarioDets.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Inventario Dets</span>
    </a>
</li>
