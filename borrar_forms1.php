<?php
    include("conecta.php");
    $bd = conectar();


    $cedula = $_POST['cedula'];


    $sql = "delete from  hoja_de_vida where cedula=$cedula";
    $res = mysqli_query($bd,$sql);

    if (!$res){
            echo json_encode('error');
    }
    else {
            echo json_encode('datos borrados');
    }
    mysqli_close($bd);
    