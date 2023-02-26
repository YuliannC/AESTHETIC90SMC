<?php
  $estado = $this->datos["USU_ESTADO"] == 1 ? "ACTIVO":"INACTIVO";
  // $id = $v["CLI_ID"];
?>
<div class="ol-lg-8">
                <div class="card">
                  <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                   <h6 class="text-white text-capitalize ps-3">DETALLES DE CLIENTES</h6>
                  </div><br>
                    <table class="table table-stripped">
                        <th>Nombres</th>
                        <th><P><b><?php echo $this->datos["nombre"]; ?></b></P></th>
                      </tr> 
                      <tr>
                        <th>Apellidos</th>
                        <th><P><b><?php echo $this->datos["descripcion"]; ?></b></P></th>
                      </tr>
                      <tr>
                        <th> Documento</th>
                        <th><P><b><?php echo $this->datos["precio"]; ?></b></P></th>
                      </tr>
                      <tr>
                        <th> Rol</th>
                        <th><P><b><?php echo $this->datos["colores"]; ?></b></P></th>
                      </tr>
                      <!-- <tr>
                        <th> Estado</th>
                        <th><p><b><?php echo $estado ?></b></P></th>
                      </tr> -->
                       <tr>
                       <td><a href="?controlador=cliente&accion=principal" class="btn bg-gradient-dark">Principal Cliente</a></td>
                       </tr>
                       <!-- <tr>
                       <td><a href='?controlador=cliente&accion=frmEditar&cli_id=$id'class='btn btn-dark'>Editar</a></td>
                       </tr> -->
                    </table>
                   
                    
                  
                  
                 
                </div>
              </div>
              <!-- $estado = $v ["CLI_ESTADO"] == 1 ? "ACTIVO":"INACTIVO"; -->
