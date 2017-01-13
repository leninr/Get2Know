<!DOCTYPE html>
<html>
<head>
	<title>Contenido</title>
</head>
<body>

	<?= form_open('/content_ctrl/InsertarContentC') ?>
	<?= form_input(array('name' => 'idusuario','placeholder' => 'nombre usuario')) ?>
	<?= form_input(array('name' => 'idcategoria','placeholder' => 'nombre usuario')) ?>
	<?= form_input(array('name' => 'nomCont','placeholder' => 'nombre usuario')) ?>
	<?= form_input(array('name' => 'fechaCont','placeholder' => 'nombre usuario')) ?>
	<?= form_input(array('name' => 'descripcion','placeholder' => 'nombre usuario')) ?>
	<input type="file" name="userfile"/>
	<?= form_submit('','Crear Contenido')?>
	<?= form_close() ?>


</body>
</html>