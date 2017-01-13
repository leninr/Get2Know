<!DOCTYPE html>
<html>
<head>
	<title>ActualizarPregunta</title>
</head>
<body>

	<?= form_open('/pregunta_ctrl/actualizarPreguntaC/'.$id) ?>
	<?= form_input(array('name' => 'idCategoria', 'value' => $Preguntas->result()[0]->idCategoria,'placeholder' => 'Categoria')) ?>
	<?= form_input(array('name' => 'PreguntaC', 'value' => $Preguntas->result()[0]->PreguntaC,'placeholder' => 'Pregunta')) ?>
	<?= form_submit('','Crear Contenido')?>
	<?= form_close() ?>


</body>
</html>