<?php
require_once'conexion.php';
if (!empty($_POST["ingresar"])) {
    if (empty($_POST["correo"]) and empty($_POST["password"])) {
        echo 'LOS CAMPOS ESTAN VACIOS';
    } else {
        $correo=$_POST["correo"];
        $contraseña=$_POST["password"];
        $sql=$enlace->query("select * from registro where correo='$correo' and contraseña='$contraseña'");
        if ($datos=$sql->fetch_object()) {
            header("location:../Inicio.html");
        } else {
            echo 'NO HAY CUENTA REGISTRADA'; 
        }
        
     }

}

?>