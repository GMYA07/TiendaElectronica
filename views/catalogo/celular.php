<div class="container pt-5 contenedorTitulo">
    <h1 class="text-center"><b>Celulares</b></h1>
</div>
<div class="container contenedorGeneralCatalogo">
    <aside class="filtroProductos mt-5">
        <h3 class="tituloFiltro">Filtro Productos</h3>
        <div class="contenedorFiltros">
            <form action="">
                <div class="contenedorInputLabel mb-3">
                    <label for="productName" class="form-label">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        Buscar
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        id="productName"
                        name="productName"
                        placeholder="Nombre del producto">
                </div>
                <div class="contenedorInputLabel mb-3">
                    <label for="productName" class="form-label">
                        <i class="fa fa-tag" aria-hidden="true"></i>
                        Marca
                    </label>
                    <select name="id_categoria" required class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                        <option value="1" data-tokens="ketchup mustard">Computadoras</option>
                    </select>
                </div>
                <div class="contenedorInputLabel mb-3">
                    <label class="form-label">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        Precio
                    </label>
                    <div class="price-row">
                        <input
                            type="number"
                            class="form-control"
                            id="minPrice"
                            placeholder="Min"
                            min="0">
                        <input
                            type="number"
                            class="form-control"
                            id="maxPrice"
                            placeholder="Max"
                            min="0">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-filter mb-2">
                    Aplicar Filtros
                </button>
            </form>
        </div>
    </aside>
    <div class="container contenedorProductos ">
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