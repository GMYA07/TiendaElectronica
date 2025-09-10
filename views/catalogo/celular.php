<div class="container contenedorGeneralCatalogo">
    <div class="container contenedorFiltrador">
        <div class="container mt-5 contenedorFiltrador-titulo">
            <h2 class="text-center">Filtrar Producto</h2>
        </div>
        <form class="formFiltrar" action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Samsung">
            </div>
            <div class="mb-3">
                <label for="marcaCelular" class="form-label">Marcas</label>
                <select class="form-select" id="marcaCelular" name="marcaCelular">
                    <option selected disabled>Selecciona una marca</option>
                    <option value="apple">Apple</option>
                    <option value="samsung">Samsung</option>
                    <option value="xiaomi">Xiaomi</option>
                    <option value="motorola">Motorola</option>
                    <option value="huawei">Huawei</option>
                    <option value="nokia">Nokia</option>
                    <option value="oppo">Oppo</option>
                    <option value="realme">Realme</option>
                    <option value="tecno">Tecno</option>
                    <option value="infinix">Infinix</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-3 w-100">Filtrar</button>
        </form>
    </div>
    <div class="container contenedorProductos ">
        <div class="container p-4 contenedorTitulo">
            <h1 class="text-center"><b>Celulares</b></h1>
        </div>
        <div class="container-lg" style="background-color: #F3F4F6;">
            <div class="row">
                <div class="col my-4 d-flex justify-content-center align-items-center">
                    <div class="card border-0" style="width: 16rem; min-height: 100%;">
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
                                <a href="#" class="btn btnAgregar mt-2 mb-3 "><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-4 d-flex justify-content-center align-items-center">
                    <div class="card border-0" style="width: 16rem; min-height: 100%;">
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
                                <a href="#" class="btn btnAgregar mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-4 d-flex justify-content-center align-items-center">
                    <div class="card border-0" style="width: 16rem; min-height: 100%;">
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
                                <a href="#" class="btn btnAgregar mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-4 d-flex justify-content-center align-items-center">
                    <div class="card border-0" style="width: 16rem; min-height: 100%;">
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
                                <a href="#" class="btn btnAgregar mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg" style="background-color: #F3F4F6;">
            <div class="row">
                <div class="col my-4 d-flex justify-content-center align-items-center">
                    <div class="card border-0" style="width: 16rem; min-height: 100%;">
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
                                <a href="#" class="btn btnAgregar mt-2 mb-3 "><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-4 d-flex justify-content-center align-items-center">
                    <div class="card border-0" style="width: 16rem; min-height: 100%;">
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
                                <a href="#" class="btn btnAgregar mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-4 d-flex justify-content-center align-items-center">
                    <div class="card border-0" style="width: 16rem; min-height: 100%;">
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
                                <a href="#" class="btn btnAgregar mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-4 d-flex justify-content-center align-items-center">
                    <div class="card border-0" style="width: 16rem; min-height: 100%;">
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
                                <a href="#" class="btn btnAgregar mt-2 mb-3"><i class="fa fa-cart-plus" aria-hidden="true"></i> Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>