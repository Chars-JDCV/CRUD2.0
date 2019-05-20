<?php
 ob_start();
 session_start();
 error_reporting(0);
 if(isset($_SESSION['user_name']))
	{
    header("location: index.php");
    exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>SIRIDS | Login</title>
	<link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
<div class="slider">
    <div class="load">
    </div>
</div>
	<form id="frmlogin" namespace= "frmlogin" action="main.php" method="post" class="login">
		<div class="presentacion">
            <h2 class="text-center">
                <strong>
                    SIRDIS
                </strong>
            </h2>
        </div>
		<input type="hidden" class="form-control" name="action" id="action" value="login">
		<h4 class="text-center">Inicio de sesión</h4>
		<div class="form-group" >
			<label  for="Nombre">Nombre</label>
			<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Escribe tu nombre">
		</div>
		<div class="form-group">
			<label for="Pass">Password</label>
			<input type="password" class="form-control" name="clean_pass" id="clean_pass" placeholder="Escribe tu Clave">
		</div>
		<?php if($_GET['error']) : ?>
		<div class="form-group">
		<span class ='error'> Usuario u/o Contraseña Incorrecta</span>
		</div>
		<?php endif; ?>
		<div class="form-actions">
			<p class="text-center">
				<input type="submit" value="Enviar" id ="btnEnviar" class="btn btn-primary btn-block">
			</p>
        </div>  
	</form>
	<script src="../assets/js/jquery-3.1.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<!-- js jquery-validation  verificar porque no me deja validar y hacer el submit al mismo tiempo-->
	<script src="../assets/plugin/jquery-validation/js/jquery.validate.min.js?v=3"></script>
	<script src="../assets/plugin/jquery-validation/js/additional-methods.min.js?v=15"></script>
	<script src="../assets/plugin/jquery-validation/js/localization/messages_es.min.js" type="text/javascript"></script>
	<!-- end js jquery-validation -->
	<script src="main.js?v=6"></script>
</body>
</html>