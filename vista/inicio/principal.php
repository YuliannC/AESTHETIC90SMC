<a href="#openModal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close" style="color:black;" >X</a>
		<h2 style="color:black; text-align:center;">BIENVENID@ A AESTHETIC 90S MC</h2>
    <img src="public/assets/img/mary.png">&nbsp;&nbsp;&nbsp;
    <img src="public/assets/img/vestido21.png">&nbsp;&nbsp;&nbsp;
    <img src="public/assets/img/maddy.png">&nbsp;&nbsp;&nbsp;
    <img src="public/assets/img/cuerina.png">
    <p></p>
    <p style="text-align:center;"><a href="index.php" class="btn btn-sm btn-primary">Comprar ahora</a></p>
	</div>

</div>

<div class="slider">
<?php
   $ids = array(1,2,3,4,5);
   $alt = array(
      "Slide 1",
      "Slide 2",
      "Slide 3",
      "Slide 4",
      "Slide 5"
   );
   $max = count($ids);
   for($s=0;$s<$max;$s++){ ?>
    <input type="radio" id="<?= $ids[$s]; ?>" name="image-slide" hidden />
 <?php } ?>
 <div class="slideshow">
 <?php for($s=0;$s<$max;$s++){ ?>
    <div class="item-slide">
        <img src="public/assets/img/banneroriginal.jpg ">
    
    </div>
    	
<?php } ?>
 </div>
 <div class="pagination">
 <?php for($s=0;$s<$max;$s++){ ?>  	
<label class="pag-item" for="<?= $ids[$s]; ?>">
<img src="img/<?= $ids[$s]; ?>.jpg" alt="<?= $alt[$s]; ?>" />
</label>	
<?php } ?>
 </div>

</div>
<style>
@charset "utf-8";
body, html, div, img{
    margin: 0;
    padding: 0;
}
.slider{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}
.slider img{ max-width: 100%; }
.slideshow{
    display: flex;
    transform: translate3d(0, 0, 0);
    transition: all 2500ms;
    animation-name: autoplay;
    animation-duration: 25s;
    animation-direction: alternate;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
}
.item-slide{
    position: relative;
    display: flex;
    width: 100%;
    flex-direction: column;
    flex-shrink: 0;
    flex-grow: 0;
}
.pagination{
    position: absolute;
    bottom: 20px;
    left: 0;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    width: 100%;
}
.pag-item{
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 2px solid #CCC;
    width: 16px;
    height: 16px;
    border-radius: 5px;
    overflow: hidden;
    cursor: pointer;
    background: rgba(255, 255, 255, 0.5);
    margin: 0 10px;
    text-align: center;
    transition: all 800ms;
}
.pag-item:hover{ transform: scale(2); }
.pag-item img{
    display: inline-block;
    max-width: none;
    height: 100%;
    transform: scale(1);
    opacity: 0;
    transition: all 300ms;
}
.pag-item:hover img{
    opacity: 1;
}
@keyframes autoplay{
    20%{ transform: translate3d(calc(-100% * 0), 0, 0); }
    40%{ transform: translate3d(calc(-100% * 1), 0, 0); }
    60%{ transform: translate3d(calc(-100% * 2), 0, 0); }
    80%{ transform: translate3d(calc(-100% * 3), 0, 0); }
    100%{ transform: translate3d(calc(-100% * 4), 0, 0); }
}
input[id="1"]:checked ~ .slideshow{
    animation: none;
    transform: translate3d(cal(-100% * 0),0,0);
}
input[id="2"]:checked ~ .slideshow{
    animation: none;
    transform: translate3d(cal(-100% * 1),0,0);
}
input[id="3"]:checked ~ .slideshow{
    animation: none;
    transform: translate3d(cal(-100% * 2),0,0);
}
input[id="4"]:checked ~ .slideshow{
    animation: none;
    transform: translate3d(cal(-100% * 3),0,0);
}
input[id="5"]:checked ~ .slideshow{
    animation: none;
    transform: translate3d(cal(-100% * 4),0,0);
}
input[id="1"]:checked ~ .pagination .pag-item[for="1"]{
    background: #FFF;
}
input[id="2"]:checked ~ .pagination .pag-item[for="2"]{
    background: #FFF;
}
input[id="3"]:checked ~ .pagination .pag-item[for="3"]{
    background: #FFF;
}
input[id="4"]:checked ~ .pagination .pag-item[for="4"]{
    background: #FFF;
}
input[id="5"]:checked ~ .pagination .pag-item[for="5"]{
    background: #FFF;
}
.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}
.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}
.modalDialog > div {
	width: 1100px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
  -webkit-transition: opacity 400ms ease-in;
-moz-transition: opacity 400ms ease-in;
transition: opacity 400ms ease-in;
}
.close {
	background: #FFC0CB;
	color: #FFC0CB;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}
.close:hover { background: #00d9ff; }
</style>
  

<!-- <header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/bg2.jpg')">
    <span class="mask bg-gradient-primary opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">AESTHETIC 90s MC</h1>
          <p class="lead text-white mt-3">Somos diseño, color y estilo <br/>Somos fabricantes <br><img src="public/assets/img/logo.png"> <br> <a class="btn btn-sm bg-gradient-dark w-100 border-radius-md mt-4 mb-2" href="login.php">
            Iniciar sesion</button>
            <br>
            <a href="?controlador=cliente&accion=registro">Registrarse</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</header> -->
<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto py-3">
        <div class="row">
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"><span id="state1" countTo="70">1</span></h1>
              <h5 class="mt-3">Calidad y estilo</h5>
              <p class="text-sm font-weight-normal">Deja que la belleza de lo que amas sea lo que haces, Una mujer segura de si misma se ve mas sexy y encantadora.</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary"> <span id="state2" countTo="15">2</span></h1>
              <h5 class="mt-3">Casual y elegante</h5>
              <p class="text-sm font-weight-normal">Cada mujer tiene su estilo, y la armonizacion de su paciencia va acorde con su personalidad. ! Asi que dejalo fluir ¡.</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-primary" id="state3" countTo="4">3</h1>
              <h5 class="mt-3">Ideal para ti</h5>
              <p class="text-sm font-weight-normal">Estilo de ropa que se ajusta a la estetica y comodidad necesaria para las ciudades en e dia a dia, perfecto para t.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div style="text-align:center;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/FNpuLidlo78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<!-- <section>
<h2 style="text-align:center;">Productos mas vendidos</h2>
<div>
    <div>
    <img src="public/assets/img/mary.png">
    <img src="public/assets/img/vestido21.png">&nbsp;&nbsp;&nbsp;
    <img src="public/assets/img/maddy.png">&nbsp;&nbsp;&nbsp;
    <img src="public/assets/img/cuerina.png">
	</div>
</section> -->

<section class="py-sm-7" id="pricing-soft-ui">
  
  <div class="bg-gradient-primary position-relative mx-n3 overflow-hidden">
  <img src="./assets/img/shapes/pattern-lines.svg" alt="" class="position-absolute start-0 top-md-0 w-100 opacity-6">
  <div class="container pb-lg-8 pb-7 pt-5 postion-relative z-index-2 position-relative">
  <div class="row">
  <div class="col-md-7 mx-auto text-center">
  <span class="badge bg-gradient-dark mb-2">AESTHETIC 90s MC</span>
  <h3 class="text-white">Lista para comprar?</h3>
  <p class="text-white">Aqui encontraras diferentes prendas, unicas, diseñadas para tu comodidad y para resaltar tu belleza aun mas. </p>
  </div>
  </div>
  </div>
  </div>
  <div class="mt-lg-n8 mt-n6">
  <div class="container">
  <div class="row mt-5">
  <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
  <div class="card bg-gradient-dark h-100">
  <div class="card-header bg-transparent text-sm-start text-center pt-4 pb-3 px-4">
  <h5 class="mb-1 text-white">Vestidos</h5>
  <p class="mb-3 text-sm text-white">Tenemos diferentes estilos de vestidos para ti.</p>
  </div>
  <hr class="horizontal light my-0">
  <div class="card-body z-index-2">
  <div class="d-flex pb-3">
  <span class="text-sm ps-3 text-white"> <img src="public/assets/img/ves.png" style="height: 360px;"></span>
  </div>
  </div>
  </div>
  </div>
  <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
  <div class="card h-100">
  <div class="card-header text-sm-start text-center pt-4 pb-3 px-4">
  <h5 class="mb-1">Pants</h5>
  <p class="mb-3 text-sm">Obtienes mucha comodidad y te ves preciosa.</p>
  </div>
  <hr class="horizontal dark my-0">
  <div class="card-body">
  <div class="d-flex pb-3">
  <span class="text-sm ps-3"><img src="public/assets/img/chaqueta.png" style="height: 360px;"></span>
  </div>
  </div>
  </div>
  </div>
  <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
  <div class="card bg-gradient-dark h-100">
  <div class="card-header bg-transparent text-sm-start text-center pt-4 pb-3 px-4 z-index-2">
  <h5 class="mb-1 text-white">Conjuntos</h5>
  <p class="mb-3 text-sm text-white">Perfectas para resaltar tu belleza pura.</p>
  </div>
  <hr class="horizontal light my-0">
  <div class="card-body z-index-2">
  <div class="d-flex pb-3">
  <span class="text-sm ps-3 text-white"><img src="public/assets/img/corset.png" style="height: 335px;"></span>
  </div>
  </div>
  </div>
  </div>
  
  </section>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

<div class="container">
    <div class="row">
      <div class="col-6 mx-auto">
        <div class="text-center">
          <h3 class="mt-5 mb-4">Metodos de pago</h3>
          <div class="row justify-content-center">
            <div class="col-lg-2 col-4">
              <a href="javascript:;">
                <img src="https://static-s.aa-cdn.net/img/ios/565101003/6a63388f4da74ece559480a458eecc4d?v=1" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href="javascript:;">
                <img src="https://static-s.aa-cdn.net/img/gp/20600005619403/J2CfzgROe1_weYm7yNIffrAGsGeahADM6r2qMN3C9pNw-i0TJR71LGbVX9y2N7t6dw?v=1" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href="javascript:;">
                <img src="https://static-s.aa-cdn.net/img/gp/20600005580576/fIwuxVTuoLOzhrKJL6GCGIKuEJc6JFu9Ii97cp0nFWE61qpfeaIhFBiNL5wFcydvhQA?v=1" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href="javascript:;">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid opacity-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comming soon">
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  <br> <br> <br>
