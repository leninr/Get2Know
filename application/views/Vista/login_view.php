<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>

<?php 

	echo form_open('Login_ctrl/validate');
	echo form_input(array('id'=>'username','name'=>'username'));
	echo form_password(array('id'=>'password','name'=>'password'));
	echo form_submit("submit",'login');
	echo form_close();

?>

</body>
</html>
