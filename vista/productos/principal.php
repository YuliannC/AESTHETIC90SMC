
<style>
  h1{
    text-align: center;
  }
  img{
    text-align: center;
    width: 100%;
  }
  .modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
	text-align: center;
}
.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}
.modalDialog > div {
	width: 750px;
	position: relative;
	margin: 10% auto;
	padding: 1px 1px 1px 1px;
	border-radius: 10px;
	background: transparent;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
  -webkit-transition: opacity 400ms ease-in;
-moz-transition: opacity 400ms ease-in;
transition: opacity 400ms ease-in;
}
.close {
	background: white;
	color: black;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}
.close:hover { background: white; }
*{box-sizing:border-box;}

form{
	width:730px;
	padding:16px;
	border-radius:10px;
	margin:auto;
	background-color:#ccc;
}

form label{
	width:72px;
	font-weight:bold;
	display:inline-block;
}

form input[type="number"],
form input[type="text"],
form input[type="email"]{
	width:340px;
	padding:3px 10px;
	border:1px solid #f6f6f6;
	border-radius:3px;
	background-color:#f6f6f6;
	margin:8px 0;
	display:inline-block;
}

form input[type="submit"]{
	width:100%;
	padding:8px 16px;
	margin-top:32px;
	border:1px solid #000;
	border-radius:5px;
	display:block;
	color: black;
	background-color: gray;
} 

form input[type="submit"]:hover{
	cursor:pointer;
}

textarea{
	width:100%;
	height:100px;
	border:1px solid #f6f6f6;
	border-radius:3px;
	background-color:#f6f6f6;			
	margin:8px 0;
	/*resize: vertical | horizontal | none | both*/
	resize:none;
	display:block;
}
.buscar{
	width:340px;
	padding:3px 10px;
	border:1px solid #f6f6f6;
	border-radius:3px;
	background-color:#f6f6f6;
	margin:8px 0;
	display:inline-block;
}


</style>

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

	<!-- INICIO DE PRODUCTOS -->
  
  <img src="public/images/xxx.jpg" alt="">
  <div class="row">
        <div class="col-md-3 col-md-offset-9 text-right" >
            <div class="btn-group" role="group">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="button extra_2_button" style="text-align: center;" ><a href="?controlador=productos&accion=frmRegistrar">Registrar</a></div>&nbsp;&nbsp;&nbsp;
			<div class="button extra_2_button"><a href="?controlador=productos&accion=vercarrito">Listar</a></div>&nbsp;&nbsp;&nbsp;	 
			<div class="extra_2_button"> <input type="text" placeholder="Buscar por nombre" class="buscar"> </div>&nbsp;&nbsp;&nbsp;
			<div class="extra_2_button"> <input type="submit" class="search_button" value=""><img src="public/images/magnifying-glass.svg" alt="">			
            </div>
        </div>
    </div>

  <!-- MODAL FRM REGISTRAR PRODUCTOS-->

<!-- <div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close" style="color:black;" >X</a>

			<form action="?controlador=cliente&accion=Registrar" autocomplete="off" id="frmReg" method="post" >
			<h2 style="color:black; text-align:center;">Registrar Clientes</h2>
						
			<label for="nombre">nombres</label>
			<input type="text" name="nombres" id="nombres" placeholder="nombres" required/>
			<br>
			<label for="nombre">apellidos</label>
			<input type="text" name="apellidos" id="apellidos" placeholder="apellidos" required/>
			<br>
			<label for="apellidos">Telefono</label>
			<input type="number" name="telefono" id="telefono" placeholder="telefono" required/>
			<br>
			<label for="email" >correo</label>
			<input type="email" name="correo" id="correo" placeholder="correo" required />
			<br>
			<label for="asunto">contrasena</label>
			<input type ="text" name="contrasena" id="contrasena" placeholder="contrasena" required/>
			<br>
			<label for="asunto">Repetir contrasena</label>
			<input type ="text" name="contrasena" id="contrasena" placeholder="contrasena"required />
			<input type="submit" name="aceptar" value="enviar datos">

			</form>
            </div>
          </div>
        </div>
      </div>
      </div>
	</div> -->
	  <!-- FINAL MODAL FRM REGISTRAR PRODUCTOS-->


