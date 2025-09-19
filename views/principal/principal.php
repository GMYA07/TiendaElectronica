<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <section class="hero-section">
        <div class="floating-elements"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">Tecnología de Última Generación</h1>
                        <p class="hero-subtitle">Descubre los mejores productos tecnológicos con la mejor relación calidad-precio del mercado</p>
                        <a href="#products" class="btn btn-hero">
                            <i class="fas fa-rocket mr-2"></i>Explorar Productos
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <i class="fas fa-laptop" style="font-size: 15rem;"></i>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="container mt-5 contenedorTitulo">
    <h2>Lo más vendido</h2>
</div>


<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-fluid w-75">
                <div class="row">
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-fluid w-75">
                <div class="row">
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Botones de navegación mejorados -->
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container contenedorTitulo">
    <h2>Novedades</h2>
</div>
<div class="container contenedorBotones">
    <button type="button" class="btn btn-primary">Celulares</button>
    <button type="button" class="btn btn-primary ">Gaming</button>
</div>


<div id="carouselExampleControls2" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-fluid w-75">
                <div class="row">
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-fluid w-75">
                <div class="row">
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Botones de navegación mejorados -->
    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container contenedorTitulo">
    <h2>Ofertas</h2>
</div>


<div id="carouselExampleControls3" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-fluid w-75">
                <div class="row">
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-fluid w-75">
                <div class="row">
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                    <del class="mt-3">$550</del>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3 mb-4" style="font-size: 1.5rem;">Laptop Lenovo</h5>
                                <div class="container-fluid precio">
                                    <span class="mt-3 mr-2">$200</span>
                                </div>
                                <div class="container-fluid descripcion p-2">
                                    <button type="button" class="btn btn-link btnCard"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Ver mas detalles</button>
                                </div>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center text-primary font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Botones de navegación mejorados -->
    <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="container contenedorTitulo">
    <h2>Categorias</h2>
</div>
<div class="container">
    <div class="row justify-content-between text-center">
        <div class="col-auto contenedorCat">
            <div class="circle">
                <i class="fa fa-gamepad" aria-hidden="true"></i>
            </div>
            <p style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 30px;">Pantallas</p>
        </div>
        <div class="col-auto contenedorCat">
            <div class="circle">
                <i class="fa fa-mobile" aria-hidden="true"></i>
            </div>
            <p style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 30px;">Telefonos</p>
        </div>
        <div class="col-auto contenedorCat">
            <div class="circle">
                <i class="fa fa-desktop" aria-hidden="true"></i>
            </div>
            <p style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 30px;">Computadoras</p>
        </div>
        <div class="col-auto contenedorCat">
            <div class="circle">
                <i class="fa fa-headphones" aria-hidden="true"></i>
            </div>
            <p style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 30px;">Audio y video</p>
        </div>
    </div>
</div>
<div class="container contenedorTitulo">
    <h2>Beneficios por compra</h2>
</div>
<div class="container contenedorBeneficios">
    <div class="container contenedorBeneficios-interno">
        <div class="container contenedorBeneficios-interno-beneficio">
            <i class="fa fa-truck" aria-hidden="true"></i>
            <p>Envío rápido</p>
        </div>
        <div class="container contenedorBeneficios-interno-beneficio">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <p>Pago seguro</p>
        </div>
    </div>
    <div class="container contenedorBeneficios-interno">
        <div class="container contenedorBeneficios-interno-beneficio">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <p>Soporte 24/7</p>
        </div>
        <div class="container contenedorBeneficios-interno-beneficio">
            <i class="fa fa-retweet" aria-hidden="true"></i>
            <p>Devoluciones fáciles</p>
        </div>
    </div>
</div>