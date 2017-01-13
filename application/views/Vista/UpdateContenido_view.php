<!DOCTYPE html>
<head>
<title>Contenido :D</title>
</head>
<body>

<div>

<?php echo form_open_multipart('/content_ctrl/do_edit2');?>
	
	<?= form_input(array('name' => 'idcontent', 'value' => $Conte->result()[0]->idcontent,'placeholder' => 'id Contenido')) ?> <a> id contenido</a>
	<br>

	<?= form_input(array('name' => 'idusuario', 'value' => $Conte->result()[0]->idusuario,'placeholder' => 'id usuario')) ?> <a>id usuario</a>
	<br>
	<?= form_input(array('name' => 'idcategoria', 'value' => $Conte->result()[0]->idcategoria,'placeholder' => 'id categoria')) ?> <a> id categoria</a>
	<br>
	<?= form_input(array('name' => 'nombreCont', 'value' => $Conte->result()[0]->nombreCont,'placeholder' => 'nombre Contenido')) ?><a>nombre contenido</a>
	<br>
	<?= form_input(array('name' => 'fechaCont', 'value' => $Conte->result()[0]->fechaCont,'placeholder' => 'nombre usuario')) ?><a>fecha Contenido</a>
	<br>	
	<?= form_input(array('name' => 'descripCont', 'value' => $Conte->result()[0]->descripCont,'placeholder' => 'nombre usuario')) ?><a>descripcion</a>
	<br>	
	<?= form_input(array('name' => 'descripCont', 'value' => $Conte->result()[0]->Calificación,'placeholder' => 'nombre usuario')) ?><a>calficiacion</a>
	<br>
	<img style="width: 150px;height: 150px;" src="<?php echo base_url('file/'.$Conte->result()[0]->Cont) ?>">
	<?= form_submit('','Actualizar Contenido')?>
	<?= form_close() ?>

	

</form>

</body>
</html>