<?= form_open('/user_ctrl/InsertarUsuarioC') ?>
<?
	

?>


<?= form_input(array('name' => 'UsuarioName','placeholder' => 'nombre usuario')) ?>


<?= form_input(array('name' => 'Password','placeholder' => 'Contraseña')) ?>

<?= form_input(array('name' => 'Nombre','placeholder' => 'nombre')) ?>


<?= form_input(array('name' => 'Apellido','placeholder' => 'Apellido')) ?>


<?= form_input( array('name' => 'email','placeholder' => 'e-mail')) ?>


<?= form_input(array('name' => 'sobre',	'placeholder' => 'sobre ti'	)) ?>
</label>
<?= form_submit('','Crear Cuenta')?>
<?= form_close() ?>
