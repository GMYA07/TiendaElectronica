<div class="container ContenedorTabs mt-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="profile-tab" data-toggle="tab" data-target="#productos" type="button" role="tab" aria-controls="productos" aria-selected="true">Productos</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="home-tab" data-toggle="tab" data-target="#usuario" type="button" role="tab" aria-controls="usuario" aria-selected="false" disabled>Usuarios</button>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade" id="usuario" role="tabpanel" aria-labelledby="home-tab">
        <div class="container contenedorAcciones mt-5 p-4">
            <div>
                <h2 class="text-white text-center">Gestion de productos</h2>
            </div>
            <div class="d-flex justify-content-around mt-4">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregarUsuario"> <i class="fa fa-plus" aria-hidden="true"></i> Agregar Usuario</button>
                <button type="button" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i> Eliminar Usuario</button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editarUsuario"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar Usuario</button>
            </div>
        </div>
        <!-- Modal Usuarios-->
        <div class="modal fade" id="agregarUsuario" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modalDiseno">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Agregar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="formulario">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombres</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apellidos</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Correo</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleCiudad">Ciudad</label>
                                <select class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                                    <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Registrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editarUsuario" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modalDiseno">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Editar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="formulario">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombres</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Apellidos</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Correo</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleCiudad">Ciudad</label>
                                <select class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                                    <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                </select>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container table-responsive mt-3 mb-5">
            <table id="example" class="table table-striped w-100 mt-2 mb-3 tablaEstilos">
                <thead>
                    <tr class="encabezadoTabla">
                        <th>Nombre Usuario</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>$162,700</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>$372,000</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012-08-06</td>
                        <td>$137,500</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010-10-14</td>
                        <td>$327,900</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009-09-15</td>
                        <td>$205,500</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008-12-13</td>
                        <td>$103,600</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008-12-19</td>
                        <td>$90,560</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013-03-03</td>
                        <td>$342,000</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008-10-16</td>
                        <td>$470,600</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012-12-18</td>
                        <td>$313,500</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010-03-17</td>
                        <td>$385,750</td>
                        <td>XD</td>
                    </tr>
                    <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012-11-27</td>
                        <td>$198,500</td>
                        <td>XD</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script>
            new DataTable('#example');
        </script>
    </div>
    <div class="tab-pane fade show active" id="productos" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container contenedorAcciones mt-5 p-4">
            <div class="container  d-flex justify-content-start">
                <h1 class=" text-center"><i class="fa fa-archive" aria-hidden="true"></i> Gestion de productos</h1>
            </div>
            <div class="container  d-flex justify-content-end" style="gap:3%;">
                <button type="button" class="btn bg-primary text-white" data-toggle="modal" data-target="#agregarProducto"> <i class="fa fa-plus" aria-hidden="true"></i> Agregar Producto</button>
                <button type="button" class="btn bg-primary text-white" data-toggle="modal" data-target="#agregarProducto"> <i class="fa fa-upload" aria-hidden="true"></i> Exportar Tabla</button>
            </div>
        </div>
        <!-- Modal Productos-->
        <div class="modal fade" id="agregarProducto" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modalDiseno">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Agregar Producto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="agregarProductoForm" action="./controller/productosController.php" method="POST" class="formulario" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre producto</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text" style="color: white; background-color: #007bff; border-color: #007bff;"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleCiudad">Categoria</label>
                                        <select name="id_categoria" required class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                                            <option value="1" data-tokens="ketchup mustard">Computadoras</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleCiudad">Marca</label>
                                        <select name="id_marca" required class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                                            <option value="1" data-tokens="ketchup mustard">Lenovo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Precio producto</label>
                                        <div class="input-group has-validation">
                                            <div class="input-group-prepend logoInput">
                                                <span class="input-group-text" style="color: white; background-color: #007bff; border-color: #007bff;"><i class="fa fa-money" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="number" required name="precio" require require class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cantidad Stock</label>
                                        <div class="input-group has-validation">
                                            <div class="input-group-prepend logoInput">
                                                <span class="input-group-text" style="color: white; background-color: #007bff; border-color: #007bff;"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="number" required require name="stock" require class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Modelo</label>
                                        <div class="input-group has-validation">
                                            <div class="input-group-prepend logoInput">
                                                <span class="input-group-text" style="color: white; background-color: #007bff; border-color: #007bff;"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="text" required name="modelo" require class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Código alfanumérico único</label>
                                        <div class="input-group has-validation">
                                            <div class="input-group-prepend logoInput">
                                                <span class="input-group-text" style="color: white; background-color: #007bff; border-color: #007bff;">
                                                    <i class="fa fa-code" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="text" required name="sku" require class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Descripcion</label>
                                        <div class="input-group has-validation">
                                            <div class="input-group-prepend logoInput">
                                                <span class="input-group-text"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                            </div>
                                            <textarea name="descripcion" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            <script>
                                                CKEDITOR.replace('descripcion');
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Imagen producto</label>
                                        <div class="image-dropzone">
                                            <div class="dz-message">
                                                <i class="fa fa-cloud-upload fa-3x mb-3 text-primary"></i>
                                                <h5>Arrastra imagen aquí</h5>
                                            </div>
                                        </div>
                                        <input type="file" name="imagen" style="display: none;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleCiudad">Estado</label>
                                        <select name="estado" required class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                                            <option value="activo" data-tokens="ketchup mustard">Activo</option>
                                            <option value="inactivo" data-tokens="ketchup mustard">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="accion" value="agregar" class="btn bg-primary text-white"><i class="fa fa-plus" aria-hidden="true"></i> Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container table-responsive mt-3 mb-5">
            <table id="example2" class="table table-striped w-100 mt-2 mb-3 tablaEstilos">
                <thead>
                    <tr class="encabezadoTabla">
                        <th>Id</th>
                        <th>Sku</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $p): ?>
                        <tr>
                            <td><?= $p['id_producto'] ?></td>
                            <td><?= $p['sku'] ?></td>
                            <td><?= $p['nombre'] ?></td>
                            <td><?= $p['stock'] ?></td>
                            <td><?= $p['estado'] ?></td>
                            <td>
                                <button type="button"
                                    data-toggle="modal"
                                    data-target="#editarProducto"
                                    class="btn btn-sm btn-primary btn-editar"
                                    data-producto='<?= htmlspecialchars(json_encode($p), ENT_QUOTES) ?>'>
                                    <i class="fa fa-pencil"></i>
                                </button>
                                </button> <a href="./controller/productosController.php?accion=eliminar&id=<?= $p['id_producto'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script>
            new DataTable('#example2');
        </script>
        <div class="modal fade" id="editarProducto" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modalDiseno">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Editar Producto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="./controller/productosController.php" method="POST" class="formulario" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="id_producto" id="inputIdProductoEditar">
                            <input type="hidden" name="fecha_creacion" id="inputFechaCreacionProductoEditar">
                            <input type="hidden" name="imagenNueva" id="inputImgNuevaEditar">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre producto</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text" style="color: white; background-color: #007bff; border-color: #007bff;"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" name="nombre" required class="form-control" id="inputNombreProductoEditar" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleCiudad">Categoria</label>
                                        <select name="id_categoria" id="selectCategoriaProductoEditar" required class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                                            <option value="1" data-tokens="ketchup mustard">Computadoras</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleCiudad">Marca</label>
                                        <select name="id_marca" id="selectMarcaProductoEditar" required class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                                            <option value="1" data-tokens="ketchup mustard">Lenovo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Precio producto</label>
                                        <div class="input-group has-validation">
                                            <div class="input-group-prepend logoInput">
                                                <span class="input-group-text" style="color: white; background-color: #007bff; border-color: #007bff;"><i class="fa fa-money" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="number" required name="precio" require require class="form-control" id="precioIdProductoEditar" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cantidad Stock</label>
                                        <div class="input-group has-validation">
                                            <div class="input-group-prepend logoInput">
                                                <span class="input-group-text" style="color: white; background-color: #007bff; border-color: #007bff;"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="number" required require name="stock" require class="form-control" id="inputCantidadProductoEditar" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Modelo</label>
                                        <div class="input-group has-validation">
                                            <div class="input-group-prepend logoInput">
                                                <span class="input-group-text" style="color: white; background-color: #007bff; border-color: #007bff;"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="text" required name="modelo" require class="form-control" id="inputModeloProductoEditar" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Código alfanumérico único</label>
                                        <div class="input-group has-validation">
                                            <div class="input-group-prepend logoInput">
                                                <span class="input-group-text" style="color: white; background-color: #007bff; border-color: #007bff;">
                                                    <i class="fa fa-code" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="text" required name="sku" require class="form-control" id="inputCodigoAlfaProductoEditar" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Descripcion</label>
                                        <div class="input-group has-validation">
                                            <div class="input-group-prepend logoInput">
                                                <span class="input-group-text"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                            </div>
                                            <textarea name="descripcion" required class="form-control" id="inputDescripProductoEditar" rows="3"></textarea>
                                            <script>
                                                CKEDITOR.replace('inputDescripProductoEditar');
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="imagen5">Imagen producto</label>
                                        <div class="image-dropzone">
                                            <div class="dz-message">
                                                <i class="fa fa-cloud-upload fa-3x mb-3 text-primary"></i>
                                                <h5>Cambiar imagen</h5>
                                            </div>
                                        </div>
                                        <input type="file" name="imagen" style="display: none;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleCiudad">Estado</label>
                                        <select name="estado" id="selectEstadoProductoEditar" required class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                                            <option value="activo" data-tokens="ketchup mustard">Activo</option>
                                            <option value="inactivo" data-tokens="ketchup mustard">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="accion" value="editar" class="btn bg-primary text-white"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
<script src="./Assets/js/preVisualizarImg.js"></script>
<script src="./Assets/js/llenarInput.js"></script>

<script>
    // Deshabilitar auto-discover de Dropzone
    Dropzone.autoDiscover = false;

    // CKEditor
    CKEDITOR.replace('descripcion');

    // Dropzone reutilizable para cualquier elemento con clase "image-dropzone"
    document.addEventListener('DOMContentLoaded', function() {
        // Buscar todos los elementos con clase "image-dropzone"
        const dropzoneElements = document.querySelectorAll('.image-dropzone');

        dropzoneElements.forEach(function(element) {
            // Crear Dropzone para cada elemento
            const dropzone = new Dropzone(element, {
                url: "/fake", // URL fake, no importa
                autoProcessQueue: false, // No subir automáticamente
                maxFiles: 1,
                maxFilesize: 5,
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                dictRemoveFile: "Eliminar",

                init: function() {
                    const self = this;

                    this.on("addedfile", function(file) {
                        // Buscar el input file correspondiente en el mismo formulario
                        const form = element.closest('form');
                        const input = form.querySelector('input[type="file"][name="imagen"]');

                        if (input) {
                            const dt = new DataTransfer();
                            dt.items.add(file);
                            input.files = dt.files;
                            console.log('Archivo asignado a:', input.id || input.name);
                        }
                    });

                    this.on("removedfile", function(file) {
                        // Limpiar input correspondiente
                        const form = element.closest('form');
                        const input = form.querySelector('input[type="file"][name="imagen"]');

                        if (input) {
                            input.value = '';
                            console.log('Input limpiado:', input.id || input.name);
                        }
                    });
                }
            });
        });
    });
</script>