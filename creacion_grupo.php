
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

	
function asignarDocente(idFolio){
        
        $( document ).ready(function(){
        var url = "asignar_docente.php?idFolio="+idFolio+"&op=f"; // El script a dónde se realizará la petición.
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
     function cambiarDocente(idFolio,nIdDoce,$nIdD){
        
        $( document ).ready(function(){
       var url = "asignar_docente.php?idFolio="+idFolio+"&op=fc&nIdDoce="+nIdDoce+"&nIdD="+$nIdD; // El script a dónde se realizará la petición.
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

function quitarDocente(idFolio,nIdDoce,$nIdD){
        
        $( document ).ready(function(){
       var url = "asignar_docente.php?idFolio="+idFolio+"&op=fe&nIdDoce="+nIdDoce+"&nIdD="+$nIdD; // El script a dónde se realizará la petición.
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
                <div class="glyphicon glyphicon-user"> <?php echo $_REQUEST["sNom"]." ";?> ALTA DE GRUPO EN FOLIO DEL PERIODO ESCOLAR <?php echo $_REQUEST["sPer"]?></div>
                </h4>
                
                <form action="abm/alta_grupo.php" method="post">
                <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdC" value="<?php echo $_REQUEST['nIdC'];?>">
                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdP" value="<?php echo $_REQUEST['nIdP'];?>">

                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sCar" value="<?php echo $_REQUEST['sNom'];?>">
                 <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="sPerio" value="<?php echo $_REQUEST['sPer'];?>">
                
                <div class="form-group  col-md-4">
                          <label class="control-label" >NOMBRE DE LISTA</label>
                          <input type="text" class="form-control"  maxlength="50"  id="txtCalle" name="txtNomGrup" value="" required="required">
                           <label class="control-label" >FOLIO PARA EL GRUPO</label>
                     
                          <select type="text" class="form-control"  maxlength="50"  id="txtFolio" name="txtFolio" value="" required="required">
                          <?php 
                          include_once("class/Folio.php");
                          $oF=null;
                          $oF=new Folio();
                          $oF->nIdCarrera=$_REQUEST["nIdC"];
                          $oF->nIdPeriodo=$_REQUEST["nIdP"];
                          $arrFols=null;
                          $arrFols=$oF->buscarFporCyP();
                          if($arrFols!=null){
                            $f=null;
                            foreach($arrFols as $f){
                          ?>
                            <option value="<?php echo $f->nIdFolio; ?>"><?php echo $f->sFolio; ?></option>
                          <?php 
                            }
                          }
                          ?>
                          </select>

                </div>
                
                


            

                <div class="form-group  col-md-4">
                    <div align="center">
                              <label class="control-label" for="inputError"></label><br>
                            <input type="submit" value="CREAR GRUPO" class="btn btn-primary"  id="InputSubmit">
                    </div>
                </div>

         <input type="hidden" class="form-control"  maxlength="30" name="sTipoUsua" value="<?php echo $_REQUEST['tipo'];?>"  >
                </form>
    </div>
    </div>



		<div class="row">
			<div class="" >
				<h4 class="text-center">
				<div class="glyphicon glyphicon-user">CARRERA DE <?php echo $_REQUEST["sNom"];?></div>
				</h4>
				
			
				<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   SELECCIONE UN GRUPO INSCRITO AL PERIODO
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
                                            <th>LISTA</th>
                                           
                                            <th>FOLIO</th>
                                            <th>NUMERO DE ALUMNOS</th>
                                           
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>LISTA</th>
                                           
                                            <th>FOLIO</th>
                                            <th>NUMERO DE ALUMNOS</th>
                                           
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    include_once("class/Grupo.php");
                                    $oG=null;
                                    $oG=new Grupo();
                                    $oG->nIdP=$_REQUEST["nIdP"];
                                    $oG->nIdC=$_REQUEST["nIdC"];
                                   
                                    $arrGrupos=null;
                                    $arrGrupos=$oG->buscarPorCarreraYPeriodo();
                                    if($arrGrupos!=null){
                                    	$g=null;
                                    	foreach ($arrGrupos as $g) {
                                    		
                                    	
                                    ?>

                                        <tr>
                                            <td><a href="asignar_alumnos_grupos.php?nIdG=<?php echo $g->nIdGrupo;?>&nIdC=<?php echo $_REQUEST['nIdC'];?>&nIdP=<?php echo $_REQUEST['nIdP'];?>&sNom=<?php echo $_REQUEST['sNom'];?>&sPer=<?php echo $_REQUEST['sPer'];?>"> <?php echo $g->sNombre;?></a></td>
                                            <td><?php echo $g->sFolio;?></td>
                                            <td><?php 
                                            $g->nIdPeriodo=$_REQUEST['nIdP'];

                                            echo $g->totalInscritosAlFolio();
                                            ?></td>

                                            <td>
                                              
                                            </td>
                                            <td></td>
                                            <td></td>
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
            <h4 class="modal-title" id="myModalLabel">DOCENTE</h4>
          </div>
          <div class="modal-body">
                <div id="actualizaEvento"></div>
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