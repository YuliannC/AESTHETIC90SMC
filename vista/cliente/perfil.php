<!-- Menu -->
<br>

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Aesthetic 90s Mc</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="public/images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="#">Inicio</a></li>
				<li class="menu_mm"><a href="?controlador=cliente&accion=principal">Prendas</a></li>
				<li class="menu_mm"><a href="#">Atencion personalizada</a></li>
				<li class="menu_mm"><a href="#">Lo mas vendido</a></li>
				<li class="menu_mm"><a href="?controlador=administrador&accion=contactanos">PQR</a></li>
                <li class="menu_mm"><a href="?controlador=administrador&accion=contactanos">Cerrar sesion</a></li>
			</ul>
		</nav>
	</div>
	<?php 
  include('recursos/conexion2.php');
  $query = "SELECT * FROM t_usuario limit 1";
  $resultado = mysqli_query($conn,$query);
?>
<br><br><br><br><br><br>
<?php foreach($resultado as $row){ ?>
    <div class="card" style="align-items: center;">
        <div class="img">
            <img src="public/images/perfil.png" alt="" >
        </div>
        <div class="content">
            <h2><?php echo $row['USU_NOMBRES']; ?></h2>
			<a href="?controlador=compras&accion=carrolista" class="btn">Mi carrito</a><br>
            <a href="?controlador=cliente&accion=frmEditar&id=<?php echo $row['USU_ID']; ?>" class="btn">Editar</a><br>
			<a href="?controlador=compras&accion=carrolista" class="btn">Cancelar mi pedido</a><br> 
        </div>
    </div>
	<?php }?>
<br><br><br><br><br><br>
