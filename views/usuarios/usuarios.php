<div class="container ContenedorTabs mt-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#usuario" type="button" role="tab" aria-controls="usuario" aria-selected="true">Usuarios</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#productos" type="button" role="tab" aria-controls="productos" aria-selected="false">Productos</button>
        </li>
    </ul>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="usuario" role="tabpanel" aria-labelledby="home-tab">
        <div class="container contenedorAcciones mt-5 p-4">
            <div>
                <h2 class="text-white text-center">Acciones</h2>
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
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012-08-06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010-10-14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009-09-15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008-12-13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008-12-19</td>
                        <td>$90,560</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013-03-03</td>
                        <td>$342,000</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008-10-16</td>
                        <td>$470,600</td>
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012-12-18</td>
                        <td>$313,500</td>
                    </tr>
                    <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010-03-17</td>
                        <td>$385,750</td>
                    </tr>
                    <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012-11-27</td>
                        <td>$198,500</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script>
            new DataTable('#example');
        </script>
    </div>
    <div class="tab-pane fade" id="productos" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container contenedorAcciones mt-5 p-4">
            <div>
                <h2 class="text-white text-center">Acciones</h2>
            </div>
            <div class="d-flex justify-content-around mt-4">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregarProducto"> <i class="fa fa-plus" aria-hidden="true"></i> Agregar Producto</button>
                <button type="button" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i> Eliminar Producto</button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editarProducto"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar Producto</button>
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
                    <div class="modal-body">
                        <form class="formulario">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre Producto</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleCiudad">Marca</label>
                                <select class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                                    <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Descripcion</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                    </div>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Registrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editarProducto" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modalDiseno">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Editar Producto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="formulario">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre Producto</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text"><i class="fa fa-archive" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleCiudad">Marca</label>
                                <select class="selectpicker" data-width="100%" data-live-search="true" data-style="btn-primary">
                                    <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                    <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Descripcion</label>
                                <div class="input-group has-validation">
                                    <div class="input-group-prepend logoInput">
                                        <span class="input-group-text"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                    </div>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container table-responsive mt-3 mb-5 mw-100">
            <table id="example2" class="table table-striped w-100 mt-2 mb-3 tablaEstilos">
                <thead>
                    <tr class="encabezadoTabla">
                        <th>Producto</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
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
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012-08-06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010-10-14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009-09-15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008-12-13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008-12-19</td>
                        <td>$90,560</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013-03-03</td>
                        <td>$342,000</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008-10-16</td>
                        <td>$470,600</td>
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012-12-18</td>
                        <td>$313,500</td>
                    </tr>
                    <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010-03-17</td>
                        <td>$385,750</td>
                    </tr>
                    <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012-11-27</td>
                        <td>$198,500</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <script>
            new DataTable('#example2');
        </script>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>