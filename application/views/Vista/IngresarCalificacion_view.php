<!DOCTYPE html>
<html>
<head>
	<title>Calificacion</title>
</head>
<body>

	<?= form_open('/calificacion_ctrl/InsertarCalificacionC') ?>
	<?= form_input(array('name' => 'idcontent','placeholder' => 'Contenido')) ?>
	<?= form_input(array('name' => 'idusuario','placeholder' => 'usuario')) ?>
	<?= form_input(array('name' => 'idPregunta','placeholder' => 'pregunta')) ?>
	
	<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '1')) ?><a> 1</a>
	<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '2')) ?><a> 2</a>
	<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '3')) ?><a> 3</a>
	<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '4')) ?><a> 4</a>
	<?= form_input(array('name' => 'Calificacion','type'=> 'radio', 'value' => '5')) ?><a> 5</a>

	<?= form_submit('','Crear Calificacion')?>
	<?= form_close() ?>


</body>
</html>