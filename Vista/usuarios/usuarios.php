

<body>



  <!--opciones de mi dashbor-->



  <div class="container-fluid">
    <div class="row">

 
        <main class="ml-4 main col-9 col-sm-10">

        <div class="row justify-content-center align-content-center text-center">
          <!--BOTON AGREGAR-->
          <div class="col-xs-12 justify-content-left ">
           
            <a class="btn btn-success" href="crud/crear_users.php" role="Button"> <!--<i class="fas fa-plus fa-2x"></i>-->Agregar Usuario</a>

            <!-- BOTON VER DATOS MARCA 1-->


            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Registro Permiso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <table class="table table-dark table-striped-columns">


                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Nombre Permisos</th>
                    </tr>
                  </thead>
                  <tbody>
                
                  </tbody>
                </table>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a type="button" href="permiso/crear_p.php" class="btn btn-success">Agregar Permiso Nuevo</a>
                </div>
              </div>
            </div>
            <!--Fin BOTON VER DATOS MARCA 1-->
            <!--BOTON VER DATOS MARCA 2-->

            <!--BOTON VER DATOS MARCA-->
                       <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                    <div class="offcanvas-header">
                                      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Registro Marca</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                      <table class="table table-dark table-striped-columns">
                                        <thead>
                                          <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">marca</th>
                                            <th scope="col">Aciones</th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                         
                                        </tbody>
                                      </table>
                                      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <a type="button" href="marca/crear_m.php" class="btn btn-success">Agregar Marca nueva</a>
                      </div>
              </div>
            </div>
          </div>
          <!--FIN BOTON MARCA-->
        </div>


        <br><br>
        <div class="row justify-content-center align-content-center text-center">
           <div class="col-xs-12">
               <h2> Usuarios</h2>
                             <!--CONTENEDOR DE LA BARRA DE BUSQUEDA -->
                             <!--CONTENEDOR DE LA BARRA DE BUSQUEDA -->
                        
                                  <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text"  name="buscar"   value="<?php if(isset($_GET['buscar'])){echo $_GET['buscar']; } ?>" 
                                        class="form-control" placeholder="Buscar informacion">
                                       <button type="submit" class="btn btn-primary"><i class="fa fa-search user"></i></button>                            
                                    </div>
                                </form>
                        <!--CIERRE DEL CONTENEDOR DE LA BARRA DE BUSQUEDA -->
            </div>
          </div>
        <!--FIN BOTON AGREGAR-->
        <!--TABLA--> <br><br><br>
        <div class="table-responsive">

                    <table class="table table-fixe table-bordered ">
                        <thead class="table-dark table-striped-columns">
                          <tr>
                            <th>CÓDIGO DE USUARIO</th>
                            <th>NOMBRE Y APELLIDO</th>
                            <th>CÉDULA</th>
                            <th>TELÉFONO </th>
                            <th>CORREO</th>
                            <th>CARGO</th>
                            <th>CLAVE</th>
                            <th>CATEGORÍA</th>
                            <th>PERMISOS</th>
                           
                            <th>ACCIONES</th>
                          </tr>
                        </thead>

                        <tbody class=" mb-10 table-success table-striped  table-bordered border-primary">
          

                        </tbody>
                    </table>
        <!--FIN TABLA-->
          <div class="col-xs-12">
   
                                        
                                  <a  class='btn btn-danger'  target='_blank' href='pdf_usuarios/usuario_reporte.php'><i class="fas fa-file-pdf fa-2x"></i></a>
                                          <a  class='btn btn-success'  target='_blank' href='excel/reporte_user.php'><i class="fas fa-file-excel fa-2x"></i>
</a>
                                      


                                  </div>


          </div>
        </div>

    </div>

    </main>
  </div>





</html>