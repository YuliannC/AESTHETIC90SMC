<?php 
  include('recursos/conexion2.php');
  $query = "select * from imagenes ";
  $resultado = mysqli_query($conn,$query);
?>
<br><br>
<div class="modalDialog">
	<div>
    <?php foreach($resultado as $row){ ?> 
    <img src="public/images/<?php echo $row['imagen']; ?>" class="imgModal" alt="...">
	<br><br>
	<h1><strong><?php echo $row['nombre']; ?></strong></h1>
  <br><br>
	<p><strong><?php echo $row['descripcion']; ?></strong></p>
  <br><br>
	<h1 class="price"><strong><?php echo $row['precio']; ?></strong></h1>
  <br><br>
  <h3 ><?php echo $row['colores']; ?></h3>
	<br>
  
  <div>
    <div style="text-align:center;">
      <input value="-" ></input><input value="0" ></input><input value="+" ></input>
      <br><br><br>
    <div style="text-align:center;">
    <button class="btnCompra">Comprar</button>
    </div>
    </div>
    </div>
	<br><br><br><br>
    <?php }?>
    </div>
	</div>



<style>
  input{
    border: none;
    background: none;
    background-color: gray;
    padding: 15px 0px;
    width:10%;
    text-align:center;
    font-weight:bold;
  }
       h1{
        text-align: center;
      }
      h2{
        text-align: center;
      }
      h3{
        text-align: center;
      }
      p{
        text-align: center;
      }
      .imgModal{
        float: left;
        width: 60%;
      padding: 50px;
      
      }

    .modalDialog:target {
      opacity:1;
      pointer-events: auto;
    }
    .modalDialog > div {
      width: 900px;
      position: relative;
      margin: 2% auto;
      padding: 1px 1px 1px 1px;
      border-radius: 10px;
      -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    }

    .btnCompra{
        border: none;
        background: none;
        background-color: #000;
        color: #fff;
        padding: 15px 130px;
        cursor: pointer;
        
    }
</style>
