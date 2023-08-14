
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
 function quitar(nIdEscA,sNombres){
        
        $( document ).ready(function(){
        var url = "quitar_alumno_grupo.php?nIdEscA="+nIdEscA+"&sNombres="+sNombres;; // El script a dónde se realizará la petición.
         $.ajax({
          
           url: url,
          
           success: function(data)
           {

               $("#modalAlumno").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         
         $('#modalQuitarAlumno').modal('show'); 

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
                <div class="form-group  col-md-4">
                    
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
                            <form method="post" action="abm/alta_alumno_grupo.php">
                            <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdGr" value="<?php echo $_REQUEST['nIdGE'];?>">
  <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdP" value="<?php echo $_REQUEST['nIdP'];?>">

                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sCar" value="<?php echo $_REQUEST['sNom'];?>">
           
                  <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdG" value="<?php echo $_REQUEST['nIdG'];?>">
                    <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdFolio" value="<?php echo $_REQUEST['nIdFolio'];?>">
 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdC" value="<?php echo $_REQUEST['nIdC'];?>">
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
                                            
                                            <input type="checkbox" name="check_value[]" id="checkboxAlum" value="<?php echo $g->nIdAlumno;?>">

               
                                           
                                           

                                            </td>
                                            <td><?php echo $g->sMatricula;?></td>
                                            <td><?php echo $g->sApp;?></td>
                                            <td><?php echo $g->sApm;?></td>
                                            <td><?php echo $g->sNombre;?></td>
                                            <td><?php echo $g->sSemestre;?></td>
                                            <td>
                                            
                                            </td>
                                            
                                        </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                        
                                    </tbody>

                                </table>
                                 <input type="submit" align="center" value="Asignar Alumnos Grupo" class="btn btn-primary"  id="InputSubmit" />
                                 
                             </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
        </section>
 

                    
                



</div>


	</div>



<div class="row">
            <div class="" >
               
                
              

                <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                  ALUMNOS DENTRO DEL GRUPO
                </h2>
            </div>
            <!-- Basic Examples -->
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                 
                        <div class="body">
                            <div class="table-responsive">
                           
                            <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdGr" value="<?php echo $_REQUEST['nIdGE'];?>">

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
                                             <th>OPERACION</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    include_once("class/Grupo.php");
                                    $oG=null;
                                    $oG=new Grupo();
                                   
                                    if(isset($_REQUEST['nIdG'])){
                                    $oG->nIdGrupoEsc=$_REQUEST["nIdGE"];
                                   }else if(isset($_POST['nIdG'])){
                                    $oG->nIdGrupoEsc=$_POST["nIdGE"];
                                   }
                                   
                                    $arrGrupos=null;
                                    $oG->nIdP = $_REQUEST["nIdP"];
                                    $arrGrupos=$oG->buscarInscritosAlGrupo();
                                    if($arrGrupos!=null){
                                        $g=null;
                                        foreach ($arrGrupos as $g) {
                                            
                                        
                                    ?>

                                        <tr>
                                            <td>
                                            
                                            <input type="checkbox" name="check_value[]" id="checkboxAlum" value="<?php echo $g->nIdAlumno;?>">

                                           

                                            </td>
                                            <td><?php echo $g->sMatricula;?></td>
                                            <td><?php echo $g->sApp;?></td>
                                            <td><?php echo $g->sApm;?></td>
                                            <td><?php echo $g->sNombres;?></td>
                                            <td><?php echo $g->sSemestre;?></td>
                                            <td>
                                            <button class="btn btn-danger" onclick="return quitar(<?php echo $g->nIdAlumnoGrup; ?>,'<?php echo $g->sMatricula." ".$g->sNombres." ".$g->sApp." ".$g->sApm; ?>');">Quitar</button>
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
 
    <div class="modal fullscreen-modal fade" id="modalQuitarAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Quitar Alumno del Grupo</h4>
          </div>
          <div class="modal-body">
                <div id="modalAlumno"></div>
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