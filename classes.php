<?php 
include('class/School.php');
$school = new School();
// $school->adminLoginStatus();
include('inc/header.php');
?>
<?php include('inc/title.php'); ?>
<?php include('include_files.php');?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/classes.js"></script>
<?php include('inc/container.php');?>
<div class="container">	
	<?php include('side-menu.php');	?>
	<div class="content">
		<div class="container-fluid">
			<div>   
				<a><strong><span class="ti-home"></span> Clases</strong></a>
				<hr>		
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10">
							<h3 class="panel-title"></h3>
						</div>
						<div class="col-md-2" align="right">
							<button type="button" name="add" id="addMano" class="btn btn-success btn-xs">Nueva mano</button>
						</div>
					</div>
				</div>
				<table id="manoList" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Número de mano</th>
							<th>Jugador</th>	
							<th>Partida</th>
							<th>Pedidas</th>
							<th>Hechas</th>	
							<th>Puntos</th>
							<th>Repartidor</th>														
							<th></th>
							<th></th>							
						</tr>
					</thead>
				</table>
				
			</div>			
		</div>		
	</div>	
</div>	
<div id="classModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="classForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Editar mano</h4>
				</div>
				<div class="modal-body">
					<!-- <div class="form-group">
						<label for="firstname" class="control-label">Nueva mano*</label>
						<input type="text" class="form-control" id="mano_nroMano" name="mano_nroMano" placeholder="Número de mano" required>					
					</div>	 -->
					<div class="form-group">
						<label for="mname" class="control-label">Jugador*</label>	
						<select name="mano_idJugador" id="mano_idJugador" class="form-control" required>
							<option value="">Seleccionar jugador</option>
							<?php echo $school->getJugadoresList(); ?>
						</select>
					</div>	
					<div class="form-group">
						<label for="mname" class="control-label">Partida*</label>	
						<select name="teacherid" id="teacherid" class="form-control" required>
							<option value="">Seleccionar partida</option>
							<?php echo $school->getPartidasList(); ?>
						</select>
					</div>
					<div class="form-group">
						<label for="firstname" class="control-label">Pedidas*</label>
						<input type="text" class="form-control" id="mano_pedidas" name="mano_pedidas" placeholder="Pedidas" required>					
					</div>
					<div class="form-group">
						<label for="firstname" class="control-label">Hechas*</label>
						<input type="text" class="form-control" id="mano_hechas" name="mano_hechas" placeholder="Hechas" required>					
					</div>
					<div class="form-group">
						<label for="firstname" class="control-label">Puntos*</label>
						<input type="text" class="form-control" id="mano_puntos" name="mano_puntos" placeholder="Puntos" required>					
					</div>
					<div class="form-group">
						<label for="firstname" class="control-label">Repartidor*</label>
						<input type="text" class="form-control" id="mano_repartidor" name="mano_repartidor" placeholder="Repartidor" required>					
					</div>			
				</div>
				<div class="modal-footer">
					<input type="hidden" name="mano_nroMano" id="mano_nroMano" />
					<input type="hidden" name="action" id="action" value="updateMano" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php include('inc/footer.php');?>