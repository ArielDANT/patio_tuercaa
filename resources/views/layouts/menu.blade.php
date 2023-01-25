<li class="nav-item {{ Request::is('empleados*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('empleados.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Empleados</span>
    </a>
</li>
