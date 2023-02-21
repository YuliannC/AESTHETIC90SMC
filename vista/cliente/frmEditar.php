<br><br><br><br><br><br>
<?php
$var = $this->dato["USU_ROL"];
?>
<form action="?controlador=cliente&accion=editar" autocomplete="off" id="frmRegistro" method="post">
			<h2 style="color:black; text-align:center;">Registrar Clientes</h2>
						
			<label for="nombre">nombres</label>
			<input type="text" name="nombres"  placeholder="nombres" required value="<?php echo $this->datos["USU_NOMBRES"];?>"/>
			<br>
			<label for="nombre">apellidos</label>
			<input type="text" name="apellidos"  placeholder="apellidos" required value="<?php echo $this->dato["USU_APELLIDOS"];?>"/>
			<br>
			<label for="apellidos">Telefono</label>
			<input type="number" name="whatsapp"  placeholder="telefono" required value="<?php echo $this->dato["USU_TELEFONO"];?>"/>
			<br>
			<label for="email" >correo</label>
			<input type="email" name="correo"  placeholder="correo" required value="<?php echo $this->dato["USU_CORREO"];?>"/>
			<br>
			<label for="asunto">contrasena</label>
			<input type ="text" name="contrasena"  placeholder="contrasena" required value="<?php echo $this->dato["USU_CONTRASENA"];?>"/>
			<br>
			<select class= "form-control"name="srol" value="<?php echo $this->dato["USU_ROL"];?>" required>
                          <option value="">Rol</option>
                          <option <?php echo $var =="Administrador"?"selected":"";?> value="Administrador">Admin</option>
                          <option <?php echo $var =="Cliente"?"selected":"";?>  value="Cliente">Cliente</option>   
                           </select>
     <input type="hidden" name="id" value="<?php echo $this->dato["USU_ID"];?>" required>

      <input type="submit" name="aceptar" class="btn bg-gradient-primary" value="enviar">
			</form>

      <style>
        
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