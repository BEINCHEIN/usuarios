<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php") ?>
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
        <br>
        <h3>Registro de usuarios</h3>
        <br>
        
        <div class="row">
            <div class="col-6">
                <form action="add_user2.php" method="post">
                    <div class="mb-3">
                        <label for="txtced" class="form-label">Cédula</label>
                        <input type="number" required min="0" name="txtced" id="txtced" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="txtnom" class="form-label">Nombres</label>
                        <input type="text" required maxlength="100" name="txtnom" id="txtnom" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="txtape" class="form-label">Apellidos</label>
                        <input type="text" required maxlength="100" name="txtape" id="txtape" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Género</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="optgen" id="optgen1" required value="M">
                            <label class="form-check-label" for="optgen1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="optgen" id="optgen2" checked value="F">
                            <label class="form-check-label" for="optgen2">
                                Femenino
                            </label>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="texfec" class="form-label">Fecha de nacimiento</label>
                        <input type="date" required name="txtfec" id="txtfec" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="textel" class="form-label">Teléfono</label>
                        <input type="number" required name="txttel" id="txttel" class="form-control">
                    </div>
                    
                    <hr>
                    <input type="submit" value="Guardar" class="btn btn-success">
                    <input type="reset" value="Limpiar" class="btn btn-secondary">
                    
                </form>

            </div>

            <div class="col-6"></div>
        </div>
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>