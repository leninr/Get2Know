<!DOCTYPE html>
<html>
<head>
	<title>Actualizar calificacion</title>
</head>
<body>

	<?= form_open('/calificacion_ctrl/actualizarCalificacionC/'.$id.'/'.$idcom.'/'.$idPre) ?>
	<?= form_input(array('name' => 'idcontent', 'value' => $Calificaciones->result()[0]->idcontent,'placeholder' => 'Contenido')) ?>
	<?= form_input(array('name' => 'idusuario', 'value' => $Calificaciones->result()[0]->idusuario,'placeholder' => 'usuario')) ?>
	<?= form_input(array('name' => 'idPregunta', 'value' => $Calificaciones->result()[0]->idPregunta,'placeholder' => 'pregunta')) ?>
	<!--form_input(array('name' => 'Calificacion', 'value' => $Calificaciones->result()[0]->Calificacion,'placeholder' => 'Calificacion'))-->
	
	<?php if($Calificaciones->result()[0]->Calificacion == 1) : ?>
	    <?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '1', 'checked' => 'checked')) ?><a> 1</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '2')) ?><a> 2</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '3')) ?><a> 3</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '4')) ?><a> 4</a>
		<?= form_input(array('name' => 'Calificacion','type'=> 'radio', 'value' => '5')) ?><a> 5</a>
	<?php elseif($Calificaciones->result()[0]->Calificacion == 2) : ?>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '1')) ?><a> 1</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '2', 'checked' => 'checked')) ?><a> 2</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '3')) ?><a> 3</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '4')) ?><a> 4</a>
		<?= form_input(array('name' => 'Calificacion','type'=> 'radio', 'value' => '5')) ?><a> 5</a>
	<?php elseif($Calificaciones->result()[0]->Calificacion == 3) : ?>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '1')) ?><a> 1</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '2')) ?><a> 2</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '3', 'checked' => 'checked')) ?><a> 3</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '4')) ?><a> 4</a>
		<?= form_input(array('name' => 'Calificacion','type'=> 'radio', 'value' => '5')) ?><a> 5</a>
	<?php elseif($Calificaciones->result()[0]->Calificacion == 4) : ?>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '1')) ?><a> 1</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '2')) ?><a> 2</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '3')) ?><a> 3</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '4', 'checked' => 'checked')) ?><a> 4</a>
		<?= form_input(array('name' => 'Calificacion','type'=> 'radio', 'value' => '5')) ?><a> 5</a>
	<?php elseif($Calificaciones->result()[0]->Calificacion == 5) : ?>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '1')) ?><a> 1</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '2')) ?><a> 2</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '3')) ?><a> 3</a>
		<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '4')) ?><a> 4</a>
		<?= form_input(array('name' => 'Calificacion','type'=> 'radio', 'value' => '5', 'checked' => 'checked')) ?><a> 5</a>
	<?php endif; ?>
	
	<?= form_submit('','Actualizar xD Calificacion')?>
	<?= form_close() ?>


</body>
</html>