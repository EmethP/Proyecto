
<?php 

$sNombreMtric=$_COOKIE["sNombre"];
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
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">


 <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

<title>Sistema Integral de Información</title>
<style type="text/css">
	.row1 {
   
		background-color: #bbbfc0;

	}
</style>
<script type="text/javascript">

	function crearHorario(idEsc){
      
        $("#actualizaEvento").html("");
        
        $( document ).ready(function(){
        var url = "crea_horaro_clases.php?idEsc="+idEsc+"&op=a"; // El script a dónde se realizará la petición.
         $.ajax({
           url: url, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {

               $("#actualizaEvento").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         


      
        $('#modalEventoUpate').modal('show'); 
    }
    function modificarHorario(idEsc,idGE,nIdAsig){
     
         $("#actualizaEvento").html("");
        $( document ).ready(function(){
        var url = "crea_horaro_clases.php?idEsc="+idEsc+"&idGE="+idGE+"&nIdAsig="+nIdAsig+"&op=m"; // El script a dónde se realizará la petición.
         $.ajax({
           url: url, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {

               $("#actualizaEvento").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         


      
        $('#modalEventoUpate').modal('show'); 
    }
    function quitarHorario(idEsc){
    
         $("#actualizaEvento").html("");
        $( document ).ready(function(){
        var url = "crea_horaro_clases.php?idEsc="+idEsc+"&op=q"; // El script a dónde se realizará la petición.
         $.ajax({
           url: url, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {

               $("#actualizaEvento").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         


      
        $('#modalEventoUpate').modal('show'); 
    }
    function quitarMateria(idEsc){
    
         $("#actualizaEvento").html("");
        $( document ).ready(function(){
        var url = "crea_horaro_clases.php?idEsc="+idEsc+"&op=b"; // El script a dónde se realizará la petición.
         $.ajax({
           url: url, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {

               $("#actualizaEvento").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         


      
        $('#modalEventoUpate').modal('show'); 
    }
     function asignarDocente(idEsc,sNomM,nIdPe){
  
         $("#actualizaEvento").html("");
        $( document ).ready(function(){
        var url = "asignar_docente.php?idEsc="+idEsc+"&sNomM="+sNomM+"&op=a&nIdP="+nIdPe; // El script a dónde se realizará la petición.
         $.ajax({
           url: url, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {

               $("#actualizaEvento").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         


      
        $('#modalEventoUpate').modal('show'); 
    }
      function asignarDocenteFolio(nIdG,nIdAsig,sNomMat,sFolio){
         
         $("#actualizaEvento").html("");
        $( document ).ready(function(){
        var url = "asignar_docente.php?nIdGrupo="+nIdG+"&nIdAsig="+nIdAsig+"&op=df"+"&sNomMat="+sNomMat+"&sFolio="+sFolio; // El script a dónde se realizará la petición.
         $.ajax({
           url: url, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {

               $("#actualizaEvento").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         


      
        $('#modalEventoUpate').modal('show'); 
    }
     function cambiarDocente(idEsc,sNomM,nIdDoce){

         $("#actualizaEvento").html("");
        $( document ).ready(function(){
        var url = "asignar_docente.php?idEsc="+idEsc+"&sNomM="+sNomM+"&op=c&nIdDoce="+nIdDoce; // El script a dónde se realizará la petición.
         $.ajax({
           url: url, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {

               $("#actualizaEvento").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         


      
        $('#modalEventoUpate').modal('show'); 
    }

function quitarDocente(idEsc,sNomM,nIdDoce){
      
         $("#actualizaEvento").html("");
        $( document ).ready(function(){
        var url = "asignar_docente.php?idEsc="+idEsc+"&sNomM="+sNomM+"&op=q&nIdDoce="+nIdDoce; // El script a dónde se realizará la petición.
         $.ajax({
           url: url, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {

               $("#actualizaEvento").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         


      
        $('#modalEventoUpate').modal('show'); 
    }

function cambiarDocenteFolio(nIdDF,nIdG,nIdDoce,sNomMat,sFolio){
        
         $("#actualizaEvento").html("");
        $( document ).ready(function(){
        var url = "asignar_docente.php?nIdDF="+nIdDF+"&nIdG="+nIdG+"&op=cf&nIdDoce="+nIdDoce+"&sNomMat="+sNomMat+"&sFolio="+sFolio; // El script a dónde se realizará la petición.
         $.ajax({
           url: url, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {

               $("#actualizaEvento").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         


      
        $('#modalEventoUpate').modal('show'); 
    }

function quitarDocenteFolio(nIdDF,nIdG,nIdDoce,sNomMat,sFolio){

         $("#actualizaEvento").html("");
        $( document ).ready(function(){
        var url = "asignar_docente.php?nIdDF="+nIdDF+"&nIdG="+nIdG+"&op=qdf&nIdDoce="+nIdDoce+"&sNomMat="+sNomMat+"&sFolio="+sFolio; // El script a dónde se realizará la petición.
         $.ajax({
           url: url, // Adjuntar los campos del formulario enviado.
           success: function(data)
           {

               $("#actualizaEvento").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         


      
        $('#modalEventoUpate').modal('show'); 
    }







</script>

<script type="text/javascript">

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
                
                
                <form action="asignar_horario.php" method="post">
                <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdC" value="<?php echo $_REQUEST['nIdC'];?>">
                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdP" value="<?php echo $_REQUEST['nIdP'];?>">

                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sCar" value="<?php echo $_REQUEST['sNom'];?>">
                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sPerio" value="<?php echo $_REQUEST['sPer'];?>">
                  <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdG" value="<?php echo $_REQUEST['nIdG'];?>">
                   <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdGrE" value="<?php echo $_REQUEST['nIdGE'];?>">
                
                <div class="form-group  col-md-5">
                          <label class="control-label" >SELECCIONE UN SEMESTRE PARA VISUALIZAR LAS MATERIAS</label>
                          <select " class="form-control"  maxlength="50"  id="txtCalle" name="cmbSemestre" value="">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          

                          </select>
                </div>
                
                


            

                <div class="form-group  col-md-4">
                    <div align="center">
                              <label class="control-label" for="inputError"></label><br>
                            <input type="submit" value="LISTAR" class="btn btn-primary"  id="InputSubmit">
                    </div>
                </div>

         <input type="hidden" class="form-control"  maxlength="30" name="sTipoUsua" value="<?php echo $_REQUEST['tipo'];?>"  >
                </form>
    </div>
    </div>


    <?php 
        if(isset($_POST["cmbSemestre"])){
    ?>

		<div class="row">
			<div class="" >
				
				
				<form action="abm/alta_horario.php" method="post">

				<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                  AGREGUE LAS MATERIAS AL HORARIO PARA POSTERIORMENTE ASIGNALES DIAS
                </h2>
            </div>
            <!-- Basic Examples -->
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                       
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <form action="abm/alta_horario.php" method="post">
                             <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdGr" value="<?php echo $_POST['nIdG'];?>">

                             <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdCa" value="<?php echo $_POST['nIdC'];?>">
                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdPe" value="<?php echo $_POST['nIdP'];?>">

                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sCar" value="<?php echo $_POST['sNom'];?>">
                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sPeriod" value="<?php echo $_POST['sPer'];?>">
                   <input type="hidden" class="form-control"  maxlength="50"   name="nIdGrEs" value="<?php echo $_POST['nIdGrE'];?>">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                           <th>SELECCIONA</th>
                                            <th>MATERIA</th>
                                            <th>SEMESTRE</th>
                                            <th>CLAVE</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SELECCIONA</th>
                                            <th>MATERIA</th>
                                            <th>SEMESTRE</th>
                                            <th>CLAVE</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    include_once("class/Materia.php");
                                    $oM=null;
                                    $oM=new Materia();
                                    $oM->nIdCarrera=$_POST["nIdC"];
                                    $oM->setnIdCarrera($_POST["nIdC"]);
                                    $oM->sSemestre=$_POST["cmbSemestre"];
                                    $arrGrupos=null;
                                    $arrGrupos=$oM->buscarPorSemestre();
                                    if($arrGrupos!=null){
                                    	$g=null;
                                    	foreach ($arrGrupos as $g) {
                                    		
                                    	
                                    ?>

                                        <tr>
                                            <td><input type="checkbox" checked="checked" name="check_materia[]" value="<?php echo $g->nIdAsig;?>"></td>
                                            <td><?php echo $g->sNomM;?></td>
                                            <td><?php echo $g->sSemestre;?></td>
                                            <td><?php echo $g->nCredito;?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            
                                        </tr>
                                    <?php
                                    	}
                                    }
                                    ?>
                                        
                                    </tbody>

                                      
                                </table>
                                <input type="submit" align="center" value="Asignar Materias a Horario" class="btn btn-primary"  id="InputSubmit">
                                    </form>                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    
        
    </section>





				
				
		
<?php }
?>

<div class="row">
            <div class="" >
               
                
                

                <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                 HORARIO FORMADO
                </h2>
            </div>
            <!-- Basic Examples -->
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                       
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">

                                    <thead>
                                        <tr>
                                            <th>Cve</th>
                                            <th>MATERIA</th>
                                            <th>S</th>
                                           
                                            <th>Lunes</th>
                                            <th>Martes</th>
                                            <th>Miercoles</th>
                                            <th>Jueves</th>
                                            <th>Viernes</th>
                                            <th>Sabado</th>
                                            <th>Horas</th>
                                              <th>Materia</th>
                                            <th>Docente Materia</th>
                                            <th>Docente Titular En la Materia</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Cve</th>
                                            <th>MATERIA</th>
                                            <th>S</th>
                                            
                                            <th>Lunes</th>
                                            <th>Martes</th>
                                            <th>Miercoles</th>
                                            <th>Jueves</th>
                                            <th>Viernes</th>
                                            <th>Sabado</th>
                                            <th></th>
                                              <th></th>
                                              <th></th>
                                              <th>Docente Titular En la Materia</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                     <?php 
                                    include_once("class/Horario.php");
                                      include_once("class/Grupo.php");
                                    $oH=null;
                                    $oH=new Horario();
                                    if(isset($_REQUEST["nIdGE"]))
                                    $oH->nIdGrupoEsc=$_REQUEST["nIdGE"];
                                     if(isset($_POST["nIdGrE"]))
                                    $oH->nIdGrupoEsc=$_POST["nIdGrE"];
                                   
                                    $arrHorario=null;
                                    $arrHorario=$oH->buscarPorGrupo();
                                    if($arrHorario!=null){
                                        $g=null;
                                        foreach ($arrHorario as $g) {
                                            
                                        
                                    ?>
                                        
                                        <tr>
                                            <td>
                                            <?php echo $g->nIdAsig;?>
                                            </td>
                                            <td><?php echo $g->sNomM;?></td>
                                            <td><?php echo $g->sSemestre;?></td>
                                            
                                            <?php
                                            $oHd=null;
                                            $oHd=new Horario();
                                            $oHd->nIdGrupoEsc=$oH->nIdGrupoEsc;
                                            $oHd->nIdAsig=$g->nIdAsig;
                                            $arrDias=null;
                                            $i=0;
                                             ?>
                                            <td>
                                            <?php 
                                            $oHd->sDia="LU";
                                            $arrDias=$oHd->buscarDiasClases();
                                            if($arrDias != null){
                                                $dia=null;
                                                $i++;
                                                foreach ($arrDias as $dia) {
                                                    if($dia->sSalon == "" && $dia->sLugar == "" && $dia->sHoraI == "00:00:00" && $dia->sHoraF == "00:00:00"){
                                                        echo "----";
                                                    }else{
                                                    echo "<p align='justify'><strong>Hora:</strong>  <br>".$dia->sHoraI." - ".$dia->sHoraF."<br>";
                                                    echo "<strong>Salón:</strong><br>". $dia->sSalon."<br>";
                                                    echo "<strong>Lugar:</strong> <br>". $dia->sLugar."<br>";
                                                    }
                                                }

                                            }else{
                                            echo "----";
                                            }
                                            ?>
                                            </td>
                                            <td>
                                            <?php 
                                            $oHd->sDia="MA";
                                            $arrDias=$oHd->buscarDiasClases();
                                            if($arrDias != null){
                                                $dia=null;
                                                 $i++;
                                                foreach ($arrDias as $dia) {
                                                   if($dia->sSalon == "" && $dia->sLugar == "" && $dia->sHoraI == "00:00:00" && $dia->sHoraF == "00:00:00"){
                                                        echo "----";
                                                    }else{
                                                    echo "<p align='justify'><strong>Hora:</strong>  <br>".$dia->sHoraI." - ".$dia->sHoraF."<br>";
                                                    echo "<strong>Salón:</strong><br>". $dia->sSalon."<br>";
                                                    echo "<strong>Lugar:</strong> <br>". $dia->sLugar."<br>";
                                                    }
                                                }

                                            }else{
                                            echo "----";
                                            }
                                            ?>
                                            </td>
                                            <td>
                                            <?php 
                                            $oHd->sDia="MI";
                                            $arrDias=$oHd->buscarDiasClases();
                                            if($arrDias != null){
                                                $dia=null;
                                                 $i++;
                                                foreach ($arrDias as $dia) {
                                                    if($dia->sSalon == "" && $dia->sLugar == "" && $dia->sHoraI == "00:00:00" && $dia->sHoraF == "00:00:00"){
                                                        echo "----";
                                                    }else{
                                                    echo "<p align='justify'><strong>Hora:</strong>  <br>".$dia->sHoraI." - ".$dia->sHoraF."<br>";
                                                    echo "<strong>Salón:</strong><br>". $dia->sSalon."<br>";
                                                    echo "<strong>Lugar:</strong> <br>". $dia->sLugar."<br>";
                                                    }
                                                }

                                            }else{
                                            echo "----";
                                            }
                                            ?>
                                            </td>
                                            <td>
                                            <?php 
                                            $oHd->sDia="JU";
                                            $arrDias=$oHd->buscarDiasClases();
                                            if($arrDias != null){
                                                $dia=null;
                                                 $i++;
                                                foreach ($arrDias as $dia) {
                                                   if($dia->sSalon == "" && $dia->sLugar == "" && $dia->sHoraI == "00:00:00" && $dia->sHoraF == "00:00:00"){
                                                        echo "----";
                                                    }else{
                                                    echo "<p align='justify'><strong>Hora:</strong>  <br>".$dia->sHoraI." - ".$dia->sHoraF."<br>";
                                                    echo "<strong>Salón:</strong><br>". $dia->sSalon."<br>";
                                                    echo "<strong>Lugar:</strong> <br>". $dia->sLugar."<br>";
                                                    }
                                                }

                                            }else{
                                            echo "----";
                                            }
                                            ?>
                                            </td>
                                            <td>
                                            <?php 
                                            $oHd->sDia="VI";
                                            $arrDias=$oHd->buscarDiasClases();
                                            if($arrDias != null){
                                                $dia=null;
                                                 $i++;
                                                foreach ($arrDias as $dia) {
                                                    if($dia->sSalon == "" && $dia->sLugar == "" && $dia->sHoraI == "00:00:00" && $dia->sHoraF == "00:00:00"){
                                                        echo "----";
                                                    }else{
                                                    echo "<p align='justify'><strong>Hora:</strong>  <br>".$dia->sHoraI." - ".$dia->sHoraF."<br>";
                                                    echo "<strong>Salón:</strong><br>". $dia->sSalon."<br>";
                                                    echo "<strong>Lugar:</strong> <br>". $dia->sLugar."<br>";
                                                    }
                                                }

                                            }else{
                                            echo "----";
                                            }
                                            ?>
                                            </td>
                                            <td>
                                            <?php 
                                            $oHd->sDia="SA";
                                            $arrDias=$oHd->buscarDiasClases();
                                            if($arrDias != null){
                                                $dia=null;
                                                 $i++;
                                                foreach ($arrDias as $dia) {
                                                     if($dia->sSalon == "" && $dia->sLugar == "" && $dia->sHoraI == "00:00:00" && $dia->sHoraF == "00:00:00"){
                                                        echo "----";
                                                    }else{
                                                    echo "<p align='justify'><strong>Hora:</strong>  <br>".$dia->sHoraI." - ".$dia->sHoraF."<br>";
                                                    echo "<strong>Salón:</strong><br>". $dia->sSalon."<br>";
                                                    echo "<strong>Lugar:</strong> <br>". $dia->sLugar."<br>";
                                                    }
                                                }

                                            }else{
                                            echo "----";
                                            }
                                            ?>
                                            </td>
                                            <td>
                                            
                                            <?php 
                                                if($i == 0){
                                            ?>
                                            <button  class="btn btn-success" onclick="return crearHorario(<?php echo $g->nIdHorarioEsc;?>);">Asignar</button>
                                            <?php 
                                               }else{
                                            ?>
                                            <button  class="btn btn-warning" onclick="return modificarHorario(<?php echo $g->nIdHorarioEsc;?>,<?php echo $oH->nIdGrupoEsc;?>,<?php echo $g->nIdAsig;?>);">Modificar</button><br><br>
                                             <button  class="btn btn-danger" onclick="return quitarHorario(<?php echo $g->nIdHorarioEsc;?>);">Quitar</button>
                                            <?php 
                                              }
                                            ?>
                                            </td>
                                            <td>
                                                 <button  class="btn btn-danger" onclick="return quitarMateria(<?php echo $g->nIdHorarioEsc;?>);">Quitar </button>
                                            </td>
                                            
                                            <td>
                                                <?php 
                                                   $oHD=null;
                                                   $oHD=new Horario(); 
                                                   $oHD->nIdHorarioEsc=$g->nIdHorarioEsc;
                                                   $arrDocente=null;
                                                   $arrDocente=$oHD->buscarDocenteAsignado();
                                                   if($arrDocente != null){
                                                    $doce=null;
                                                        foreach ($arrDocente as $doce) {
                                                            echo "<center><strong>".$doce->sNomD."<br>".$doce->sAppD."<br>".$doce->sApmD."<br>".$doce->sMatri."</strong></center>";
                                                    
                                                ?>
                                                    <br>
                                                    <button  class="btn btn-warning" onclick="return cambiarDocente(<?php echo $g->nIdHorarioEsc;?>,'<?php echo $g->sNomM;?>',<?php echo $doce->nIdAlumno;?>);">Cambiar</button>
                                                    <button  class="btn btn-danger" onclick="return quitarDocente(<?php echo $g->nIdHorarioEsc;?>,'<?php echo $g->sNomM;?>',<?php echo $doce->nIdAlumno;?>);">quitar</button>
                                                <?php 
                                                        }
                                                    }else{
                                                ?>
                                                 <button  class="btn btn-success" onclick="return asignarDocente(<?php echo $g->nIdHorarioEsc;?>,'<?php echo $g->sNomM;?>',<?php echo $_REQUEST['nIdP'];?>);">Asignar</button>
                                                  <?php
                                                    }
                                                  ?>
                                            </td>
                                                <td>
                                                <?php 
                                                   $oG=null;
                                                 
                                                   $oG=new Grupo(); 
                                                   $oG->nIdGrupo=$_REQUEST["nIdG"];
                                                   $oG->nIdAsign=$g->nIdAsig;

                                                   $arrDocente=null;
                                                   $arrDocente=$oG->buscarDocenteFolio();
                                                   if($arrDocente != null){
                                                    $doce=null;
                                                        foreach ($arrDocente as $doce) {
                                                           
                                                            echo "<center><strong>".$doce->sNombres."<br>".$doce->sApp."<br>".$doce->sApm."<br>".$doce->sMatricula."</strong></center>";
                                                    
                                                ?>
                                                    <br>
                                                    
                                                    <button  class="btn btn-warning" onclick="return cambiarDocenteFolio(<?php echo $doce->nIdDocenteFolio;?>,<?php echo $_REQUEST["nIdG"]?>,<?php echo $doce->nIdAlumno;?>,'<?php echo $g->sNomM;?>','<?php echo $_REQUEST["sFolio"];?>');">Cambiar</button>
                                                    <button  class="btn btn-danger" onclick="return quitarDocenteFolio(<?php echo $doce->nIdDocenteFolio;?>,<?php echo $_REQUEST["nIdG"]?>,<?php echo $doce->nIdAlumno;?>,'<?php echo $g->sNomM;?>','<?php echo $_REQUEST["sFolio"];?>');">quitar</button>
                                                <?php 
                                                        }
                                                    }else{
                                                ?>
                                                 <button  class="btn btn-success" onclick="return asignarDocenteFolio(<?php echo $_REQUEST["nIdG"]?>,<?php echo $g->nIdAsig;?>,'<?php echo $g->sNomM;?>','<?php echo $_REQUEST["sFolio"];?>');">Asignar</button>
                                                  <?php
                                                    }
                                                  ?>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>



        </section>
 
<!-- Modal -->
    <div class="modal fullscreen-modal fade" id="modalEventoUpate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Horario</h4>
          </div>
          <div class="modal-body" id="actualizaEvento">

               <img src="images/loading.gif">
          </div>
          
        </div>
      </div>
    </div>
                    
                





	</div>
    </div>
	<!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>
    

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>


		
</body>
</html>