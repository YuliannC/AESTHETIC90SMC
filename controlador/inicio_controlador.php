<?php
class inicio_controlador{

    public function __construct(){
      $this->vista = new estructura();
    }

    public function index(){
        $this->vista->unirContenido("inicio/principal");
        // $this->vista->unirContenido("inicio/frmLogin",false);
    }
    public function principal(){
      // if(!isset($_SESSION["CLI_ID"])){
      //     header("location: /");
      // }
      $this->vista->unirContenido("inicio/principal");
  }

}
?>
