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
				<li class="menu_mm"><a href="?controlador=productos&accion=vercarrito">Prendas</a></li>
				<li class="menu_mm"><a href="https://api.whatsapp.com/send?phone=573026876413&text=Hola!!%20Quiero%20hacer%20un%20pedido%20o%20tengo%20una%20consulta%20%E2%9C%A8">Atencion personalizada</a></li>
				<li class="menu_mm"><a href="#">Lo mas vendido</a></li>
				<li class="menu_mm"><a href="?controlador=administrador&accion=contactanos">PQR</a></li>
			</ul>
		</nav>
	</div>
<br><br><br><br><br><br>
<?php 
  include('recursos/conexion2.php');
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn,$query);
?>
<div class="search" style="width:100%;">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required" placeholder="Buscar producto">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="public/images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
        <br>
        <br>
  <div class="col-lg-14">
           <div class="container-items">
               <?php foreach($resultado as $row){ ?>
         <div class="item">
            <a href="?controlador=productos&accion=detalles&id=id">
      <img src="public/images/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
      </a>
       <div class="info-product">
       <h4 class="card-title"><strong><?php echo $row['nombre']; ?></strong></h4>
       <h1 class="price"><strong><?php echo $row['precio']; ?></strong></h1>
       <button >Añadir al carrito</button>


    </div>
               
  </div>
  <?php }?>
       </div>
    </div>
  </div>
