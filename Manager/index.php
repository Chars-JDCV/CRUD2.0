<!-- Incluye los css y jquery, Ademas de la parte del encabezado de las paginas-->
<?php 
	/*session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: ../index.php');
	}*/
?>
<?php
    include '../header.php';
    ?>
<!-- Incluye el panel de vbar y dashboard-->
<?php include '../head.php'; ?>


<!-- Incluye el cuerpo de la pagina-->
<h1 id="Catalogo"></h1>
<button id="btnModalRegistro" class="btn btn-success">Nuevo Registro</button>
<div class="row">
    <div class="col-md-9">
        <table id="tblTabla" class="table table-stripped table-hover">

        </table>
    </div>
</div>
<?php
    include 'Registro.php';
?>
<?php
    include 'Actualizacion.php';
?>
<?php
    include 'Eliminar.php';
?>
<!-- Incluye los js, tanto como de plugin como el js main ademas lleva la terminiacion del
        Documentos de las paginas-->
<?php
    include '../footer.php';
    ?>
<script src="main.js?v=2"></script>