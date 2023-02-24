<?php
require_once "modelo/productos_modelo.php";
require_once "modelo/proveedores_modelo.php";
class productos_controlador{
    
    public function __construct(){
        $this->vista = new estructura();
        // if(!isset($_SESSION["CLI_ID"])){
        //     header("location: /AESTHETIC90S");
        // }
    }
    public function principal(){
        $this->vista->unirContenido("productos/principal");
    }
    public function frmRegistrar(){
        $this->vista->unirContenido("productos/frmRegistro");
    }
    public function vercarrito(){
        $this->vista->unirContenido("productos/carrito");
    }
    public function vervestido(){
        $this->vista->unirContenido("productos/vestidos");
    }
    public function verfalda(){
        $this->vista->unirContenido("productos/pant");
    }
    public function verconjunto(){
        $this->vista->unirContenido("productos/pant");
    }
    public function verpant(){
        $this->vista->unirContenido("productos/pant");
    }
    public function detalles(){
        $this->vista->unirContenido("productos/detalle");
    }
    public function verbolsa(){
        $this->vista->unirContenido("productos/bolsa");
    }
    public function registrar(){
        extract($_POST);
        $datos["prov_pro"]  = $prov_id;
        $re=proveedoores_modelo::mdlBuscarXCOD($prov_id);
        // $datos["tprev_rev_id"]    = $rev_id;
        $datos["PRO_NOMBRE"]      = $nombres;
        $datos["PRO_DESCRIPCION"]       = $descripcion;
        $datos["PRO_CANTIDAD"]        = $cantidad;
        $datos["PRO_FOTO"]        = $foto;
        $datos["PRO_COLORES"]        = $colores;
        $datos["PRO_PRECIO"]        = $precio;


        if($re > 0){
            $datos["prov_id"]  = $re["PRO_ID"];
            $r=proveedores_modelo::mdlRegistrar($datos);
            if($r > 0){
                echo json_encode(array("mensaje" => "Registrado" , "icono"=>"success"));
            }
            // else{
                // echo json_encode(array("Error al registrar" , "icono"=>"error"));
            // }
        }else {
            echo json_encode(array("mensaje" => "Error al registrar" , "title" => "Ese codigo de revision no esxiste", "icono"=>"error"));
        }
    }

    public function frmEditar(){
        $id = $_GET["tprev_id"];
        $this->vista->dato=tipo_revision_modelo::consultarXID($id);
        $this->vista->unirContenido("tipo_revision/frmEditar");
    }
    public function editar(){
        extract($_POST);
        $rta = revision_modelo::consultarBYid($rev_codigo);
        $datos["tprev_rev_codigo"]  = $rta["REV_ID"];
        $datos["tprev_fecha"]      = $fecha;
        $datos["tprev_tipo"]       = $tipo;
        $datos["tprev_obs"]        = $observacion;
        $datos["tprev_id"]     = $id;
        $r = tipo_revision_modelo::mdlEditar($datos);
        if( $r > 0){
            echo json_encode(array("mensaje" => "Editado Correctamente" , "icono"=>"success"));
        }else{
            echo json_encode(array("mensaje" => "Error al editar" , "icono"=>"error"));
        }    
    }

    public function eliminar(){
        $id = $_GET["tprev_id"];
        $e = tipo_revision_modelo::mdlEliminar($id);
        if($e > 0){
            echo json_encode(array("mensaje" => "Se elimino tipo de revision" , "icono"=>"success"));
        }else{
            echo json_encode(array("mensaje" => "No se elimino" , "icono"=>"error"));
        }
    }

    public function frmDetalles(){
        $id = $_GET["tprev_id"];
        $this->vista->datos=tipo_revision_modelo::mdlDetalles($id);
        $this->vista->unirContenido("tipo_revision/frmDetalles");
    }

    public function consultarXcodigo(){
        extract($_POST);
        $datos = tipo_revision_modelo::mdlconsultarXcodigo($codigo);
        $tbl = "<table class='table'>";
        $tbl .= "<tr>";
        $tbl .= "<td>Codigo de revision</td>";
        $tbl .= "<td>Fecha</td>";
        // $tbl .= "<td>Tipo de revision</td>";
        // $tbl .= "<td>Observacion</td>";
        // $tbl .= "<td>Estado</td>";
        $tbl .= "</tr>";
        foreach ($datos as $v){
            $id = $v["TPREV_ID"];
            $e = "<a  href='?controlador=tipo_revision&accion=eliminar&tprev_id=$id'class='eliminar btn btn-danger'>
            Eliminar</a>";
            $f ="<a  href='?controlador=tipo_revision&accion=frmEditar&tprev_id=$id'class='btn btn-info'>
            Editar</a>";
            $d ="<a  href='?controlador=tipo_revision&accion=frmDetalles&tprev_id=$id'class='btn btn-light'>
            Detalles</a>";
            $tbl .= "<tr>";
            $tbl .= "<td>".$v["REV_CODIGO"]."</td>";
            $tbl .= "<td>".$v["TPREV_FECHA"]."</td>";
            // $tbl .= "<td>".$v["TPREV_TIPO"]."</td>";
            // $tbl .= "<td>".$v["TPREV_OBS"]."</td>";
            // $estado = $v ["TPREV_ESTADO"] == 1 ? "ACTIVO":"INACTIVO";
            // $tbl .= "<td>$estado</td>";
            $tbl .= "<td>$f</td>";
            $tbl .= "<td>$e</td>";
            $tbl .= "<td>$d</td>";
            $tbl .= "</tr>";
        }
        $tbl .= "</table>";
        echo json_encode(array("mensaje"=> $tbl));
    }
}
?>