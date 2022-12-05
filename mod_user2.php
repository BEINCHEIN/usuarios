<!DOCTYPE html>
<html>

<head>
    <?php include("head.php") ?>
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
        <br>
        <h3>Modificar el registro del usuario:</h3>
        <div class="row">
            <div class="col-6">
                <?php
                include("conecta.php");
                $bd = conectar();
                $ced = $_POST["txtced"];
                $nom="";
                $ape="";
                $gen="M";
                $fec="";
                $tel="";    

                $sql = "select * from usuarios where cedusu = '$ced'";
                $datos = mysqli_query($bd, $sql);
                $c = 0;
                while ($arr = mysqli_fetch_array($datos)) {
                    $c++;
                    $nom = $arr[1];
                    $ape = $arr[2];
                    $gen = $arr[3];
                    $fec = $arr[4];
                    $tel = $arr[5];

                }
                if ($c > 0) {
                    echo "<h4>$nom con cédula $ced</h4>";
                ?>
                <br>
                 <form action="mod_user3.php" method="get">
                    <input type="hidden" name="txtced_original" value="<?php echo $ced ?>">
                    <div class="mb-3">
                        <label for="txtced" class="form-label">Cédula</label>
                        <input type="number" required min="0" name="txtced" id="txtced" class="form-control" value="<?php echo $ced ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtnom" class="form-label">Nombres</label>
                        <input type="text" required maxlength="100" name="txtnom" id="txtnom" class="form-control" value="<?php echo $nom ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtape" class="form-label">Apellidos</label>
                        <input type="text" required maxlength="100" name="txtape" id="txtape" class="form-control" value="<?php echo $ape ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Género</label>
                        <div class="form-check">
                            <?php
                                if ($gen=="M"){
                                    echo "<input class='form-check-input' type='radio' name='optgen' id='optgen1' required value='M' checked>";
                                }
                                else{
                                    echo "<input class='form-check-input' type='radio' name='optgen' id='optgen1' required value='M'>";
                                }
                            ?>
                            
                            <label class="form-check-label" for="optgen1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <?php
                                if ($gen=="F"){
                                    echo "<input class='form-check-input' type='radio' name='optgen' id='optgen2' required value='F' checked>";
                                }
                                else{
                                    echo "<input class='form-check-input' type='radio' name='optgen' id='optgen2' required value='F'>";
                                }
                            ?>
                            <label class="form-check-label" for="optgen2">
                                Femenino
                            </label>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="texfec" class="form-label">Fecha de nacimiento</label>
                        <input type="date" required name="txtfec" id="txtfec" class="form-control" value="<?php echo $fec?>">
                    </div>

                    <div class="mb-3">
                        <label for="textel" class="form-label">Teléfono</label>
                        <input type="number" required name="txttel" id="txttel" class="form-control" value="<?php echo $tel?>">
                    </div>
                    <hr>

                    <input type="submit" value="Modificar" class="btn btn-primary">
                    <input type="reset" value="Limpiar" class="btn btn-secondary">
                    
                </form>
                
                <?php
                } else {
                    echo "<div class='alert alert-warning' role='alert'>Usuario con cédula $ced no existe</div>";
                }
                mysqli_close($bd);

                ?>
            </div>

            <div class="col-6"></div>
        </div>
    </div>
    <!--fin contenedor-->

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/codigo.js"></script>

</body>

</html>