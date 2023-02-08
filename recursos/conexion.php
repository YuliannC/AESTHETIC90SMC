<?php
class conexion{
    private $c; 
    private $usuario ="root"; 
    private $password =""; 
    private $host ="mysql:host=localhost;dbname=BDMVC2";

    private $usuario1 ="id19540103_isaac"; 
    private $password1 ="3gOg=c@ZDl8KpS\*"; 
    private $host1 ="mysql:host=localhost;dbname=id19540103_automotriz";

    public function __construct(){ 
        try{
            if($_SERVER["SERVER_NAME"] == "localhost"){
                $this->c = new PDO($this->host, $this->usuario, $this->password);
            }else{
                $this->c = new PDO($this->host1, $this->usuario1, $this->password1);
            }
            $this->c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error al conectar:" .$e->getMessage();
        }
    }
    public function getConexion(){ 
        return $this->c; 
    }
}
// app 000webhost
// NOMBRE:APPISAAC
// CONTRASEÑA:l2AoA42OHnSMb*qdTSC%

// BASE DE DATO
// USUARIO:isaac
// PASSWORD:3gOg=c@ZDl8KpS\*
// nombre de base de dato:id19540103_automotriz