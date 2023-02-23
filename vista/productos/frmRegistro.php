<br><br><br><br><br><br><br><br>
<?php 
  include('recursos/conexion2.php');
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn,$query);
?>

  <div class="container">
    <div class="row">
       <div class="col-lg-4">
         <h1 class="">Subir productos</h1>
         <form action="recursos/subir.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label for="my-input">Seleccione una Imagen</label>
              <input id="my-input"  type="file" name="imagen">
          </div>
          <div class="form-group">
              <label for="my-input">Nombre del producto</label>
              <input id="my-input" class="form-control" type="text" name="titulo">
          </div>
          <div class="form-group">
              <label for="my-input">Cantidad</label>
              <input id="my-input" class="form-control" type="text" name="cantidad">
          </div>
          <div class="form-group">
              <label for="my-input">Descripcion</label>
              <input id="my-input" class="form-control" type="text" name="descripcion">
          </div>
          <div class="form-group">
              <label for="my-input">Precio</label>
              <input id="my-input" class="form-control" type="number" name="precio">
          </div>
          <div class="form-group">
              <label for="my-input">Color</label>
              <input id="my-input" class="form-control" type="text" name="color">
          </div>
          <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
       </div>
          <?php session_unset(); } ?>
          <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
         </form>
       </div>
     <hr> <br><br>

<!--FRM REGISTRAR PRODUCTOS-->
<!-- <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <br><br><br><br>
                <h6 class="text-white text-capitalize ps-3">REGISTRO DE PRODUCTOS</h6>
              </div>
            </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3">
                    <form action="?controlador=productos&accion=Registrar" autocomplete="off" id="frmRegistro" method="post">

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Codigo de revision</label>
                        <input type="number" class="form-control" name="rev_id" required>
                    </div>
                   
                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Nombres</label>
                    <input type="text" name="nombres" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Cantidad</label>
                    <input type="number" name="cantidad" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Colores</label>
                    <input type="text" name="colores" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" name="precio" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">foto</label>
                    <input type="image" name="foto" class="form-control">
                    </div>
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
        