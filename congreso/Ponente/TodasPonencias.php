<?php 
include("conexion.php");
include('Head.php');
include("../Idc.php");
$Usuario = $_GET['U'];
$Tipo = $_GET['T'];
$TipoU = $_GET['TU'];
date_default_timezone_set('America/Bogota'); 
$Fecha = date("Y-m-d");
$sql=$conex->query("SELECT archivosponentes.Ruta, archivosponentes.IdPonencia,archivosponentes.Tipo, ponente.Nombres, ponente.Apellidos, ponente.NivelFormacion, ponencia.Titulo, programacion.Fecha FROM archivosponentes, ponente, ponencia, programacion WHERE ponencia.IdPonencia=archivosponentes.IdPonencia AND ponencia.Estado=1 AND ponente.IdPonencia=archivosponentes.IdPonencia AND programacion.IdPonencia=archivosponentes.IdPonencia AND programacion.Fecha='$Fecha' AND ponente.Tipo='$Tipo' AND ponente.IdPonencia=ponencia.IdPonencia AND archivosponentes.Id_Congreso='$Idc' AND ponente.Id_Congreso='$Idc' ORDER BY programacion.Fecha ASC");
echo '
<input type="hidden" id="IdPonencia" value="'.$IdPonencia.'">
<input type="hidden" id="Usuario" value="'.$Usuario.'">
<div class="container">
	<div class="row" style="margin-top:20px;">
	<h2>';
	if($Tipo==1){
		echo "CONFERENCIAS";
	}else{
		echo "PONENCIAS";
	}
	echo ' DEL DÍA</h2>
	';
	while ($Resultado=mysqli_fetch_assoc($sql)) {

		echo '
			<div class="col-xs-12 comentarios" style=" border-bottom:1px solid #ccc">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<h3 style="font-size:18px;">Nombre ';
							if($Tipo==1){
								echo "Conferencia";
							}else{
								echo "Ponencia";
							}
						echo '</h3>
						<p style="font-size:15px;">'.$Resultado['Titulo'].'</p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<h3 style="font-size:18px;">';
							if($Tipo==1){
								echo "Conferencista";
							}else{
								echo "Ponente";
							}
						echo '</h3>
						<p style="font-size:15px;">'.$Resultado['Nombres'].' '.$Resultado['Apellidos'].'</p>
					</div>
					<div class="col-xs-12 col-sm-2 col-sm-offset-3">
							<a class="btn btn-raised btn-info" style="height:50px; color:#fff" href="Ponencia.php?U='.$Usuario.'&P='.$Resultado['IdPonencia'].'&TU='.$TipoU.'">Ver</a>
						</div>';
					echo'
				</div>
			</div>
		';}
	echo'
	</div>
	<br>
	<div class="col-xs-12 col-sm-2">
		<a class="btn btn-raised" style="height:50px; background: #818181; color:#fff" href="PonenciasAnteriores.php?U='.$Usuario.'&T='.$Tipo.'&TU='.$TipoU.'">Ver anteriores</a>
	</div>
	<div class="col-xs-12 col-sm-2">
		<a class="btn btn-raised" style="height:50px; background: #818181; color:#fff" href="PonenciasProximas.php?U='.$Usuario.'&T='.$Tipo.'&TU='.$TipoU.'">Ver Próximas</a>
	</div>
</div>';?>
<style type="text/css">
	.comentarios:hover{
		background: #f3f3f3;
	}
</style>
<?php include('footer.php');?>