<!DOCTYPE html>
<html>
<head>
	<title>Comentarios</title>
</head>
<body>

 	<?php foreach($Comentarios as $Comentario) { ?>
                <ul>
                    <li> <?php echo $Comentario['idcontent']; ?> / <?php echo $Comentario['idusuario']; ?> / <?php echo $Comentario['idPregunta']; ?> / <?php echo $Comentario['Comentario']; ?></li>
                    <a href="<?php echo site_url('comentario_ctrl/EditarComentarioC/'.$Comentario['idcontent'].'/'.$Comentario['idusuario'].'/'.$Comentario['idPregunta']); ?>">Edit</a>
                    <a href="<?php echo site_url('comentario_ctrl/borrarComentarioC/'.$Comentario['idcontent'].'/'.$Comentario['idusuario'].'/'.$Comentario['idPregunta']); ?>">delete</a>
                     
                        
                </ul>
            <?php } ?>

	</body>
</html>