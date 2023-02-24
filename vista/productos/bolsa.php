<br><br><br><br><br><br>
<?php 
  include('recursos/conexion2.php');
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn,$query);
?>
<div class="col-lg-14">
           <div class="container-items">
               <?php foreach($resultado as $row){ ?>
         <div class="item">
            <a href="?controlador=productos&accion=detalles&id=<?php echo $row['cod_imagen']; ?>">
      <img src="public/images/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
      </a>
       <div class="info-product">
       <h4 class="card-title"><strong><?php echo $row['nombre']; ?></strong></h4>
       <h1 class="price"><strong><?php echo $row['precio']; ?></strong></h1>
       <button>Añadir al carrito</button>


    </div>
               
  </div>
  <?php }?>
       </div>
    </div>
  </div>
  <style>/* Globales */
*::after,
*::before,
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    margin: 0 auto;
    max-width: 1200px;
    font-family: 'Lato';
    color: #333;
}

.icon-cart{
    width: 40px;
    height: 40px;
    stroke: #000;
}

.icon-cart:hover{
    cursor: pointer;
}

img{
    max-width: 100%;
}

/* Header */
header{
    display: flex;
    justify-content: space-between;
    padding: 30px 0 40px 0;
}

.container-icon{
    position: relative;
}

.count-products{
    position: absolute;
    top: 55%;
    right: 0;

    background-color: #000;
    color: #fff;
    width: 25px;
    height: 25px;

    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
}

#contador-productos{
    font-size: 12px;
}

.container-cart-products{
    position: absolute;
    top: 50px;
    right: 0;

    background-color: #fff;
    width: 400px;
    z-index: 1;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.20);
    border-radius: 10px;
    
}

.cart-product{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px;

    border-bottom: 1px solid rgba(0, 0, 0, 0.20);

}

.info-cart-product{
    display: flex;
    justify-content: space-between;
    flex: 0.8;
}

.titulo-producto-carrito{
    font-size: 20px;
}

.precio-producto-carrito{
    font-weight: 700;
    font-size: 20px;
    margin-left: 10px;
}

.cantidad-producto-carrito{
    font-weight: 400;
    font-size: 20px;
}

.icon-close{
    width: 25px;
    height: 25px;
}

.icon-close:hover{
    stroke: red;
    cursor: pointer;
}

.cart-total{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 0;
    gap: 20px;
}

.cart-total h3{
    font-size: 20px;
    font-weight: 700;
}

.total-pagar{
    font-size: 20px;
    font-weight: 900;
}

.hidden-cart{
    display: none;
}




/* Main */
.container-items{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.item{
    border-radius: 10px;
}

.item:hover{
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.20);
}

.item img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
    transition: all .5s;
}

.item figure{
    overflow: hidden;
}

.item:hover img{
    transform: scale(1.2);
}

.info-product{
    padding: 15px 30px;
    line-height: 2;
    display: flex;
    flex-direction: column;
    gap: 10px;
    text-align:center;
}

.price{
    font-size: 18px;
    font-weight: 900;
}

.info-product button{
    border: none;
    background: none;
    background-color: #000;
    color: #fff;
    padding: 15px 10px;
    cursor: pointer;
}

.cart-empty{
    padding: 20px;
    text-align: center;
}


.hidden{
    display: none;
}
</style>