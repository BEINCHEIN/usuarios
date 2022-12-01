<!DOCTYPE html>
<html>

<head>
	<title>ingresar usuario</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>


	<br>
	<br>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8 shadow-lg p-3 mb-5 bg-body rounded">

			<form  id="registro" >
				<br>
				<br>
				<div class="row">
					<div class="col-5"></div>
					<div class="col-4" >
						<h2> REGISTRAR USUARIO</h2>
					</div>
				
				</div>
				<br>
				<br>
				<br>

				<div class="row ">

					<div class="col-1"></div>
					


					<div class="col-3 "  id="nom" margin-top: 10px;>
					  
						<i class="material-icons prefix">account_circle</i>
						<label for="nombres ">Nombres</label>
						<input   class="form-control" type="text" name="nombres" id="nombres" required  >

					</div>
					

					<div class="col-3">
						<i class="material-icons prefix">account_circle </i>
						<label for="apellidos">Apellidos</label>
						<input class="form-control"  type="text" name="apellidos" id="apellidos" required>

					</div>
				
						

	
					
				
					
				</div>
				<br>
				
				<div class="row">
					<div class="col-3"></div>
					<div class="col-4">
						<i class="material-icons prefix">account_circle</i>
						<label for="cedula">cedula</label>
						<input class="form-control"  required type="number" name="cedula" id="cedula">

					</div>
					<div class="col-1">
					  
				
					

				</div>
	


				<div class="row">

					<div class="col-5"></div>
					<div class="col-3"> <button type="submit" class="btn waves-effect btn-primary">
							<i class="material-icons right">check</i>
							Descargar
						</button> </div>
					<div class="col-4"></div>

				</div>
				<br>
				<br><br>
			</form>



		</div>
					<div class="row">
				<div class="col-4"></div>
				<div class="col-4" id="respuesta">
			</div>
			</div>
		<div class="col-1"></div>
	</div>
	<br>
	




	<br>
	<footer class="page-footer teal shadow-lg bg-dark text-white">
		<div class="container">

			<br>
			<div class="row">
				<div class="col l6 s12">
					<h4 class="white-text">Hoja de vida </h4>
					<p class="grey-text text-lighten-4">formulario de información de hojas de vida </p>

				</div>

				<div class="col l6 s12 center">
					<h5 class="white-text">Contacto</h5>
					<ul>
						<li><a class="white-text" href="#!">3188844754</a></li>
						<li><a class="white-text" href="#!">iasmivan@gmail.com</a></li>



					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				Made by <a class=" text-lighten-3 " href="#"> Ivan Andres Santacuz</a>
			</div>
		</div>
	</footer>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>

	<script src="ajax.js" ></script>
</body>

</html>
