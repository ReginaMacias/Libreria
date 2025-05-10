<?php
      $servidor = "localhost";
      $usuario = "root";
      $clave ="";
      $basededatos = "libreria";     

      $enlace = mysqli_connect($servidor,$usuario,$clave,$basededatos);
      

      if (isset($_POST['Registro'])) {

        $nombre=$_POST["nombre"];
        $apeidoP=$_POST["apeidoP"];
        $apeidoM=$_POST["apeidoM"];
        $telefono=$_POST["telefono"];
        $correo=$_POST["correo"];
        $contraseña=$_POST["contraseña"];
    
        $insertDatos = "INSERT INTO registro VALUES('$nombre','$apeidoP','$apeidoM','$telefono','$correo','$contraseña')";
    
        $ejecutarInsertar = mysqli_query($enlace,$insertDatos);
    }
?>