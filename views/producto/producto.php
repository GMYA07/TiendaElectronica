<div class="container-fluid">
    <div class="row d-flex justify-content-center mt-5 mb-5 contenedorProductoInfo">
        <div class="col-md-5 col-lg-4 mt-5">
            <div id="carouselExampleControls" class="carousel slide contenedorProductoInfo-informacion-carousel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./Assets/img/productos/laptopLenovo.jpg" class="d-block w-100" alt="Laptop Lenovo Vista 1">
                    </div>
                    <div class="carousel-item">
                        <img src="./Assets/img/productos/ups.jpg" class="d-block w-100" alt="Laptop Lenovo Vista 2">
                    </div>
                    <div class="carousel-item">
                        <img src="./Assets/img/productos/laptopLenovo.jpg" class="d-block w-100" alt="Laptop Lenovo Vista 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>

        <div class="col-md-7 col-lg-6 p-4 border-left border-primary contenedorProductoInfo-informacion">
            <div class="container-fluid">
                <p class="h3 mb-3"><strong>Lenovo</strong></p>
                <p class="h5 mb-4"><strong>Laptop lenovo ideapad 1 proc. intel core i5 1235u ram 8gb almacenamiento ssd 512gb pantalla tactil fhd 15.6p w11hsm 82dq00hmus abyss blue</strong></p>
            </div>
            <div class="container-fluid mt-3">
                <p class="display-8 text-secondary mb-1"><strong>Sku:31232</strong></p>
            </div>
            <div class="container-fluid mt-4">
                <p class="display-4 text-primary mb-4"><strong>$645</strong></p>
            </div>
            <div class="container-fluid mt-4 d-flex justify-content-between contenedorBotonesProducto">
                <button type="button" class="btn btn-primary px-4 py-3 mr-3" style="flex: 1;">Agregar al carrito</button>
                <button type="button" class="btn btn-outline-primary px-4 py-3" style="flex: 2;">Más Información del producto</button>
            </div>
        </div>
    </div>
</div>
<div class="container contenedorTitulo">
    <h2>Productos relacionados</h2>
</div>

<div id="carouselExampleControls2" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-fluid w-75">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <div class="price-badge">
                                <span class="price-current">$200</span>
                                <span class="price-old">$550</span>
                            </div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3" style="font-size: 1.5rem; font-weight:bold;">Laptop Lenovo</h5>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center bg-dark text-white font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center contenedorBotonesBotCard px-4">
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-25 contenedorBotonesBotCard-botonVer" data-toggle="tooltip" data-placement="bottom" title="Ver mas informacion"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-75" data-toggle="tooltip" data-placement="bottom" title="Agregar al carrito"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="price-badge">$1,299</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3" style="font-size: 1.5rem; font-weight:bold;">Laptop Lenovo</h5>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center bg-dark text-white font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center contenedorBotonesBotCard px-4">
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-25 contenedorBotonesBotCard-botonVer" data-toggle="tooltip" data-placement="bottom" title="Ver mas informacion"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-75" data-toggle="tooltip" data-placement="bottom" title="Agregar al carrito"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <div class="price-badge">
                                <span class="price-current">$200</span>
                                <span class="price-old">$550</span>
                            </div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3" style="font-size: 1.5rem; font-weight:bold;">Laptop Lenovo</h5>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center bg-dark text-white font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center contenedorBotonesBotCard px-4">
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-25 contenedorBotonesBotCard-botonVer" data-toggle="tooltip" data-placement="bottom" title="Ver mas informacion"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-75" data-toggle="tooltip" data-placement="bottom" title="Agregar al carrito"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="price-badge">$1,299</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3" style="font-size: 1.5rem; font-weight:bold;">Laptop Lenovo</h5>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center bg-dark text-white font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center contenedorBotonesBotCard px-4">
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-25 contenedorBotonesBotCard-botonVer" data-toggle="tooltip" data-placement="bottom" title="Ver mas informacion"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-75" data-toggle="tooltip" data-placement="bottom" title="Agregar al carrito"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
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
                    <div class="col-12 col-md-6 col-lg-3 my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <div class="price-badge">
                                <span class="price-current">$200</span>
                                <span class="price-old">$550</span>
                            </div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3" style="font-size: 1.5rem; font-weight:bold;">Laptop Lenovo</h5>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center bg-dark text-white font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center contenedorBotonesBotCard px-4">
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-25 contenedorBotonesBotCard-botonVer" data-toggle="tooltip" data-placement="bottom" title="Ver mas informacion"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-75" data-toggle="tooltip" data-placement="bottom" title="Agregar al carrito"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="price-badge">$1,299</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3" style="font-size: 1.5rem; font-weight:bold;">Laptop Lenovo</h5>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center bg-dark text-white font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center contenedorBotonesBotCard px-4">
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-25 contenedorBotonesBotCard-botonVer" data-toggle="tooltip" data-placement="bottom" title="Ver mas informacion"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-75" data-toggle="tooltip" data-placement="bottom" title="Agregar al carrito"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="discount-badge">-64% OFF</div>
                            <div class="price-badge">
                                <span class="price-current">$200</span>
                                <span class="price-old">$550</span>
                            </div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3" style="font-size: 1.5rem; font-weight:bold;">Laptop Lenovo</h5>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center bg-dark text-white font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center contenedorBotonesBotCard px-4">
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-25 contenedorBotonesBotCard-botonVer" data-toggle="tooltip" data-placement="bottom" title="Ver mas informacion"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-75" data-toggle="tooltip" data-placement="bottom" title="Agregar al carrito"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 my-4 d-flex justify-content-center align-items-center">
                        <div class="card border-0" style="width: 100%; min-width: 12rem; max-width: 24rem; min-height: 100%;">
                            <div class="price-badge">$1,299</div>
                            <img src="./Assets/img/productos/laptopLenovo.jpg" class="card-img-top product-image" style="height: 180px; border-radius: 15px 15px 0 0 ;" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title mt-3" style="font-size: 1.5rem; font-weight:bold;">Laptop Lenovo</h5>
                                <div class="mb-3">
                                    <div class="input-group input-group-sm justify-content-center">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button" id="decreaseBtn" onclick="changeQuantity(-1)">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control text-center bg-dark text-white font-weight-bold"
                                            id="quantity" value="1" readonly style="max-width: 80px;">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="increaseBtn" onclick="changeQuantity(1)">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center contenedorBotonesBotCard px-4">
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-25 contenedorBotonesBotCard-botonVer" data-toggle="tooltip" data-placement="bottom" title="Ver mas informacion"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="./index.php?ruta=./views/producto/producto" class="btn btn-primary mt-2 mb-3 w-75" data-toggle="tooltip" data-placement="bottom" title="Agregar al carrito"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
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