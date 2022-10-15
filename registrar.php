<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 &&
	 	strlen($_POST['email']) >= 1 &&
		strlen($_POST['ntelefono']) >= 1 &&
		strlen($_POST['curso']) >= 1
		) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $ntelefono = trim($_POST['ntelefono']);
		$curso = trim($_POST['curso']);
	    $consulta = "INSERT INTO name(nombre,email,ntelefono,curso) VALUES ('$name','$email','$ntelefono','$curso')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>