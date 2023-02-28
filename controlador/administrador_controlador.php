<?php
require_once "modelo/administrador_modelo.php";
class administrador_controlador{
    public function __construct(){
        $this->vista= new  estructura();
        //  if(!isset($_SESSION["CLI_ID"])){
        //     header("location: /APPAUTO");
        // }

    }
    // public function index(){
    //     // $this->vista->datos = cliente_modelo::mdlListar();
    //     $this->vista->unirContenido("cliente/principal");
    // }
    public function  principal(){
        //$this->vista->datos = cliente_modelo::mdlListar();
        $this->vista->unirContenido("administrador/principal");
        
    }
    public function  listarPQR(){
        $this->vista->datos = administrador_modelo::mdlListar();
        $this->vista->unirContenido("administrador/pqr");
        
    }
     public function registros(){
         $this->vista->unirContenido("administrador/registro");
        //  if($_SESSION['CLI_ROL'] == "Administrador" ||
        //         $_SESSION['CLI_ROL'] == "Mecanico")
    }
    public function contactanos(){
        $this->vista->unirContenido("administrador/contactanos");
       //  if($_SESSION['CLI_ROL'] == "Administrador" ||
       //         $_SESSION['CLI_ROL'] == "Mecanico")
   }
    
    public function registrarPqr(){
        extract($_POST);
        $datos["nombres"]   = $nombres;
        $datos["apellidos"]   = $apellidos;
        $datos["whatsapp"] = $whatsapp;
        $datos["correo"]      = $correo;
        $datos["mensaje"] = $mensaje;

        $r = administrador_modelo::mdlRegistrarPqr($datos);
        if($r > 0){
        echo json_encode(array("mensaje" => "PQR registrado",
                        "icono"=> "success"));
        }else{
            echo json_encode(array("mensaje" => "Error al registrar PQR",
                        "icono"=> "error"));
        }
    }
    
}
?>