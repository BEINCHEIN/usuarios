<?php
    function conectar(){
        $bd = mysqli_connect("localhost","root","","registros");
        if (!$bd){
            echo "<h3>Error de conexión</h3>Base de datos  formularios no diponible";
            return NULL;
        }
        else{
            return $bd;
        }
    }
?>