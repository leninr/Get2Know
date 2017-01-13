<!DOCTYPE html>
<html>
<head>
	<title>Comentario</title>
</head>
<body>

	<?= form_open('/comentario_ctrl/InsertarComentarioC') ?>
	<?= form_input(array('name' => 'idcontent','placeholder' => 'Contenido')) ?>
	<?= form_input(array('name' => 'idusuario','placeholder' => 'usuario')) ?>
	<?= form_input(array('name' => 'idPregunta','placeholder' => 'pregunta')) ?>
	<?= form_input(array('name' => 'Comentario','placeholder' => 'Comentario')) ?>
	<?= form_submit('','Crear Comentario')?>
	<?= form_close() ?>


</body>
</html>