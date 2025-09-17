<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid py-4">
    <div class="container-fluid" style="padding-left: 10%; padding-right: 10%;">
        <div class="row">
            <!-- Carrusel Principal -->
            <div class="col-lg-9 mb-4 mb-lg-0">
                <div class="card border-0 shadow-lg">
                    <div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                        <ol class="carousel-indicators">
                            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#mainCarousel" data-slide-to="1"></li>
                            <li data-target="#mainCarousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?w=800&h=350&fit=crop" class="d-block w-100" alt="Gaming Setup">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                                    <h5 class="text-primary">Gaming de Alta Gama</h5>
                                    <p>Descubre los mejores equipos gaming</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?w=800&h=350&fit=crop" class="d-block w-100" alt="Laptops">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                                    <h5 class="text-primary">Laptops Profesionales</h5>
                                    <p>Potencia y portabilidad para tu trabajo</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1574944985070-8f3ebc6b79d2?w=800&h=350&fit=crop" class="d-block w-100" alt="Smartphones">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                                    <h5 class="text-primary">Smartphones</h5>
                                    <p>La última tecnología móvil</p>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar con anuncios -->
            <div class="col-lg-3">
                <div class="row">
                    <!-- Anuncio principal -->
                    <div class="col-12 mb-4">
                        <div class="card h-100 shadow ad-card">
                            <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?w=300&h=200&fit=crop" class="card-img-top" alt="Gaming Chair">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2">
                                    <span class="badge badge-primary badge-pill px-3 py-2 h6 mb-0">$299.99</span>
                                </div>
                                <h5 class="card-title text-dark">Silla Gaming Pro</h5>
                                <p class="card-text text-muted flex-grow-1">Comodidad extrema para sesiones de gaming prolongadas.</p>
                                <a href="#" class="btn btn-outline-primary btn-block mt-auto">Ver Oferta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container contenedorTitulo">
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