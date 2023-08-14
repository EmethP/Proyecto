<?php 
include_once("class/Colaborador.php");
$oCol=null;
$oCol=new Colaborador();
$arrTodos=null;
$arrTodos=$oCol->buscarTodosDocentes();
$idEsc = isset($_REQUEST["idEsc"]) ?  $_REQUEST["idEsc"] : "";
$sNomM= isset($_REQUEST["sNomM"]) ? $_REQUEST["sNomM"] : "";
$op=$_REQUEST["op"];
echo $sNomM."<br>";
if($op == "a"){
?>

<form action="abm/alta_carga_docente.php" method="post">
  <div id="alta">
	   <label> </label>
	      <div class="form-group">
	      <label>Docente: </label>
	   		<select class="form-control" type="time" name="cmbDocente">
	   			<?php 
	   			 if($arrTodos != null){
	   			 	$key = null; 
	   			 	foreach ($arrTodos as $key) {
	   			 ?>
	   				 <option value="<?php echo $key->nIdAlumno;?>"><?php echo $key->sNombre." ".$key->sApp." ".$key->sApm." - ".$key->sMatricula; ?></option>
	   			 <?php
	   			 	}
	   			 
	   			}
	   			?>
	   		</select>
	     </div>
	     <br>
	      <input type="hidden" name="nIdPe" value="<?php echo $_REQUEST['nIdP']; ?>">
	     <input type="hidden" name="nIdHorarioEsc" value="<?php echo $idEsc; ?>">
	     <button class="btn btn-success">Asignar</button>

  </div>
</form>
<?php 
}else if($op == "c"){
	$nIdDoc=$_REQUEST["nIdDoce"];
?>
Cambio de Docente
<form action="abm/actualiza_carga_docente.php" method="post">
  <div id="cambio">
	   <label> </label>
	      <div class="form-group">
	      <label>Docente: </label>
	   		<select class="form-control" type="time" name="cmbDocente">
	   			<?php 
	   			 if($arrTodos != null){
	   			 	$key = null; 
	   			 	foreach ($arrTodos as $key) {
	   			 ?>
	   				 <option value="<?php echo $key->nIdAlumno;?>" <?php echo $nIdDoc == $key->nIdAlumno ? "selected" : "" ?> ><?php echo $key->sNombre." ".$key->sApp." ".$key->sApm." - ".$key->sMatricula; ?></option>
	   			 <?php
	   			 	}
	   			 
	   			}
	   			?>
	   		</select>
	     </div>
	     <br>
	     <input type="hidden" name="nIdHorarioEsc" value="<?php echo $idEsc; ?>">
	     <button class="btn btn-warning">Cambiar y Asignar</button>

  </div>
</form>
<?php 
}else if($op == "q"){
	$nIdDoc=$_REQUEST["nIdDoce"];
?>

<form action="abm/baja_carga_docente.php" method="post">
  <div id="quitar">
	   <label>Click en Quitar para quitar el Docente de la materia</label>
	      <div class="form-group">
	      <label>Docente: </label>
	   		<select class="form-control" type="time" name="cmbDocente" disabled="disable">
	   			<?php 
	   			 if($arrTodos != null){
	   			 	$key = null; 
	   			 	foreach ($arrTodos as $key) {
	   			 ?>
	   				 <option value="<?php echo $key->nIdAlumno;?>" <?php echo $nIdDoc == $key->nIdAlumno ? "selected" : "" ?> ><?php echo $key->sNombre." ".$key->sApp." ".$key->sApm." - ".$key->sMatricula; ?></option>

	   			 <?php
	   			 	}
	   			 
	   			}
	   			?>
	   		</select>
	     </div>
	     <br>
	     <input type="hidden" name="nIdDocente" value="<?php echo $nIdDoc;?>"/>
	     <input type="hidden" name="nIdHorarioEsc" value="<?php echo $idEsc; ?>">
	     <button class="btn btn-danger">Quitar</button>

  </div>
</form>
<?php 
}else if($op == "f"){
?>

<form action="abm/alta_folio_docente.php" method="post">
  <div id="alta">
	   <label> </label>
	      <div class="form-group">
	      <label>Docente: </label>
	   		<select class="form-control" type="time" name="cmbDocente">
	   			<?php 
	   			 if($arrTodos != null){
	   			 	$key = null; 
	   			 	foreach ($arrTodos as $key) {
	   			 ?>
	   				 <option value="<?php echo $key->nIdAlumno;?>"><?php echo $key->sNombre." ".$key->sApp." ".$key->sApm." - ".$key->sMatricula; ?></option>
	   			 <?php
	   			 	}
	   			 
	   			}
	   			?>
	   		</select>
	     </div>
	     <br>
	      <input type="hidden" name="nIdFolio" value="<?php echo $_REQUEST['idFolio']; ?>">
	    
	     <button class="btn btn-success">Asignar</button>

  </div>
</form>
<?php 
}else if($op == "fc"){
	$nIdDoc=$_REQUEST["nIdDoce"];
	$nId=$_REQUEST["nIdD"];
?>
Cambio de Docente
<form action="abm/actualiza_folio_docente.php" method="post">
  <div id="cambio">
	   <label> </label>
	      <div class="form-group">
	      <label>Docente: </label>
	   		<select class="form-control" type="time" name="cmbDocente">
	   			<?php 
	   			 if($arrTodos != null){
	   			 	$key = null; 
	   			 	foreach ($arrTodos as $key) {
	   			 ?>
	   				 <option value="<?php echo $key->nIdAlumno;?>" <?php echo $nIdDoc == $key->nIdAlumno ? "selected" : "" ?> ><?php echo $key->sNombre." ".$key->sApp." ".$key->sApm." - ".$key->sMatricula; ?></option>
	   			 <?php
	   			 	}
	   			 
	   			}
	   			?>
	   		</select>
	     </div>
	     <br>
	     <input type="hidden" name="nIdd" value="<?php echo $nId; ?>">
	     <button class="btn btn-warning">Cambiar y Asignar</button>

  </div>
</form>
<?php 
}else if($op == "fe"){
	$nIdDoc=$_REQUEST["nIdDoce"];
	$nId=$_REQUEST["nIdD"];
?>
Quitar  Docente
<form action="abm/quita_folio_docente.php" method="post">
  <div id="cambio">
	   <label> </label>
	      <div class="form-group">
	      <label>Docente: </label>
	   		<select class="form-control" type="time" name="cmbDocente" disabled="disabled">
	   			<?php 
	   			 if($arrTodos != null){
	   			 	$key = null; 
	   			 	foreach ($arrTodos as $key) {
	   			 ?>
	   				 <option  value="<?php echo $key->nIdAlumno;?>" <?php echo $nIdDoc == $key->nIdAlumno ? "selected" : "" ?> ><?php echo $key->sNombre." ".$key->sApp." ".$key->sApm." - ".$key->sMatricula; ?></option>
	   			 <?php
	   			 	}
	   			 
	   			}
	   			?>
	   		</select>
	     </div>
	     <br>
	     <input type="hidden" name="nIdd" value="<?php echo $nId; ?>">
	     <button class="btn btn-danger">Quitar</button>

  </div>
</form>

<?php 
}else if($op == "df"){
	$nIdGrupo=$_REQUEST["nIdGrupo"];
	$nIdAsig=$_REQUEST["nIdAsig"];
	$sNomMat=$_REQUEST["sNomMat"];
?>
Asignar Docente a Materia : <?php  echo $sNomMat;?><br>
Folio: <?php echo $_REQUEST["sFolio"]; ?>
<form action="abm/alta_folio_docente.php" method="post">
  <div id="alta">
	   <label> </label>
	      <div class="form-group">
	      <label>Docente: </label>
	   		<select class="form-control" type="time" name="cmbDocente">
	   			<?php 
	   			 if($arrTodos != null){
	   			 	$key = null; 
	   			 	foreach ($arrTodos as $key) {
	   			 ?>
	   				 <option value="<?php echo $key->nIdAlumno;?>"><?php echo $key->sNombre." ".$key->sApp." ".$key->sApm." - ".$key->sMatricula; ?></option>
	   			 <?php
	   			 	}
	   			 
	   			}
	   			?>
	   		</select>
	     </div>
	     <br>
	      <input type="hidden" name="nIdGrupo" value="<?php echo $nIdGrupo; ?>">
	     <input type="hidden" name="nIdAsig" value="<?php echo $nIdAsig; ?>">
	     <button class="btn btn-success">Asignar</button>

  </div>
</form>
<?php 
}else if($op == "cf"){
	
	$nIdDF=$_REQUEST["nIdDF"];
	$nIdG=$_REQUEST["nIdG"];
	$nIdDoce=$_REQUEST["nIdDoce"];
	$sNomMat=$_REQUEST["sNomMat"];
	$sFolio=$_REQUEST["sFolio"];
?>
Cambio de Titular Docente <br>
Folio <?php echo $sFolio;?><br>
Materia <?php echo $sNomMat; ?>
<form action="abm/actualiza_folio_docente.php" method="post">
  <div id="cambio">
	   <label> </label>
	      <div class="form-group">
	      <label>Docente: </label>
	   		<select class="form-control" type="time" name="cmbDocente">
	   			<?php 
	   			 if($arrTodos != null){
	   			 	$key = null; 
	   			 	foreach ($arrTodos as $key) {
	   			 ?>
	   				 <option value="<?php echo $key->nIdAlumno;?>" <?php echo $nIdDoce == $key->nIdAlumno ? "selected" : "" ?> ><?php echo $key->sNombre." ".$key->sApp." ".$key->sApm." - ".$key->sMatricula; ?></option>
	   			 <?php
	   			 	}
	   			 
	   			}
	   			?>
	   		</select>
	     </div>
	     <br>
	     <input type="hidden" name="nIdDF" value="<?php echo $nIdDF; ?>">
	      <input type="hidden" name="nIdG" value="<?php echo $nIdG; ?>">

	     <button class="btn btn-warning">Cambiar y Asignar</button>

  </div>
</form>
<?php 
}else if($op == "qdf"){
		$nIdDF=$_REQUEST["nIdDF"];
	$nIdG=$_REQUEST["nIdG"];
	$nIdDoce=$_REQUEST["nIdDoce"];
	$sNomMat=$_REQUEST["sNomMat"];
	$sFolio=$_REQUEST["sFolio"];
?>
Quitar Titular Docente En: <br>
Folio <?php echo $sFolio;?><br>
Materia <?php echo $sNomMat; ?>
<form action="abm/quita_folio_docente.php" method="post">
  <div id="cambio">
	   <label> </label>
	      <div class="form-group">
	      <label>Docente: </label>
	   		<select class="form-control" type="time" name="cmbDocente" disabled="disabled">
	   			<?php 
	   			 if($arrTodos != null){
	   			 	$key = null; 
	   			 	foreach ($arrTodos as $key) {
	   			 ?>
	   				 <option  value="<?php echo $key->nIdAlumno;?>" <?php echo $nIdDoce == $key->nIdAlumno ? "selected" : "" ?> ><?php echo $key->sNombre." ".$key->sApp." ".$key->sApm." - ".$key->sMatricula; ?></option>
	   			 <?php
	   			 	}
	   			 
	   			}
	   			?>
	   		</select>
	     </div>
	     <br>
	    <input type="hidden" name="nIdDF" value="<?php echo $nIdDF; ?>">
	      <input type="hidden" name="nIdG" value="<?php echo $nIdG; ?>">
	     <button class="btn btn-danger">Quitar</button>

  </div>
</form>
<?php 
}
?>