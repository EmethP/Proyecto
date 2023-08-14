
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
				<div class="glyphicon glyphicon-user">ALTA DE PERIODO ESCOLAR</div>
				</h4>
				
				<form action="abm/alta_periodo.php" method="post">

				
				<div class="form-group  col-md-4">
						  <label class="control-label" >INICIO DEL PERIODO</label>
						  <input type="date" class="form-control"  maxlength="50"  id="txtCalle" name="dIniPeri" value="<?php echo $mat->sNomM;?>">
				</div>
				<div class="form-group  col-md-4">
						  <label class="control-label" >FIN DEL PERIODO</label>
						  <input type="date" class="form-control"  maxlength="50" " id="txtCalle" name="dFinPeri" value="<?php echo '';?>">
				</div>
				


			

				<div class="form-group  col-md-4">
					<div align="center">
							  <label class="control-label" for="inputError"></label><br>
							<input type="submit" value="CREAR PERIODO ESCOLAR" class="btn btn-primary"  id="InputSubmit">
					</div>
				</div>

		 <input type="hidden" class="form-control"  maxlength="30" name="sTipoUsua" value="<?php echo $_REQUEST['tipo'];?>"  >
				</form>
	</div>
	</div>
	<div class="row">
	<div class="" >
		<section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <br>
                <h2>
                   SELECCIONE UN PERIODOS ESCOLAR PARA VER SUS GRUPOS
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
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>PERIODO ESCOLAR</th>
                                           
                                            <th></th>
                                            <th></th>
                                           
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>PERIODO ESCOLAR</th>
                                           
                                            <th></th>
                                            <th></th>
                                           
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    include_once("class/Periodo.php");
                                    $oP=null;
                                    $oP=new Periodo();
                                    $arrPeriodos=null;
                                    $arrPeriodos=$oP->buscarTodos();
                                    if($arrPeriodos!=null){
                                    	$p=null;
                                    	foreach ($arrPeriodos as $p) {
                                    		
                                    	
                                    ?>

                                        <tr>
                                            <td> <?php echo $p->sPeriodo;?></td>
                                            <td> </a></td>
                                            <td></td>
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
                            </div>
                        </div>
                    </div>
                </div>
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