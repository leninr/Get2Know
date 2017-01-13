<?= form_open("/user_ctrl/ActualizarUsuarioC/".$id) ?>
<?
	

?>


<?= form_input(array('name' => 'UsuarioName',
	'placeholder' => 'nombre usuario',
	'value' => $usuarios->result()[0]->UsuarioName
)) ?>


<?= form_input(array('name' => 'Password',
'placeholder' => 'Contraseña',
'value' => $usuarios->result()[0]->Password
)) ?>

<?= form_input(array('name' => 'Nombre',
'placeholder' => 'nombre',
'value' => $usuarios->result()[0]->Nombre
)) ?>


<?= form_input(array('name' => 'Apellido',
'placeholder' => 'Apellido',
'value' => $usuarios->result()[0]->Apellido
)) ?>


<?= form_input( array('name' => 'email',
'placeholder' => 'e-mail',
'value' => $usuarios->result()[0]->email
)) ?>


<?= form_input(array('name' => 'sobre',	
'placeholder' => 'sobre ti',
'value' => $usuarios->result()[0]->sobre
)) ?>
</label>
<?= form_submit('','Actualizar Cuenta')?>
<?= form_close() ?>
