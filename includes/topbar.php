<header class="mb-0">
    <nav class="navbar navbar-expand navbar-light navbar-top">
        <div class="container-fluid">
        <a href="#" class="burger-btn d-block">
            <i class="bi bi-justify fs-3"></i>
        </a>

        <!-- boton para desaparecer menu lateral -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-lg-0">
            <!-- numero de landcoins -->
            <li class="nav-item dropdown me-3">
                <a
                class="nav-link "
                href="#"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                > 
                Tienes actualmente <i class="fs-4">5 </i> LandCoins
                </a>
            </li>
            <!-- fin landcoin -->
            </ul>

            <!-- perfil usuario y desplegable -->
            <div class="dropdown">
            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-menu d-flex">
                <div class="user-name text-end me-2">
                    <h6 class="mb-0 text-gray-600">Eduardo</h6>
                    <p class="mb-0 text-sm text-gray-600">Aguirrebeña</p>
                </div>
                <div class="user-img d-flex align-items-center">
                    <div class="avatar avatar-md">
                    <img src="assets/images/faces/2.jpg" />
                    </div>
                </div>
                </div>
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="dropdownMenuButton"
                style="min-width: 11rem"
            >
                <li>
                <h6 class="dropdown-header">Bienvenido, Eduardo</h6>
                </li>
                <li>
                <a class="dropdown-item" href="#">
                    <i class="icon-mid bi bi-person me-2"></i> Mi Perfil
                </a>
                </li>
                <li>
                <a class="dropdown-item" href="#">
                    <i class="icon-mid bi bi-gear me-2"></i> Configuración
                </a>
                </li>
                <li>
                <a class="dropdown-item" href="#">
                    <i class="icon-mid bi bi-wallet me-2"></i> Billetera
                </a>
                </li>
                <li>
                <hr class="dropdown-divider" />
                </li>
                <li>
                <a class="dropdown-item" href="#">
                    <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                    Cerrar Sesión
                </a>
                </li>
            </ul>
            </div><!-- fin usuario -->
            
        </div>
        </div>
    </nav>
    </header>