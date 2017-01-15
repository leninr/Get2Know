<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://localhost/Proyecto/assets/css/bootstrap.min.css"); />

    <!-- MetisMenu CSS -->
    <link href="http://localhost/Proyecto/assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/Proyecto/assets/css/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/Proyecto/assets/css/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
						<br />
						<br />
						<br />
						<br />
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
											<?php echo form_open('Login_ctrl/validate'); ?>
                            <fieldset>


                                <div class="form-group">
																		<?php echo form_input(array('id'=>'username','placeholder'=>'Usuario','class'=>'form-control','name'=>'username')); ?>
                                </div>
                                <div class="form-group">
																		<?php echo form_input(array('id'=>'password','type'=>'password', 'placeholder'=>'Contraseña','class'=>'form-control','name'=>'password')); ?>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->

																<button type="submit" class="btn btn-lg btn-success btn-block">Login</button>

                            </fieldset>
												<?php echo form_close(); ?>
                    </div>
                </div>
								<a href="<?php echo site_url('user_ctrl'); ?>" style="color:green">Registrarse</a>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="http://localhost/Proyecto/assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost/Proyecto/assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="http://localhost/Proyecto/assets/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://localhost/Proyecto/assets/js/sb-admin-2.js"></script>

</body>

</html>
