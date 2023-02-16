<!-- 
      <br><br><br><br><br><br><br>
      <form action="?controlador=administrador&accion=RegistrarPqr" autocomplete="off" id="frmRegistro" method="post">
  <label for="nombre">Nombres:</label><br />
  <input type="text"  name="nombres" /><br />
  <label for="nombre">apellidos:</label><br />
  <input type="text" name="apellidos" /><br />
  <label for="nombre">Whatsapp:</label><br />
  <input type="number"  name="whatsapp" /><br />
  <label for="email">Correo:</label><br />
  <input type="email"  name="correo" /><br />
  <label for="mensaje">Mensaje:</label><br />
  <textarea id="mensaje" name="mensaje"></textarea><br />
  <input type="submit" value="Enviar mensaje" name="aceptar"/>
</form> -->
<style>
  form {
  width: 900px;
  margin: 0 auto;
  text-align: left;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
}

input,
textarea {
  width: 100%;
  padding: 12px 20px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 16px;
}

input[type="submit"] {
  background-color: gray;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
</style> 

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <br><br><br><br>
                <h6 class="text-white text-capitalize ps-3">PQR</h6>
              </div>
            </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3">
                    <form action="?controlador=administrador&accion=RegistrarPqr" autocomplete="off" id="frmRegistro" method="post">
                   
                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Nombres</label>
                    <input type="text" name="nombres" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">telefono</label>
                    <input type="number" name="whatsapp" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Correo</label>
                    <input type="text" name="correo" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Descripcion</label>
                    <input type="text" name="mensaje" class="form-control">
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