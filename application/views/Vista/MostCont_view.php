<!DOCTYPE html>
<html>
<head>
	<title>Contenido</title>
</head>
<body>

	<?php echo form_open_multipart('/Login_ctrl/logout');?>

    	
    	<?= form_submit('','Log Out')?>
		<?= form_close() ?>

	<table style="border: 1px solid #000;width: 80%;overflow: auto">
		<thead>
				<tr>
					<th>idContenido</th>
					<th>idusuario</th>
					<th>idcategori</th>
					<th>nom</th>
					<th>fecha</th>
					<th>descrip</th>

				</tr>

		</thead>
		<tbody>
				<?php
					foreach ($this->b->getalldata() as $row) {
				?>
					<tr>
						<td><?php echo $row->idcontent ?></td>
						<td><?php echo $row->idusuario ?></td>
						<td><?php echo $row->idcategoria ?></td>
						<td><?php echo $row->nombreCont ?></td>
						<td><?php echo $row->fechaCont ?></td>
						<td><?php echo $row->descripCont ?></td>
						<td><img style="width: 150px;height: 150px;" onclick="window.location='<?php echo site_url("content_ctrl/MostrarContenidoFiltrado/".$row->idcontent);?>'"
						src="<?php echo base_url('file/'.$row->Cont) ?>"></td>
						<td>
							<a href="<?php echo site_url('content_ctrl/edit/'.$row->idcontent); ?>">Edit</a>

							<a href="<?php echo site_url('content_ctrl/borrarContC/'.$row->idcontent); ?>">Delete</a>
						</td>
					</tr>
				<?php
					}
				?>

		</tbody>
	</table>

</body>
</html>