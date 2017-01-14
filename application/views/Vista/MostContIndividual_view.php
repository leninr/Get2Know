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
	                <a href="http://www.creative-tim.com" class="simple-text">
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
	                                    Mi Arte
	                                    <b class="caret"></b>
	                              </a>
	                              <ul class="dropdown-menu">
	                                <li><a href="#">Ver Mis Artes</a></li>
	                                <li><a href="#">Agregar Nueva Arte</a></li>
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

              <table class="table table-hover table-striped">
                  <thead>
                      <th></th>
                      <th>Artista Dueño</th>
                      <th>Categoría</th>
                      <th>Nombre de Arte</th>
                      <th>Subido El</th>
                      <th>Descripción</th>
                      <th>Calificación</th>
                  </thead>
                  <tbody>


                    <td>
                      <img style="width: 200px;height: 200px" src="<?= base_url('/file/'.$Conte->result()[0]->Cont); ?>">
                    </td>
                    <td><?php foreach ($this->u->findById($Conte->result()[0]->idusuario) as $users) {
                              echo $users->UsuarioName;
                            } ?></td>
                    <td><?php foreach ($this->c->findById($Conte->result()[0]->idcategoria) as $categories) {
                              echo $categories->NomCategoria;
                            } ?></td>

                    <td><?php echo $Conte->result()[0]->nombreCont ?></td>
                    <td><?php echo $Conte->result()[0]->fechaCont ?></td>
                    <td><?php echo $Conte->result()[0]->descripCont ?></td>
                    <td><?php echo $Conte->result()[0]->Calificación ?></td>



                        <!--<td>
                          <a href="<?php echo site_url('content_ctrl/edit/'.$row->idcontent); ?>">Editar</a>
                        </td>
                        <td>
                          <a href="<?php echo site_url('content_ctrl/borrarContC/'.$row->idcontent); ?>" style="color:red">Eliminar</a>
                        </td>-->
                      </tr>
                  </tbody>
              </table>

              <?php if (empty($pregunta)){ ?>
            	<a> No existen Preguntas para esta categoria todavia</a>
            	<?php }else{ ?>


            	<?php foreach ($pregunta as $preg): ?>
            	  <tr>

            	    <tr>
            						<?= form_input(array('name' => 'idPregunta', 'value' =>  $preg['idPregunta'] ,'placeholder' => 'nombre usuario','style'=>'display: none'))?>
            						<?= form_input(array('name' => 'descripCont', 'value' => $preg['PreguntaC'] ,'placeholder' => 'nombre usuario'))?>
            						<br>
            						<br>
            						<div>
            						<?= form_open('/calificacion_ctrl/InsertarCalificacionC') ?>

            						<?= form_input(array('name' => 'idcontent', 'value' => $Conte->result()[0]->idcontent,'placeholder' => 'Contenido', 'style'=>'display: none')) ?>
            						<?= form_input(array('name' => 'idusuario','value' => $iduser['idusuario'],'placeholder' => 'usuario', 'style'=>'display: none')) ?>
            						<?= form_input(array('name' => 'idPregunta', 'value' => $preg['idPregunta'],'placeholder' => 'pregunta','style'=>'display: none')) ?>

            						<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '1')) ?><a> 1</a>
            						<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '2')) ?><a> 2</a>
            						<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '3')) ?><a> 3</a>
            						<?= form_input(array('name' => 'Calificacion', 'type'=> 'radio', 'value' => '4')) ?><a> 4</a>
            						<?= form_input(array('name' => 'Calificacion','type'=> 'radio', 'value' => '5')) ?><a> 5</a>

            						<?= form_submit('','Crear Calificacion')?>
            						<?= form_close() ?>
            						</div>
            					</tr>
            	  </tr>
            	<?php endforeach; ?>




            	<?php

            					}
            	?>

            	<br>
            	<br>

            	<div>
            	<?php if (empty($CalFil)){ ?>
            	<a> No existen calificaciones para este contenido todavia</a>
            	<?php }else{ ?>

            	<?php foreach ($CalFil as $Cal): ?>
                            <ul>
                                <li> <?php echo $Cal['idcontent'] ?> / <?php echo $Cal['idusuario'] ?> / <?php echo $Cal['idPregunta'] ?> / <?php echo $Cal['Calificacion'] ?></li>

                            </ul>

                <?php endforeach; ?>
                <?php } ?>

                        <a> suma carajo:  <?php echo $sumacal ?></a>
                        <br>
                        <a> cuenta carajo:  <?php echo $countcal ?></a>


                </div>

                <div>

                	<?php echo form_open_multipart('/content_ctrl/actualizarCalificacionConC/'.$Conte->result()[0]->idcontent);?>

                	<?= form_input(array('name' => 'Calificación', 'value' => $resultadoCal,'placeholder' => 'nombre usuario')) ?><a>Calificacion nueva</a>
                	<?= form_submit('','Actualizar Calificacion')?>
            		<?= form_close() ?>

                </div>

                <br>


                <br>

                <?php echo form_open_multipart('/content_ctrl/MostrarContenido/');?>


                	<?= form_submit('','Muro')?>
            		<?= form_close() ?>


	        </div>


	        <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="#">
	                                Home
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Company
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                Portfolio
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               Blog
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
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
