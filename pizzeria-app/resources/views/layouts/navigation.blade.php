<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm border-bottom border-danger">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="https://cdn-icons-png.flaticon.com/512/3595/3595455.png" alt="Logo Pizzería" width="30" height="30">
            <span class="ms-2 fw-bold">PizzeríaApp</span>
        </a>

        <!-- Botón hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Dropdown único -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="menuDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        📂 Menú
                    </a>
                    <ul class="dropdown-menu">
                        <li><h6 class="dropdown-header">📊 Panel</h6></li>
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">🍕 Dashboard</a></li>

                        <li><hr class="dropdown-divider"></li>

                        <li><h6 class="dropdown-header">🧾 Ventas</h6></li>
                        <li><a class="dropdown-item" href="{{ route('clients.index') }}">💼 Clientes</a></li>
                        <li><a class="dropdown-item" href="{{ route('orders.index') }}">📦 Órdenes</a></li>

                        <li><hr class="dropdown-divider"></li>

                        <li><h6 class="dropdown-header">🏭 Producción</h6></li>
                        <li><a class="dropdown-item" href="{{ route('pizzas.index') }}">🍕 Pizzas</a></li>
                        <li><a class="dropdown-item" href="{{ route('pizza-sizes.index') }}">📏 Tamaños Pizza</a></li>
                        <li><a class="dropdown-item" href="{{ route('ingredients.index') }}">🧂 Ingredientes</a></li>
                        <li><a class="dropdown-item" href="{{ route('extra-ingredients.index') }}">➕ Ingredientes Extra</a></li>
                        <li><a class="dropdown-item" href="{{ route('pizzaingredients.index') }}">🧂🍕 Pizza Ingredientes</a></li>

                        <li><hr class="dropdown-divider"></li>

                        <li><h6 class="dropdown-header">🏗️ Materia Prima</h6></li>
                        <li><a class="dropdown-item" href="{{ route('rawmaterials.index') }}">⚙️ Material Crudo</a></li>
                        <li><a class="dropdown-item" href="{{ route('pizzarawmaterials.index') }}">⚙️🍕 Pizza Crudo</a></li>

                        <li><hr class="dropdown-divider"></li>

                        <li><h6 class="dropdown-header">📦 Compras</h6></li>
                        <li><a class="dropdown-item" href="{{ route('suppliers.index') }}">🏢 Proveedores</a></li>
                        <li><a class="dropdown-item" href="{{ route('purchases.index') }}">🛒 Compras</a></li>

                        <li><hr class="dropdown-divider"></li>

                        <li><h6 class="dropdown-header">👥 Personal</h6></li>
                        <li><a class="dropdown-item" href="{{ route('employees.index') }}">💻 Empleados</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Usuario -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">👤 Perfil</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">🚪 Cerrar sesión</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
