<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Aesthetic 90s Mc</a></div>

		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="?controlador=administrador&accion=principal">Inicio</a></li>
				<li class="menu_mm"><a href="?controlador=cliente&accion=principal">Clientes</a></li>
				<li class="menu_mm"><a href="?controlador=proveedores&accion=principal">Proveedores</a></li>
				<li class="menu_mm"><a href="?controlador=productos&accion=principal">Productos</a></li>
				<li class="menu_mm"><a href="?controlador=administrador&accion=listarPQR">PQR</a></li>
			</ul>
		</nav>
	</div>

	<!-- FIN DE MENU -->
<!--   
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
                    <form action="?controlador=proveedores&accion=Registrar" autocomplete="off" id="frmReg" method="post">
                   
                    <div class="input-group input-group-outline mb-3">
                    Nombre
                    <input type="text" name="nombre" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    telefono
                    <input type="number" name="telefono" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    direccion
                    <input type="text" name="direccion" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    secciones
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
      </div> -->

      <br><br><br><br>
      <form action="?controlador=proveedores&accion=Registrar" autocomplete="off" id="frmReg" method="post" name="formDatosPersonales">
			<h2 style="color:black; text-align:center;">Registrar Proveedores</h2>
					<br>	
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" required placeholder="nombre"/>
			<br><br>
			<label for="apellidos">Telefono</label>
			<input type="number" name="telefono" id="telefono" placeholder="telefono" required/>
			<br><br>
			<label for="email" >Direccion</label>
			<input type="text" name="direccion" id="direccion" placeholder="direccion" required />
			<br><br>
      <select class="form-control" name="seccion" id="seccion">  
          <option value="Administrador">Pant</option>
          <option value="Cliente">top</option>
          <option value="Cliente">vestido</option>
          <option value="Cliente">conjunto</option>
          <option value="Cliente">chaqueta</option>
          <option value="Cliente">corset</option>
      </select>
			<input type="submit" name="aceptar" value="enviar datos">

			</form>