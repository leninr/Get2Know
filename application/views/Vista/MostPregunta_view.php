<!DOCTYPE html>
<html>
<head>
	<title>Comentarios</title>
</head>
<body>

 	<?php foreach($Preguntas as $Pregunta) { ?>
                <ul>
                    <li> <?php echo $Pregunta['idPregunta']; ?> / <?php echo $Pregunta['idCategoria']; ?> / <?php echo $Pregunta['PreguntaC']; ?></li>
                     <a href="<?php echo site_url('pregunta_ctrl/EditarPreguntaC/'.$Pregunta['idPregunta']); ?>">Edit</a>
                     <a href="<?php echo site_url('pregunta_ctrl/borrarPreguntaC/'.$Pregunta['idPregunta']); ?>">delete</a>
                        
                </ul>
            <?php } ?>

	</body>
</html>