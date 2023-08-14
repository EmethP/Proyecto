<?php

?>
<?php 
if(!isset($_COOKIE["sNombre"]) || empty($_COOKIE["sNombre"]) ){
	header("Location: index.html");
}
	$sNombreMtric="";
	$sCarrera="";
	$sNombreMtric=$_COOKIE["sNombre"];
	$sCarrera=$_COOKIE["sCarrera"];
	$sMensaje="";

	

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<title>Sistema Integral de Información</title>
<style type="text/css">
	.row1 {
   
		background-color: #bbbfc0;

	}
</style>
<script type="text/javascript">

	function reinscripcion(){
		$( "#txtMatric,#btnBuscar,#cmbCarr,#cmbSem,#txtNom,#txtApp,#txtApm,#txtApm,#cmbSexo,#txtCalle,#txtNumero,#txtEntreCalle,#txtColonia,#txtMunicipio,#txtCiudad,#txtEstado,#txtEstado,#txtTelFijo,#txtExt,#txtTelCel,#txtMail,#txtTipoSan,#InputSubmit" ).prop( "disabled", false );
		$("#txtMatricRev").prop("disabled",true);
		$("#txtMatric2").prop("disabled",true);

	}
	function inscripcion(){
		$( "#cmbCarr,#cmbSem,#txtNom,#txtApp,#txtApm,#txtApm,#cmbSexo,#txtCalle,#txtNumero,#txtEntreCalle,#txtColonia,#txtMunicipio,#txtCiudad,#txtEstado,#txtEstado,#txtTelFijo,#txtExt,#txtTelCel,#txtTipoSan,#txtMail,#InputSubmit" ).prop( "disabled", false );
		$("#txtMatricRev").prop("disabled",true);
		$("#txtMatric,#btnBuscar").prop("disabled", true);
		$("#txtMatric2").prop("disabled",false);

	}
	function revalidacion(){
		$("#txtMatricRev").prop("disabled",false);
				$("#txtMatric2").prop("disabled",true);
		
	}



</script>

<script type="text/javascript">
var nextinput = 0;
function AgregarCampos(){
	nextinput++;
	campo = '<li id="rut'+nextinput+'">Campo:<input type="text" size="20" id="campo' + nextinput + '"&nbsp; name="campo' + nextinput + '"&nbsp; /></li>';
	$("#campos").append(campo);
}
</script>

</head>
<body>
<header>
	<?php
		include_once("menu.php");
	 ?>

</header>




	<div class="container well">
		<div class="row main">
			<div class="" >
				<h4 class="text-center">
				<div class="glyphicon glyphicon-list-alt">:        CARDEX DE MATERIAS CON CALIFICACIÓN FINAL</div>
				</h4>

			<?php 
			$oMateria=null;
			$arrMaterias=null;
			include_once("class/Materia.php");
			$oMateria=new Materia();
			$oMateria->nIdCarrera=$_COOKIE["carreraid"];
			$arrMaterias= $oMateria->buscarTodos();
			?>

			<div class="table-responsive">
				<table class="table table-hover">
				    <thead>
				      <tr>
				        <th>Clave</th>
				        <th>Nombre de Materia</th>
				        <th>Calificación Final</th>
				        <th>Credito de Materia</th>

				      </tr>
				    </thead>
				    <tbody>
				    <?php
				     $oM=null;
				     if($arrMaterias != null){
				    	foreach($arrMaterias as $oM){
				     ?>
				      <tr>
				      <td><?php echo $oM->nIdAsig; ?></td>
				      <td><?php echo $oM->sNomM; ?></td>
				      <td><?php echo ""; ?></td>
				      <td><?php echo $oM->nCredito; ?></td>
				      </tr>
				    <?php 
						}
					}else{
						echo "SIN MATERIAS ASIGNADAS";
					}

				    ?>
				</table>
			</div>
			</div>
		</div>
	</div>

		
</body>
</html>
