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
  <br><br><br><br><br><br>
  <form action="?controlador=cliente&accion=Registrar" autocomplete="off" id="frmRegC" method="post">
			<h2 style="color:black; text-align:left;">Registrar Clientes</h2>
					<br>	
			<label for="nombre">nombres</label>
			<input type="text" class="search_input menu_mm" name="nombres" id="nombres" placeholder="Ingresar nombre"/>
			<br><br>
			<label for="nombre">apellidos</label>
			<input type="text" class="search_input menu_mm" name="apellidos" id="apellidos" placeholder="Ingresar apellidos"/>
			<br><br>
			<label for="apellidos">Telefono</label>
			<input type="number" class="search_input menu_mm" name="telefono" id="telefono" placeholder="Ingresar telefono"/>
			<br><br>
			<label for="email" >correo</label>
			<input type="email" class="search_input menu_mm" name="correo" id="correo" placeholder="Ingresar correo" required />
			<br><br>
			<label for="asunto">contrasena</label>
			<input type ="text" class="search_input menu_mm" name="contrasena" id="contrasena" placeholder="Ingresar contrasena"/>
			<br><br>
      <label for="asunto">Rol</label>
      <select class="search_input menu_mm" name="srol" id="srol">  
          <option value="Administrador">Administrador</option>
          <option value="Cliente">Cliente</option>
      </select>
      <br><br>
			<input type="submit" name="aceptar" class="promo_link" value="enviar datos">
			</form>

	<!-- FIN DE MENU -->

<!-- 
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
            <div class=" p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <br><br><br><br>
                <h6 class="text-white text-capitalize ps-3">REGISTRO DE CLIENTES</h6>
              </div>
            </div>
                <div class="row">
                  <div class="col-lg-3">
                    <form action="?controlador=cliente&accion=Registrar" autocomplete="off" id="frmRegistrar" method="post">
                   
                    <div class="input-group input-group-outline mb-3">
                    Nombres
                    <input type="text" name="nombres" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    Apellidos
                    <input type="text" name="apellidos" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    telefono
                    <input type="number" name="telefono" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    Correo
                    <input type="text" name="correo" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    contraseña
                    <input type="number" name="contrasena" class="form-control">
                    </div>
                
                    <select class="form-control" name="srol" id="srol">  
                    <option value="Administrador">Administrador</option>
                    <option value="Cliente">Cliente</option>
                  </select>
                    
                    </div>
                    <input type="submit" name="aceptar" class="btn bg-gradient-primary">
                    </form>
                </div>
                </div>
             
            </div>
          </div>
        </div>
      </div>
      </div> 
 -->
