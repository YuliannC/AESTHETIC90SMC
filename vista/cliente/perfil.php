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

<br><br><br><br><br><br>

    <div class="card" style="align-items: center;">
        <div class="img">
            <img src="public/images/perfil.png" alt="" >
        </div><br><br><br><br><br>
        <div class="content">
            <h2>USUARIO</h2>
            <button class="btn">Mis compras</button> <br>
            <a href="?controlador=cliente&accion=frmEditar" class="btn">Editar</a><br>
            <button class="btn">Cancelar mi pedido</button> 
        </div>
    </div>
<br><br><br><br><br><br>
<style>
    div{
    margin: 0 auto;
    }
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.card{
    width: 520px;
    height: 340px;
    background: #fff;
    border-radius: 10px;
    position: relative;
    display: flex;
    cursor: pointer;
    justify-content: center;
    box-shadow: 0 0 20px rgba(0, 0,0, 0.13);
}
.card::before{
    content: "";
    position: absolute;
    top: 2%;
    width: 95%;
    height: 120px;
    z-index: 1;
    border-radius: 10px 10px 0 0 ;
    background: gray;
    box-shadow: 0 0 20px rgba(0, 0,0, 0.13);
    transform-origin: bottom;
    transition: transform .4s;
}
.card:hover::before{
    transform: translateY(-5px) scaleY(1.2);
}
.card .img{
    width: 120px;
    height: 120px;
    border-radius: 50%;
    z-index: 10;
    transform: translateY(50px);
    border: 10px solid #fff;
    overflow: hidden;
    position: absolute;
    background: #fff;
}
.card .img img{
    width: 120%;
    height: 120%;
    transform: translate(-8%,-8%);
}
.content{
    width: 100%;
    height: 100%;
    transform: translateY(170px);
    display: flex;
    flex-direction: column;
    z-index: 20;
    align-items: center;
}
.content p{
    margin:  0 0;
}
.center{
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 20px;
}
.box{
    padding: 10px 30px;
    border-radius: 10px;
    text-align: center;
}
.box:hover{
    background-color: rgba(128, 128, 128, 0.137);
}
.btn{
    width: 95%;
    padding: 10px;
    border-radius: 10px;
    outline: none;
    border: none;
    transform: translateY(10px);
    background: gray;
    color: #fff;
    font-weight: 600;
    box-shadow: 0 0 20px rgba(0, 0,0, 0.13);
    cursor: pointer;
}
.btn:hover{
    background: black;
}
</style>