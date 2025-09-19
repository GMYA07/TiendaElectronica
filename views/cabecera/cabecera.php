<nav class="navbar navbar-expand-lg">
    <div class="container-fluid contenedorMenu">
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand contenedorLogo" href="./index.php?ruta=./views/principal/principal">
            <img class="logoNav" src="./Assets/img/logoEmpresa.png" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container contenedorListaItems">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 itemsMenu">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-th-large"></i> Categorías 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Computo y Tablets</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Mundo Gaming</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="promocionesMenu" aria-current="page" href="#"> <i class="fa fa-tags" aria-hidden="true"></i> Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php?ruta=./views/usuarios/usuarios"><i class="fa fa-user-o" aria-hidden="true"></i> Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><i class="fa fa-gamepad" aria-hidden="true"></i> Gaming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php?ruta=./views/catalogo/celular"> <i class="fa fa-laptop" aria-hidden="true"></i> Computacion</a>
                    </li>
                </ul>
            </div>
            <div class="container contenedorBotonesAcciones">
                <a href="./index.php?ruta=./views/inicioSesion/inicioSesion" class="botonAccion"><i class="fa fa-user" aria-hidden="true"></i></a>
                <a href="#" class="botonAccion"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</nav>