<!-- <br><br><br><br><br><br><br>
<table>
    <thead>
    <tr>
    <th scope="col">Id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Apellido</th>
    <th scope="col">Tipo de documento</th>
    <th scope="col">Numero de documento</th>
    <th scope="col">Telefono</th>
    <th scope="col"></th>
    <th scope="col"></th>

    </tr>
    </thead>
    <tbody>
    <tr>
    <th scope="row"></th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button className="boton">Editar</button></td>
    <td><button className="boton">Eliminar</button></td>
    </tr>
    <tr>
    <th scope="row"></th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button className="boton">Editar</button></td>
    <td><button className="boton">Eliminar</button></td>
    </tr>

    <tr>
    <th scope="row"></th>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button className="boton">Editar</button></td>
    <td><button className="boton">Eliminar</button></td>
    </tr>
    </tbody>
    </table>
    <style>
        
@media (prefers-reduced-motion: no-preference) {
  a:nth-of-type(2) .logo {
    animation: logo-spin infinite 20s linear;
  }
}

.card {
  padding: 2em;
}

.read-the-docs {
  color: #888;
}
table {
  table-layout: fixed;
  width: 90%;
  border-collapse: collapse;
  border: 3px solid purple;
}

thead th:nth-child(1) {
  width: 5%;
}

thead th:nth-child(2) {
  width: 20%;
}

thead th:nth-child(3) {
  width: 25%;
}

thead th:nth-child(4) {
  width: 35%;
}

thead th:nth-child(5) {
  width: 35%;
}

thead th:nth-child(6) {
  width: 20%;
}

thead th:nth-child(7) {
  width: 20%;
}

thead th:nth-child(8) {
  width: 10%;
}


th, td {
  padding: 10px;
}
.boton{
  background-color: plum;
  color: white;
}
    </style> -->
<br><br>
    <div class="ol-lg-8">
                <div class="card">
                  <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                   <h6 class="text-white text-capitalize ps-3">LISTADO DE CLIENTES</h6>
                  </div>
                  <div class="card-body">
                    <table class="table table-Light table-hover border-radius-lg pt-4 pb-3 ">
                      <tr>
                        <th class="aling-middle text-center ">Nombres</th>
                        <th class="aling-middle text-center ">Apellidos</th>
                        <th class="aling-middle text-center ">Telefono</th>
                        <th class="aling-middle text-center ">Correo</th>
                        <th class="aling-middle text-center ">Descripcion</th>
                        <th class="aling-middle text-center "></th>
                        <th class="aling-middle text-center "></th>
                        
                      </tr>
                      <tr>
                          <?php
                            foreach($this->datos as $valor){
                              $id = $valor["CON_ID"];
                                echo "<tr>";
                                          
                                  echo "<td class='aling-middle text-center '>".$valor["CON_NOMBRES"]."</td>";
                                  echo "<td class='aling-middle text-center '>".$valor["CON_APELLIDO"]."</td>";
                                  echo "<td class='aling-middle text-center '>".$valor["CON_TELEFONO"]."</td>";
                                  echo "<td class='aling-middle text-center '>".$valor["CON_CORREO"]."</td>";
                                  echo "<td class='aling-middle text-center '>".$valor["CON_DESCRIPCION"]."</td>";
                                  echo "<td class='aling-middle text-center'><a  href='?controlador=cliente&accion=frmEditar&cli_id=$id'class='btn btn-info'>
                                  Editar</a></td>";
                                  echo "<td class='aling-middle text-center'><a href='?controlador=cliente&accion=eliminar&cli_id=$id'class='btn btn-danger'>
                                  Eliminar</a></td>";
                                echo "</tr>";
                            }
                          ?>
                      </tr>  
                    </table>
                  </div>
                </div>
              </div>