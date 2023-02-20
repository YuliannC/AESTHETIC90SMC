
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <br><br><br><br>
                <h6 class="text-white text-capitalize ps-3">REGISTRO DE PRODUCTOS</h6>
              </div>
            </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3">
                    <form action="?controlador=productos&accion=Registrar" autocomplete="off" id="frmRegistro" method="post">

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Codigo de revision</label>
                        <input type="number" class="form-control" name="rev_id" required>
                    </div>
                   
                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Nombres</label>
                    <input type="text" name="nombres" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Cantidad</label>
                    <input type="number" name="cantidad" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Colores</label>
                    <input type="text" name="colores" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" name="precio" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">foto</label>
                    <input type="image" name="foto" class="form-control">
                    </div>
                    </div>
                    <input type="submit" name="aceptar" class="btn bg-gradient-primary">
                    </form>
                </div>
                </div>
             
            </div>
          </div>
        </div>
      </div>
      </div> -->

      <!-- <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Registrar Tipo de Revision</h6>
              </div>
            </div>
            <div class="card-body">
                <form action="?controlador=tipo_revision&accion=registrar" method="POST" id="frmRegistrar">
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Codigo de revision</label>
                        <input type="number" class="form-control" name="rev_codigo" required>
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                        <label class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha" required>
                    </div>
                    Tipo de revision 
                    <div class="input-group input-group-outline mb-3">
                      <select class= "form-control"name="tipo" id="" required>
                        <option value="">Seleccione</option>
                        <option value="Cambio_de_llantas">Cambio de llantas</option>
                        <option value="Cambio_de_aceite">Cambio de aceite</option>
                        <option value="Cambio_de_frenos">Cambio de frenos</option>
                        <option value="Reemplazo_de_luces">Reemplazo de luces</option>
                        <option value="Revisa_los_líquido_de_aire">Cambia los filtros de aire</option>
                        <option value="Revisa_el_estado_de_la_batería">Revisa el estado de la batería</option>
                        
                      </select>
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled ">
                      <h7>Observacion</h7>
                        <textarea name="observacion" id="" cols="150" rows="5" required></textarea>
                    </div>
                    
                    <input type="submit" class="btn bg-gradient-dark" name="aceptar" value="enviar">
                </form>
                
                
            </div>
          </div>
        </div>
      </div>
</div> -->