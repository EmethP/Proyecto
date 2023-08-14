
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
                
                
                <form action="asignar_alumnos_grupos.php" method="post">
                <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdC" value="<?php echo $_REQUEST['nIdC'];?>">
                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdP" value="<?php echo $_REQUEST['nIdP'];?>">

                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sCar" value="<?php echo $_REQUEST['sNom'];?>">
                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sPerio" value="<?php echo $_REQUEST['sPer'];?>">
                  <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdG" value="<?php echo $_REQUEST['nIdG'];?>">
                
                <div class="form-group  col-md-5">
                          <label class="control-label" >SELECCIONE UN SEMESTRE PARA VISUALIZAR ALUMNOS</label>
                          <select " class="form-control"  maxlength="50"  id="txtCalle" name="cmbSemestre" value="">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>

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
				
				
				<form action="abm/alta_alumno_folio.php" method="post">

				<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                  SELECCIONE LOS ALUMNOS DEL SEMESTRE PARA ASIGNAR AL GRUPO, TENGA EN CUENTA QUE DEBERÁ SELECCIONAR UNO POR UNO.
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
                            <form action="abm/alta_alumno_folio.php" method="post">
                             <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdGr" value="<?php echo $_POST['nIdG'];?>">

                             <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdCa" value="<?php echo $_POST['nIdC'];?>">
                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdPe" value="<?php echo $_POST['nIdP'];?>">

                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sCar" value="<?php echo $_POST['sNom'];?>">
                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sPeriod" value="<?php echo $_POST['sPer'];?>">
                  
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>SELECCIONA</th>
                                            <th>MATRICULA</th>
                                            <th>APELLIDO PATERNO</th>
                                            <th>APELLIDO MATERNO</th>
                                            <th>NOMBRES</th>
                                            <th>SEMESTRE</th>
                                            <th>OPERACION</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>SELECCIONA</th>
                                            <th>MATRICULA</th>
                                            <th>APELLIDO PATERNO</th>
                                            <th>APELLIDO MATERNO</th>
                                            <th>NOMBRES</th>
                                            <th>SEMESTRE</th>
                                            <th>OPERACION</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    include_once("class/Periodo.php");
                                    $oG=null;
                                    $oG=new Periodo();
                                    $oG->nIdPeriodo=$_POST["nIdP"];
                                    $oG->setnIdCarrera($_POST["nIdC"]);
                                    $oG->sSemestre=$_POST["cmbSemestre"];
                                    $arrGrupos=null;
                                    $arrGrupos=$oG->buscarInscritos();
                                    if($arrGrupos!=null){
                                    	$g=null;
                                    	foreach ($arrGrupos as $g) {
                                    		
                                    	
                                    ?>

                                        <tr>
                                            <td><input type="checkbox" name="check_IdAlumno[]" value="<?php echo $g->nIdAlumno;?>"></td>
                                            <td><?php echo $g->sMatricula;?></td>
                                            <td><?php echo $g->sApp;?></td>
                                            <td><?php echo $g->sApm;?></td>
                                            <td><?php echo $g->sNombre;?></td>
                                            <td><?php echo $g->sSemestre;?></td>
                                            <td></td>
                                            
                                        </tr>
                                    <?php
                                    	}
                                    }
                                    ?>
                                        
                                    </tbody>

                                      
                                </table>
                                <input type="submit" align="center" value="Asignar Alumnos a Folio y Grupo" class="btn btn-primary"  id="InputSubmit">
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
               
                
                <form action="" method="post">

                <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                  ALUMNOS DENTRO DEL FOLIO
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
                                            <th>SELECCIONA</th>
                                            <th>MATRICULA</th>
                                            <th>APELLIDO PATERNO</th>
                                            <th>APELLIDO MATERNO</th>
                                            <th>NOMBRES</th>
                                            <th>SEMESTRE</th>
                                            <th>OPERACION</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SELECCIONA</th>
                                            <th>MATRICULA</th>
                                            <th>APELLIDO PATERNO</th>
                                            <th>APELLIDO MATERNO</th>
                                            <th>NOMBRES</th>
                                            <th>SEMESTRE</th>
                                            
                                            <th>OPERACION</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    include_once("class/Grupo.php");
                                    $oG=null;
                                    $oG=new Grupo();
                                    if(isset($_POST['nIdP'])){
                                    $oG->nIdPeriodo=$_POST["nIdP"];
                                    }else if(isset($_REQUEST['nIdP'])){
                                    $oG->nIdPeriodo=$_REQUEST["nIdP"];
                                    } 
                                    if(isset($_REQUEST['nIdG'])){
                                    $oG->nIdGrupo=$_REQUEST["nIdG"];
                                   }else if(isset($_POST['nIdG'])){
                                    $oG->nIdGrupo=$_POST["nIdG"];
                                   }
                                   
                                    $arrGrupos=null;
                                    $arrGrupos=$oG->buscarFoliosPorCarrera();
                                    if($arrGrupos!=null){
                                        $g=null;
                                        foreach ($arrGrupos as $g) {
                                            
                                        
                                    ?>

                                        <tr>
                                            <td>
                                            <div class="checkbox">
                                            <input type="checkbox" name="check" value="<?php echo $g->nIdAlumno;?>">

                                            </div>

                                            </td>
                                            <td><?php echo $g->sMatricula;?></td>
                                            <td><?php echo $g->sApp;?></td>
                                            <td><?php echo $g->sApm;?></td>
                                            <td><?php echo $g->sNombre;?></td>
                                            <td><?php echo $g->sSemestre;?></td>
                                            <td>
                                            <form action="abm/baja_alumno_folio.php" method="post">
                                            <input type="hidden" name="nIdAlumnoBtn" value="<?php echo $g->nIdGrupoPeriodo;?>">
                                            <button input="submit" class="btn btn-danger"  value="<?php echo $g->nIdAlumno;?>" formaction="abm/baja_alumno_folio.php">quitar</button>
                                            </form>
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