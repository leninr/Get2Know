<!DOCTYPE html>
<html>
<head>
	<title>Pregunta</title>
</head>
<body>

	<?= form_open('/pregunta_ctrl/InsertarPreguntaC') ?>
	<?= form_input(array('name' => 'idCategoria','placeholder' => 'categoria')) ?>
	<?= form_input(array('name' => 'PreguntaC','placeholder' => 'Pregunta')) ?>
	<?= form_submit('','Crear Contenido')?>
	<?= form_close() ?>


</body>
</html>