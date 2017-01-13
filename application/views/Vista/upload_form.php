<!DOCTYPE html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('/content_ctrl/do_upload');?>
	
	<?= form_input(array('name' => 'idusuario','placeholder' => 'nombre usuario')) ?>
	<?= form_input(array('name' => 'idcategoria','placeholder' => 'nombre usuario')) ?>
	<?= form_input(array('name' => 'nomCont','placeholder' => 'nombre usuario')) ?>
	<?= form_input(array('name' => 'fechaCont','value'=> date("Y-m-d"),'placeholder' => 'nombre usuario')) ?>
	<?= form_input(array('name' => 'descripcion','placeholder' => 'nombre usuario')) ?>
	<input type="file" name="userfile">
	<?= form_submit('','Crear Contenido')?>
	<?= form_close() ?>

	

</form>

</body>
</html>