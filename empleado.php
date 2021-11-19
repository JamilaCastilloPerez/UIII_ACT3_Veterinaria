<?php 

require("con_db.php");

if (isset($_POST['empleado'])) {
    if (strlen($_POST['apellidop']) >= 1 
	&& strlen($_POST['apellidom']) >= 1 
	&& strlen($_POST['nombre']) >= 1
	&& strlen($_POST['fechadenac']) >= 1 
	&& strlen($_POST['curp']) >= 1 ) {

	    $apellidop = trim($_POST['apellidop']);
	    $apellidom = trim($_POST['apellidom']);
	    $nombre = trim($_POST['nombre']);
		$fechadenac = trim($_POST['fechadenac']);
		$curp = trim($_POST['curp']);

	    $consulta = "INSERT INTO `empleados`(`Apellido paterno`, `Apellido materno`, 
		`Nombre(s)`, `Fecha de nacimiento`, `Curp`) VALUES ('$apellidop','$apellidom','$nombre','$fechadenac','$curp')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado){
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
		}
		}else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>