

<div class="barra-lateral col-3 col-sm-auto">
  <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
 
  <!--Menu desplegable Modulos Equiopos-->
                <div class="dropdown ">
                  <a href=""><i class="fas fa-bars fa-lg "></i><span>Equipos</span><i class="fas fa-angle-down fa-lg "   style="color: green;"></i></a>
                  <div class="dropdown-options clearfix">
                  
                  <a href="router.php"><i class="fas fa-wifi fa-lg"></i><span>Router Wi-Fi</span></a>
                  <a href="cisco.php"><i class="fas fa-network-wired  fa-lg" style="color: orange;"></i><span>Sw_Cisco</span></a>
                      <a href="huawei.php"><i class="fas fa-network-wired  fa-lg"    style="color: yellow;"></i> </i><span>Sw_Huawei</span></a>
                    <a href="tplink.php"><i class="fas fa-network-wired  fa-lg"    style="color: green;"></i> </i><span>Sw_Tp-Link</span></a>
                    
                  

                  </div>
                 </div>
  <!--fin Menu desplegable Modulos Equiopos-->


  


                          <!--Menu desplegable Modulos Reportes <i class="fas fa-clock fa-lg"></i> -->
                          <div class="dropdown ">
                                          <a href=""><i class="fas fa-bars fa-lg "></i><span>Reportes</span><i class="fas fa-angle-down fa-lg "   style="color: green;"></i></a>
                                          <div class="dropdown-options clearfix">
                                          
                                          
                                <?php
                                        if ($showUsrOpt) {
                                            echo "<a href='log.php'><i class='fas fa-history fa-lg' style='color: orange;'></i> <span>logs Usuarios</span></a>";
                                        }
                                 ?>

                                          <a href="obser.php"><i class="fas fa-comment fa-lg"  style="color: yellow;"></i><span> Observaciones</span></a>
                                          <a href="historial.php"><i class="fas fa-book fa-lg" style="color: green;"></i><span> Reportes Swicher</span></a>
                                          <a href="historial_router.php"><i class="fas fa-book fa-lg" style="color: orange;"></i><span> Reportes router</span></a>
                                   
                                        
                                          </div>
                                        </div>
                          <!--fin Menu desplegable Modulos Repotes-->



    <a href="filtro.php"><i class="fas fa-door-closed fa-lg" style="color: green;"></i> <span> Telecom</span></a>
    

  <!--Menu desplegable Modulos usuario-->


                  
                      // ... código anterior ...

                
               

                                  <a href=><i class="fas fa-bars fa-lg" ></i><span>Usuarios</span> <i class="fas fa-angle-down fa-lg "   style="color: green;"></i></a>
                                  <div class="dropdown-options clearfix">
                                    <a href="dashboard.php"><i class="fas fa-user fa-lg" style="color: green;"></i><span>Registro Usuarios</span></a>
                                    <a  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-unlock fa-lg"style="color: red;"></i>Permisos</a>
                                    <a  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class='fas fa-trademark fa-lg' style='color: orange;'></i>Registro Marca</a>
                                  </div>
                                </div>
                      

                      // ... código posterior ...
                   
  <!--Menu desplegable Modulos usuario-->



  </nav>
  <div class="logo barra-lateral menu">
    <h3></h3>
  </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">

const enlaces = document.querySelectorAll('.barra-lateral a');

enlaces.forEach(enlace => {
    enlace.addEventListener('mouseover', () => {
        enlace.classList.add('hover');
    });

    enlace.addEventListener('mouseout', () => {
        enlace.classList.remove('hover');
    });
});




  </script>