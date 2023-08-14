
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
   function verHorario(idEsc){
        
       $("#formDocente").submit(function(e) {
        var url = "ver_horario_docente.php"; // El script a dónde se realizará la petición.
         $.ajax({
           type: "POST",
           url: url,
           data: $("#formDocente").serialize(),
           success: function(data)
           {

               $("#horarioDocente").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         

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
			
	</div>
	<div class="row">
	<div class="" >
		<section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <br>
                <h2>
                  SELECCIONE A UN DOCENTE PARA VER SU HORARIO
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
                            <?php 
                            include_once("class/Colaborador.php");
							$oCol=null;
							$oCol=new Colaborador();
							$arrTodos=null;
							$arrTodos=$oCol->buscarTodosDocentes();
                            ?>
                            <form action="" method="post" id="formDocente">
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
								   				 <option value="<?php echo $key->nIdAlumno;?>"><?php echo $key->sNombre." ".$key->sApp." ".$key->sApm." - ".$key->sMatricula; ?>
								   				 	
								   				 </option>
								   			 <?php
								   			 	}
								   			 
								   			}
								   			?>
								   		</select>
								   		<input type="hidden" name="nIdPeriodo" value="<?php echo $_REQUEST['nIdP']?>">
								     </div>
								     <br>
								     
								    <center> <button class="btn btn-primary" onclick="return verHorario();">Ver Horario</button></center>

							  </div>
							</form>   

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="horarioDocente">
            	
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

				
		


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