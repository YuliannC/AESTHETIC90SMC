
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <br><br><br><br>
                <h6 class="text-white text-capitalize ps-3">REGISTRO DE PROVEEDORES</h6>
              </div>
            </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3">
                    <form action="?controlador=proveedores&accion=Registrar" autocomplete="off" id="frmRegistro" method="post">
                   
                    <div class="input-group input-group-outline mb-3">

                    <input type="text" name="nombre" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">telefono</label>
                    <input type="number" name="telefono" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">direccion</label>
                    <input type="text" name="direccion" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">secciones</label>
                    <input type="text" name="seccion" class="form-control">
                    </div>
                    
                    </div>
                    <div class="button extra_2_button">
                    <input type="submit" name="aceptar" class="btn bg-gradient-primary">
                    </div>
                    </form>
                </div>
                </div>
             
            </div>
          </div>
        </div>
      </div>
      </div>