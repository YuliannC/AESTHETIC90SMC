<?php
require_once "modelo/usuarios_modelo.php";
class cliente_controlador{
    public function index(){
        $this->vista->datos = usuarios_modelo::mdlListar();
        $this->vista->unirContenido("usuarios/principal");
    }
    public function __construct(){
        $this->vista = new estructura();
    }
    public function principal(){
      //  $this->vista->datos=cliente_modelo::mdlListar();
        $this->vista->unirContenido("usuarios/principal"); 
    }
    public function listar(){
        $this->vista->datos = cliente_modelo::mdlListar();
        $this->vista->unirContenido("usuarios/listar");
    }
    public function frmRegistro(){
        $this->vista->unirContenido("usuarios/frmRegistro");
    }
    public function frmEditar(){
      //  $id = $_GET["cli_id"];
      // $this->vista->datos=cliente_modelo::consultarId($id);
       $this->vista->unirContenido("usuarios/frmEditar");
    }
    public function Registrar(){
        extract($_POST);
        $datos["nombres"] = $nombres;
        $datos["apellidos"] = $apellidos;
        $datos["telefono"] = $telefono;
        $datos["correo"] = $correo;
        $datos["contrasena"]  = $contrasena;
        $datos["srol"]  = $srol;

        $r = cliente_modelo::mdlRegistrar($datos);
        if($r > 0)
         {
          echo json_encode(array("mensaje"=> "Registrado","icono"=>"succcess"));
         } 
         else{
            echo json_encode(array("mensaje"=> "Error al registrar","icono"=>"error"));
         }
    }
    public function validar(){
        extract($_POST);
        $datos["usuario"] = $usuario;
        $datos["password"] = $password;
        $r=cliente_modelo::mdlvalidar($datos);
        if($r > 0){
            $_SESSION["CLI_NOMBRES"]   =$r["CLI_NOMBRES"];
            $_SESSION["CLI_APELLIDOS"] =$r["CLI_APELLIDOS"];
            $_SESSION["CLI_ROL"]       =$r["CLI_ROL"];
            $_SESSION["CLI_ID"]        =$r["CLI_ID"];
            echo json_encode(array(
                "mensaje" => "ashly", 
                "icono" => "succes", 
                "URL" => "?controlador=inicio&accion=principal"));
        }else{
            echo json_encode(array("mensaje" => "Usuario / Contraseña errados", "icono" => "error"));
        }
        
    }
    public function salir(){
        session_destroy();
        header("location: /App");
    }

   public static function buscarByApellido(){
    extract($_POST);
    $datos = cliente_modelo::mdlconsultarByApe($apellidos);
    $tbl = "<table class='table'>";
    $tbl .= "<tr>";
    $tbl .= "<td>NOMBRES</td>";
    $tbl .= "<td>APELLIDOS</td>";
    $tbl .= "<td>TELEFONO</td>";
    $tbl .= "<td>CORREO</td>";
    $tbl .= "<td>ROL</td>";
    $tbl .="<td>ESTADO</td>";
    $tbl .= "</tr>";
    foreach($datos as $v){
        $id=$v["CLI_ID"];
        $e="<a href='?controlador=cliente&accion=eliminar&cli_id=$id' class='eliminar'>ELIMINAR</a>";
        $ed = "<a href='?controlador=cliente&accion=editar&id=$id'class='Editar'>Editar</a>";
        $tbl.= "<tr>";
        $tbl.= "<td>".$v["USU_NOMBRE"]."</td>";
        $tbl.= "<td>".$v["USU_APELLIDO"]."</td>";
        $tbl.= "<td>".$v["USU_TELEFONO"]."</td>";
        $tbl.= "<td>".$v["USU_CORREO"]."</td>";
        $tbl.= "<td>".$v["USU_ROL"]."</td>";
        $estado=$v ["CLI_ESTADO"]==1? "ACTIVO": "INACTIVO";
        $tbl.="<td>".$estado."</td>";
        $tbl.="<td>$ed</td>";
        $tbl.="<td>$e</td>";
        $tbl.= "</tr>";
    }
    $tbl .="</table>";
    echo json_encode(array("mensaje"=>$tbl));  
  }
  public function editar(){
    extract($_POST);
    $datos["nombres"]    = $nombres;
    $datos["apellidos"]  = $apellidos;
    $datos["documento"]  = $documento;
    $datos["rol"]        = $rol;
    $datos["codigo"]     = $codigo;
    $datos["id"]         = $id;
    $r = cliente_modelo::mdleditar($datos);
    if( $r > 0){
        echo json_encode(array("mensaje" => "Editado Correctamente" , "icono"=>"success"));
    }else{
        echo json_encode(array("mensaje" => "Error al editar" , "icono"=>"error"));
    }
}
  public function eliminar(){
    $id = $_GET["cli_id"];
    $e=cliente_modelo::mdleliminar($id);
    if($e > 0){
        echo json_encode(array("mensaje" => "Se elimino cliente" ,"icono"=>"success"));
    }else{
        echo json_encode(array("mensaje" => "No se  elimino cliente " ,"icono"=>"Error"));
    }
 }

} 
   

?>

