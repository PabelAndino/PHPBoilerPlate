<?
require 'header.php'


?>

<div id="layoutSidenav">
    <div id="layoutSidenav_content">


        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-xl px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="user-plus"></i></div>
                                    Agregar Cliente
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mb-3">
                                <!--<a class="btn btn-sm btn-light text-primary" href="user-management-list.html">
                                    <i class="me-1" data-feather="arrow-left"></i>
                                    Back to Users List
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->


            <div class="container-xl px-4 mt-4">

                <div class="row">

                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card card-header-actions mx-aut mb-4">
                            <div class="card-header">Detalles del Clientes
                                <div>

                                    <button class="btn btn-teal btn-icon mr-2" data-bs-toggle="modal" data-bs-target="#clientesModal">
                                        <i data-feather="search"></i>
                                    </button>

                                </div>
                            </div>

                            <div class="card-body" >
                                <form id="theform" >
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="name">Nombres</label>
                                            <input type="hidden" id="idcliente" name="idcliente">
                                            <input class="form-control" id="name" name="name" type="text"
                                                   placeholder="Facilite Nombres y apellidos" value=""/>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="cedula">Cédula</label>

                                            <input class="form-control" id="cedula" name="cedula" type="text"
                                                   placeholder="Cedula" value=""/>
                                        </div>

                                        <!-- Form Group (last name)-->
                                        <div class="col-md-12">
                                            <label class="small mb-1" for="user">Usuario</label>
                                            <input class="form-control" name="user" id="user" type="text"
                                                   placeholder="Cree el usuario" value=""/>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="small mb-1" for="telefono_uno">Telefono 1</label>
                                            <input class="form-control" name="telefono_uno" id="telefono_uno"
                                                   type="text"
                                                   placeholder="Telefono 1" value=""/>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="small mb-1" for="telefono_dos">Telefono 2</label>
                                            <input class="form-control" name="telefono_dos" id="telefono_dos"
                                                   type="text"
                                                   placeholder="Telefono 2" value=""/>
                                        </div>


                                        <div class="col-md-4">
                                            <label class="small mb-1" for="mail">Correo</label>
                                            <input class="form-control" name="mail" id="mail"
                                                   type="email"
                                                   placeholder="correo@correo.com" value=""/>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="small mb-1" for="direccion">Dirección</label>
                                            <textarea class="form-control" name="direccion" id="direccion"
                                                   type="email"
                                                      placeholder="Dirección" rows="3" value=""></textarea>
                                        </div>


                                    </div>


                                    <!--Compras-->
                                    <div class="card mb-4">
                                        <div class="card-header">Compras</div>
                                        <div class="card-body">
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="cantidad">Cantidad</label>
                                                    <input type="hidden" id="idcompras" name="idcompras">
                                                    <input class="form-control" id="cantidad" name="cantidad" type="text"
                                                           placeholder="Cantidad" value=""/>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="small mb-1" for="descripcion">Descripción</label>
                                                    <textarea class="form-control" name="descripcion" id="descripcion"
                                                              type="email"
                                                              placeholder="Descripción" rows="3" value=""></textarea>
                                                </div>


                                            </div>
                                            <!-- Form Group (email address)-->

                                        </div>
                                    </div>

                                    <!-- Submit button-->
                                    <button class="btn btn-primary" id="agregar" type="submit">Crear Cliente</button>
                                </form>
                            </div>
                        </div>

                    </div>


                    <div class="col-xl-4">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Puntos</div>
                            <div class="card-body">
                                <form id="theform">
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="name">Nombres</label>
                                            <input type="hidden" id="idcliente" name="idcliente">
                                            <input class="form-control" id="name" name="name" type="text"
                                                   placeholder="Facilite Nombres y apellidos" value=""/>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="cedula">Cédula</label>

                                            <input class="form-control" id="cedula" name="cedula" type="text"
                                                   placeholder="Cedula" value=""/>
                                        </div>

                                        <!-- Form Group (last name)-->
                                        <div class="col-md-12">
                                            <label class="small mb-1" for="user">Usuario</label>
                                            <input class="form-control" name="user" id="user" type="text"
                                                   placeholder="Cree el usuario" value=""/>
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="password">Contraseña</label>
                                        <input class="form-control" name="password" id="password" type="password"
                                               placeholder="Cree la contraseña" value=""/>
                                    </div>


                                    <!-- Form Group (Roles)-->
                                    <div class="mb-3">
                                        <label class="small mb-1">Role</label>
                                        <select class="form-select" name="roll" id="roll"
                                                aria-label="Default select example">
                                            <option value="1">Administrador</option>
                                            <option value="2">Vendedor</option>
                                            <option value="3">Editor</option>
                                            <option value="4">Invitado</option>
                                        </select>
                                    </div>
                                    <!-- Submit button-->
                                    <button class="btn btn-primary" id="agregar" type="submit">Crear Usuario</button>
                                </form>
                            </div>
                        </div>

                    </div>


                </div>


            </div>


            <div class="container-xl px-4 mt-4">
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-header">Lista de Usuarios</div>
                        <div class="card-body">
                            <table id="listadoUsuarios">
                                <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Usuario</th>
                                    <th>Roll</th>
                                    <th>Acciones</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Usuarios</th>
                                    <th>Roll</th>
                                    <th>Acciones</th>


                                </tr>
                                </tfoot>
                                <tbody>


                                </tbody>
                            </table>

                            <button class="btn btn-primary" id="test" type="button">Test</button>
                        </div>


                    </div>

                </div>

            </div>


            <div style="position: absolute; top: 1rem; right: 1rem;">
                <!-- Toast -->
                <div class="toast" id="toastError" role="alert" aria-live="assertive" aria-atomic="true"
                     data-bs-delay="3000">
                    <div class="toast-header text-danger">
                        <i data-feather="alert-circle"></i>
                        <strong class="me-auto ms-2">Error</strong>
                        <small class="text-muted">Ahora</small>
                        <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body text-danger" id="toast-body-error">Error al realiazar la operación</div>
                </div>

            </div>

            <div style="position: absolute; top: 1rem; right: 1rem;">
                <!-- Toast -->
                <div class="toast" id="toastSuccess" role="alert" aria-live="assertive" aria-atomic="true"
                     data-bs-delay="3000">
                    <div class="toast-header text-success">
                        <i data-feather="check-square" class=""></i>
                        <strong class="me-auto ms-2">Satifactorio</strong>
                        <small class="text-muted">Ahora</small>
                        <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body text-success" id="toast-body-success">Operación realizada correctamente</div>
                </div>

            </div>


            <!--Modal-->
            <div class="modal fade" id="clientesModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Clientes</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <table id="listadoClientes">
                                <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Acciones</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Usuarios</th>
                                    <th>Roll</th>
                                    <th>Acciones</th>


                                </tr>
                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>


                        </div>

                        <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button></div>

                    </div>
                </div>
            </div>

        </main>


    </div>


</div>

<script src="./js/clientes.js"></script>
