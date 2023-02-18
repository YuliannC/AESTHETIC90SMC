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
<!-- <style>
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
      </div> -->
      <br><br><br><br><br><br>
      <div class="content">

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Quejas, peticiones o sugerencias</h3>
                <form action="?controlador=administrador&accion=RegistrarPqr" autocomplete="off" id="frmRegistro" method="post">
                    <p>
                        <label>nombres</label>
                        <input type="text" name="nombres">
                    </p>
                    <p>
                        <label>apellidos</label>
                        <input type="text" name="apellidos">
                    </p>
                    <p>
                        <label>whatsapp</label>
                        <input type="tel" name="whatsapp">
                    </p>
                    <p>
                        <label>correo</label>
                        <input type="email" name="correo">
                    </p>
                    <p class="block">
                       <label>Descripcion</label> 
                        <textarea name="mensaje" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button name="aceptar">
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>Para mas informacion</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Escribenos</li>
                    <li><i class="fas fa-phone"></i> (+57) 302 687 6413</li>
                </ul>
                <p>Estamos para atender tus necesidades como usuario y tengas una experiencia increible en este tu espacio. </p>
                <p>Gracias por preferirnos</p>
            </div>
        </div>

    </div>
    <style>
      .container {
    max-width: 1170px;
    margin-left: auto;
    margin-right: auto;
    padding: 1.5em;
}

ul {
    list-style: none;
    padding: 0;
}

.logo {
    text-align: center;
    font-size: 3em;
}

.logo span {
    color: #B70E21;
}

.contact-wrapper {
    box-shadow: 0 0 20px 0 rgba(255, 255, 255, .3);
}

.contact-wrapper > * {
    padding: 1em;
}

.contact-form {
    background: gray;
}

.contact-form form {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.contact-form form label {
    display: block;
}

.contact-form form p {
    margin: 0;
    padding: 1em;
}

.contact-form form .block {
    grid-column: 1 / 3;
}

.contact-form form button,
.contact-form form input,
.contact-form form textarea {
    width: 100%;
    padding: .7em;
    border: none;
    background: none;
    outline: 0;
    color: white;
    border-bottom: 1px solid black;
}

.contact-form form button {
    background: black;
    border: 0;
    text-transform: uppercase;
    padding: 1em;
}

.contact-form form button:hover,
.contact-form form button:focus {
    background: pink;
    color: white;
    transition: background-color 1s ease-out;
    outline: 0;
}

/* CONTACT INFO */
.contact-info {
    background: #000;
}

.contact-info h4, .contact-info ul, .contact-info p {
    text-align: center;
    margin: 0 0 1rem 0;
}

/* LARGE SIZE */
@media(min-width: 700px) {
    body {
        padding: 0 4em;
    }
    .contact-wrapper {
        display: grid;
        grid-template-columns: 2fr 1fr;
    }
    .contact-wrapper > * {
        padding: 2em;
    }
    .contact-info h4,
    .contact-info ul,
    .contact-info p {
        text-align: left;
        color: white; 
    }
    label{
        color: white;
    }
}
    </style>