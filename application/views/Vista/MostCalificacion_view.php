<!DOCTYPE html>
<html>
<head>
	<title>Calificacion</title>
</head>
<body>

 	<?php foreach($Calificaciones as $Calificacion) { ?>
                <ul>
                    <li> <?php echo $Calificacion['idcontent']; ?> / <?php echo $Calificacion['idusuario']; ?> / <?php echo $Calificacion['idPregunta']; ?> / <?php echo $Calificacion['Calificacion']; ?></li>
                    <a href="<?php echo site_url('calificacion_ctrl/EditarCalificacionC/'.$Calificacion['idcontent'].'/'.$Calificacion['idusuario'].'/'.$Calificacion['idPregunta']); ?>">Edit</a>
                    <a href="<?php echo site_url('calificacion_ctrl/borrarCalificacionC/'.$Calificacion['idcontent'].'/'.$Calificacion['idusuario'].'/'.$Calificacion['idPregunta']); ?>">delete</a>
                     
                        
                </ul>
            <?php } ?>

	</body>
</html>