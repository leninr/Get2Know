<!DOCTYPE html>
<html>
<head>
	<title>Ingreso Categoria</title>
</head>
<body>

	<?= form_open('/categoria_ctrl/InsertarCategoriaC') ?>
	<?= form_input(array('name' => 'NomCategoria','placeholder' => 'Nombre Categoria')) ?>
	<?= form_input(array('name' => 'Esmusica', 'type'=> 'checkbox', 'value' => '1')) ?><a> Es musica?</a>
	<?= form_submit('','Crear Contenido')?>
	<?= form_close() ?>


</body>
</html>