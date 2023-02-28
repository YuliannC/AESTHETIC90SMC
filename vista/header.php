
<!DOCTYPE html>
<html lang="en">
<head>
<title>Aesthetic90s</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Aesthetic90s shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="public/styles/bootstrap4/bootstrap.min.css">
<link href="public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/animate.css">
<link href="public/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="public/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="public/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="public/styles/principal.css">
<link rel="stylesheet" href="public/styles/vista.css">

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="?controlador=inicio&accion=principal">Aesthetic90s</a></div>
			<nav class="main_nav">
				<ul id="navigation">
					<li><a href="?controlador=inicio&accion=principal">Inicio</a></li>
					<li><a href="?controlador=compras&accion=productos">Prendas</a></li>
					<li><a href="?controlador=administrador&accion=contactanos">Pqr</a></li>
					<li><a href="?controlador=administrador&accion=principal">Administracion</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="search header_search">
					
				</div>
				<div class="shopping">
					<!-- Cart -->
					<a href="?controlador=compras&accion=carrolista">
						<div class="cart">
							<img src="public/images/shopping-bag.svg" alt="">
							
						</div>
					</a>
					<!-- Avatar -->
					<a href="?controlador=cliente&accion=perfiles">
						<div class="avatar">
							<img src="public/images/avatar.svg" alt="">
							
							
						</div>
						
					</a>
					<a href="?controlador=cliente&accion=salir">
						<div class="avatar">
							<img src="public/images/salir.png" alt="">
							<?php
                    // echo $this->["CLI_ROL"];
                    if(isset($_SESSION["USU_ID"])){
                      echo $_SESSION["USU_NOMBRES"]." ".$_SESSION["USU_APELLIDOS"]. "(".$_SESSION["USU_ROL"].")";
                    }
                  ?>
					</div>
					</a>
					
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
