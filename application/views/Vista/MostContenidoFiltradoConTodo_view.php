<!DOCTYPE html>
<head>
<title>Actualizar Contenido</title>
</head>
<body>


<?php echo form_open_multipart('/content_ctrl/do_edit2');?>
	
	<?= form_input(array('name' => 'idcontent', 'value' => $Conte->result()[0]->idcontent,'placeholder' => 'id Contenido')) ?>
	<?= form_input(array('name' => 'idusuario', 'value' => $Conte->result()[0]->idusuario,'placeholder' => 'id usuario')) ?>
	<?= form_input(array('name' => 'idcategoria', 'value' => $Conte->result()[0]->idcategoria,'placeholder' => 'id categoria')) ?>
	<?= form_input(array('name' => 'nombreCont', 'value' => $Conte->result()[0]->nombreCont,'placeholder' => 'nombre Contenido')) ?>
	<?= form_input(array('name' => 'fechaCont', 'value' => $Conte->result()[0]->fechaCont,'placeholder' => 'nombre usuario')) ?>
	<?= form_input(array('name' => 'descripCont', 'value' => $Conte->result()[0]->descripCont,'placeholder' => 'nombre usuario')) ?>
	<input type="file" " name="userfile">
	<?= form_submit('','Actualizar Contenido')?>
	<?= form_close() ?>

		<img style="width: 200px;height: 200px" src="<?= base_url('/file/'.$Conte->result()[0]->Cont); ?>">

	

	

</form>

</body>
</html>