<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
</head>
<body>

	<?= form_open('/comentario_ctrl/actualizarComentarioC/'.$id.'/'.$idcom.'/'.$idPre) ?>
	<?= form_input(array('name' => 'idcontent', 'value' => $Comentarios->result()[0]->idcontent,'placeholder' => 'Contenido')) ?>
	<?= form_input(array('name' => 'idusuario', 'value' => $Comentarios->result()[0]->idusuario,'placeholder' => 'usuario')) ?>
	<?= form_input(array('name' => 'idPregunta', 'value' => $Comentarios->result()[0]->idPregunta,'placeholder' => 'pregunta')) ?>
	<?= form_input(array('name' => 'Comentario', 'value' => $Comentarios->result()[0]->Comentario,'placeholder' => 'Comentario')) ?>
	<?= form_submit('','Crear Contenido')?>
	<?= form_close() ?>


</body>
</html>