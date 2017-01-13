<!DOCTYPE html>
<head>
<title>Contenido :D</title>
</head>
<body>
<div>

	<br>
	<a> Nombre Usuario:  <?php echo $iduser['username'] ?></a>
	<br>
</div>
<div>

<?php echo form_open_multipart('/content_ctrl/do_edit2');?>
	
	<?= form_input(array('name' => 'idcontent', 'value' => $Conte->result()[0]->idcontent,'placeholder' => 'id Contenido')) ?> <a> id contenido</a>
	<br>

	<?= form_input(array('name' => 'idusuario', 'value' => $Conte->result()[0]->idusuario,'placeholder' => 'id usuario')) ?> <a>id usuario</a>
	<br>
	<?= form_input(array('name' => 'idcategoria', 'value' => $Conte->result()[0]->idcategoria,'placeholder' => 'id categoria')) ?> <a> id categoria</a>
	<br>
	<?= form_input(array('name' => 'nombreCont', 'value' => $Conte->result()[0]->nombreCont,'placeholder' => 'nombre Contenido')) ?><a>nombre ocntenido</a>
	<br>
	<?= form_input(array('name' => 'fechaCont', 'value' => $Conte->result()[0]->fechaCont,'placeholder' => 'nombre usuario')) ?><a>fecha Contenido</a>
	<br>	
	<?= form_input(array('name' => 'descripCont', 'value' => $Conte->result()[0]->descripCont,'placeholder' => 'nombre usuario')) ?><a>dsecripcion</a>
	<br>	
	<?= form_input(array('name' => 'descripCont', 'value' => $Conte->result()[0]->Calificación,'placeholder' => 'nombre usuario')) ?><a>calficiacion</a>
	<br>
	
	
	<?= form_close() ?>
</div>
		<img style="width: 200px;height: 200px" src="<?= base_url('/file/'.$Conte->result()[0]->Cont); ?>">

	<br>
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
	


	

</form>

</body>
</html>