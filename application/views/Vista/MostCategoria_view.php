<!DOCTYPE html>
<html>
<head>
	<title>Categorias</title>
</head>
<body>

 	<?php foreach($Categorias as $Categoria) { ?>
                <ul>
                    <li> <?php echo $Categoria['idCategoria']; ?> / <?php echo $Categoria['NomCategoria']; ?> / <?php echo $Categoria['Esmusica']; ?></li>
                     
                        
                </ul>
            <?php } ?>

	</body>
</html>