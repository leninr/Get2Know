<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="http://localhost/Proyecto/assets/img/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Get2Know!</title>

		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	    <meta name="viewport" content="width=device-width" />


	    <!-- Bootstrap core CSS     -->
			<link rel="stylesheet" href="http://localhost/Proyecto/assets/css/bootstrap.min.css"); />


	    <!-- Animation library for notifications   -->
			<link rel="stylesheet" href="http://localhost/Proyecto/assets/css/animate.min.css"); />

	    <!--  Light Bootstrap Table core CSS    -->
			<link rel="stylesheet" href="http://localhost/Proyecto/assets/css/light-bootstrap-dashboard.css"); />


	    <!--  CSS for Demo Purpose, don't include it in your project     -->
			<link rel="stylesheet" href="http://localhost/Proyecto/assets/css/demo.css"); />


	    <!--     Fonts and icons     -->
	    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href="http://localhost/Proyecto/assets/css/pe-icon-7-stroke.css"); />

	</head>
	<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="http://localhost/Proyecto/assets/img/sidebar-5.jpg">

	    <!--

	        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
	        Tip 2: you can also add an image using data-image tag

	    -->

	    	<div class="sidebar-wrapper">
	            <div class="logo">
	                <a href="http://localhost/Proyecto/content_ctrl/MostrarContenido" class="simple-text">
	                    <i class="fa fa-eye"></i>
	                </a>
	            </div>
							<div>
								<div class="card card-user">
									<?php
											if($this->session->userdata('is_logged_in'))
											{ ?>
											<div class="image">
													<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
											</div>
											<div class="content">
													<div class="author">
															 <a href="#">
															<br>
															<br>
															<br>
															<br>
															<br>
															<br>

																<h4 class="title"><?php echo $this->session->userdata('Nombre');?>  <?php echo $this->session->userdata('Apellido');?><br />

																	 <small><?php echo $this->session->userdata('username');?></small>


																</h4>
															</a>
													</div>
													<p class="description text-center"> <?php echo $this->session->userdata('sobre');?>
													</p>
											</div>
											<hr>
											<div class="text-center">
													<button href="#" class="btn btn-simple"><i class="fa fa-user"></i></button>

													<?= form_open("/user_ctrl/EditarUsuarioC/".$this->session->userdata('idusuario')); ?>
													<button type="submit" class="btn btn-simple"> <i class="fa fa-gears"></i></button>
													<?= form_close() ?>
													<button href="#" class="btn btn-simple"><i class="fa fa-trophy"></i></button>

											</div>
									<?php } ?>

								</div>
							</div>
	    	</div>
	    </div>

	    <div class="main-panel">
	        <nav class="navbar navbar-default navbar-fixed">
	            <div class="container-fluid">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
	                    <a class="navbar-brand" href="http://localhost/Proyecto/content_ctrl/MostrarContenido">Get2Know!</a>
	                </div>
	                <div class="collapse navbar-collapse">

										<ul class="nav navbar-nav navbar-right">
											<?php
													if($this->session->userdata('is_logged_in'))
													{ ?>
														<li class="dropdown">
		                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                                    Pregunta
		                                    <b class="caret"></b>
		                              </a>
		                              <ul class="dropdown-menu">
		                                <li><a href="http://localhost/Proyecto/pregunta_ctrl/">Crear</a></li>
																		<li><a href="http://localhost/Proyecto/pregunta_ctrl/obtenerPreguntaC">Ver</a></li>
		                              </ul>
		                        </li>
													<li class="dropdown">
	                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                                    Categoría
	                                    <b class="caret"></b>
	                              </a>
	                              <ul class="dropdown-menu">
	                                <li><a href="http://localhost/Proyecto/categoria_ctrl/">Crear</a></li>
																	<li><a href="http://localhost/Proyecto/categoria_ctrl/obtenerCategoriaC">Ver</a></li>
	                              </ul>
	                        </li>
	                        <li class="dropdown">
	                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                                    Mi Arte
	                                    <b class="caret"></b>
	                              </a>
	                              <ul class="dropdown-menu">
	                                <li><a href="http://localhost/Proyecto/content_ctrl/MostrarMiContenido">Ver Mis Artes</a></li>
	                                <li><a href="http://localhost/Proyecto/content_ctrl/">Agregar Nueva Arte</a></li>
	                              </ul>
	                        </li>
	                        <li>
																	<?php echo form_open_multipart('/Login_ctrl/logout');?>

																    	<?= form_submit('','Log Out',"class='btn btn-outline btn-link btn-sm'")?>
																		<?= form_close() ?>

	                        </li>
											<?php } else { ?>

												<li>
																<?php echo form_open_multipart('/Login_ctrl');?>

																		<?= form_submit('','Login',"class='btn btn-lg btn-success btn-block btn-sm'")?>
																	<?= form_close() ?>

												</li>
												<?php } ?>

										</ul>
	                </div>
	            </div>
	        </nav>


	        <div class="content">
	            <!-- Página Hija-->

              

	        </div>


	        <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="http://localhost/Proyecto/content_ctrl/MostrarContenido">
	                                Home
	                            </a>
	                        </li>
	                        <li>
	                            <a href="http://www.udla.edu.ec">
	                                Company
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; 2017 <a href="http://www.udla.edu.ec">Universidad de las Américas</a> - Ingeniería en Sistemas de Computación e Informática
	                </p>
	            </div>
	        </footer>

	    </div>
	</div>


	</body>

	    <!--   Core JS Files   -->

			<script type="text/javascript" src="http://localhost/Proyecto/assets/js/jQuery-1.10.2.js");></script>

		<script type="text/javascript" src="http://localhost/Proyecto/assets/js/bootstrap.min.js");></script>

		<!--  Checkbox, Radio & Switch Plugins -->
		<script type="text/javascript" src="http://localhost/Proyecto/assets/js/bootstrap-checkbox-radio-switch.js");></script>

		<!--  Charts Plugin -->
		<script type="text/javascript" src="http://localhost/Proyecto/assets/js/chartist.min.js");></script>

	    <!--  Notifications Plugin    -->
			<script type="text/javascript" src="http://localhost/Proyecto/assets/js/bootstrap-notify.js");></script>

	    <!--  Google Maps Plugin    -->
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
		<script type="text/javascript" src="http://localhost/Proyecto/assets/js/light-bootstrap-dashboard.js");</script>

		<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
		<script type="text/javascript" src="http://localhost/Proyecto/assets/js/demo.js");></script>

		<script type="text/javascript">
	    	$(document).ready(function(){

	        	demo.initChartist();

	        	$.notify({
	            	icon: 'pe-7s-gift',
	            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

	            },{
	                type: 'info',
	                timer: 4000
	            });

	    	});
		</script>

	</html>