<!DOCTYPE html>
<html>
<head>
	<title>Registro de Empleados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">

    	<h1>¡Registrate y trabaja con Nosotros!</h1>

    	<input type="text" name="apellidop" placeholder="Apellido paterno">
    	<input type="text" name="apellidom" placeholder="Apellido materno">
        <input type="text" name="nombre" placeholder="Nombre(s)">
        <input type="date" name="fechadenac" placeholder="Fecha de nacimiento">
        <input type="text" name="curp" placeholder="Curp">

    	<input type="submit" name="empleado">
    </form>
        <?php 
        include("empleado.php");
        ?>

<footer>
		<div class="wrapp">
            <p>Castillo Perez Jamila Itzel 5J-No lista 06 </p>
            <p> // SUBMÓDULO 2
                Desarrolla aplicaciones Web con conexión a bases de datos</p>
           <a href="https://github.com/JamilaCastilloPerez">https://github.com/JamilaCastilloPerez</a>
		</div>
	</footer>
</body>
</html>