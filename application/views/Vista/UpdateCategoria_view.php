<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
</head>
<body>

	<?= form_open('/categoria_ctrl/actualizarCategoriaC/'.$id) ?>
	<?= form_input(array('name' => 'NomCategoria', 'value' => $Categorias->result()[0]->NomCategoria)) ?>
	<?= form_checkbox(array('name' => 'Esmusica', 'value' => '1', 'checked' => $Categorias->result()[0]->Esmusica)) ?>
	<?= form_submit('','Actualizar Categoria')?>
	<?= form_close() ?>


</body>
</html>