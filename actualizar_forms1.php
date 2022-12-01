<?php
    include("conecta.php");
    $bd = conectar();

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];


    $sql = "insert into hoja_de_vida values ('$nombres','$apellidos','$cedula')";
    $res = mysqli_query($bd,$sql);

    if (!$res){
            echo json_encode('error');
    }
    else {
            echo json_encode('datos registrados');
    }
    mysqli_close($bd);
    