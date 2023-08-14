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


$(document).ready(function() {
	alert = function() {};
    $('#tablaPosts').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );





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
				
				
				<form action="abm/alta_personal.php" method="post">

				<section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <center>
             <h2>
         							   <?php
									      	if($_REQUEST['sTipo'] == 's'){


									       ?>
											 DOCUMENTOS DE SERVICIO SOCIAL

										   <?php
									      	}else if($_REQUEST['sTipo'] == 'p'){


									       ?>
											 DOCUMENTOS DE  PRACTICAS PROFESIONALES 
									        <?php
									      	}else if($_REQUEST['sTipo'] == 't'){


									       ?>
											DOCUMENTOS DE TITULACIÓN
											 <?php
									      	}else if($_REQUEST['sTipo'] == 'r'){


									       ?>
											 DOCUMENTOS DE REGLAMENTOS
											  <?php
									      	}else if($_REQUEST['sTipo'] == 'e'){


									       ?>
									       DOCUMENTOS PROGRAMA DE ESTUDIOS
									       <?php 
									   		}else{
									       ?>
									      	OTROS DOCUMENTOS
									     <?php
									     	}
									      ?>
               
             
                </h2>
</center>
            </div>
             <div class="" align="right">
             <input type="hidden" name="sTipo" value="<?php echo $_REQUEST['sTipo'];?>">
              <button id="" class="btn btn-primary" target="_blank" formaction="biblioteca/nueva-entrada.php?nIdMat=<?php echo $_REQUEST['nIdMat'];?>"  formtarget="_blank">Publicar Documento</button>
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
                           
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                 <table id="tablaPosts" class="display table table-bordered table-striped table-hover js-exportable">
                                    <thead>
                                        <tr>
                                        	 <th id="nIdPos" class="sorting_desc" aria-sort="descending" aria-label="ID: activate to sort column descending">ID</th>
                                            <th>DOCUMENTO</th>
                                           
                                          

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        	 <th>ID</th>
                                            <th>DOCUMENTO</th>
                                           
                                          

                                        </tr>
                                    </tfoot>
                                  
                                    <tbody>
                                    <?php 
                                    include_once("class/Contenido.php");
                                    $oC=null;
                                    $oC=new Contenido();
                                    $oC->setnIdMateria($_REQUEST['nIdMat']);
                                    $arrCont=null;
                                    $oC->setsTipo($_REQUEST['sTipo']);
                                    $arrCont=$oC->buscarTodosPorMateria();
                                    $j=1;
                                    if($arrCont!=null){
                                    	$c=null;
                                    	foreach ($arrCont as $c) {
                                    		
                                    	
                                    ?>

                                        <tr>
	                                        <td>
	                                           <?php echo $c->getnIdPost();?>
	                                        </td>
                                            <td>
									    
									      <div class="">
									        <h4><strong><a href="#"><?php echo $c->getsTitulo();?></a></strong></h4>
									      </div>
									 
									    
									      <div >
									      <a href="documento-display.php?nIdPost=<?php echo $c->getnIdPost();?>&sTipo=<?php echo $_REQUEST['sTipo'];?>" class="thumbnail">
									     <img src="images/docs.png" class="img-responsvie" width="100px" height="50px">
									      </a>
									      </div>
									      <div class="">      
									        <p>
									         <?php echo $c->getsSubContenido();?>
									        </p>
									        <p><a class="btn" href="documento-display.php?nIdPost=<?php echo $c->getnIdPost();?>&sTipo=<?php echo $_REQUEST['sTipo'];?>"">Ver Más</a></p>
									      </div>
									   
									   
									      <div class="">
									        <p></p>
									        <p>
									        <?php 
									        include_once("class/Colaborador.php");
									        $oCol=null;
									        $oCol=new Colaborador();
									        $oCol->setsMatricula($c->getsUsuario());
									        $oCol->buscar();
									        ?>
									          <i class="icon-user"></i> by <?php echo $oCol->sNombre." ".$oCol->sApp." ".$oCol->sApm ?> 
									          | <i class="icon-calendar"></i> <?php echo $c->getdFechaPublicacion();?>
									         
									         
									        </p>
									      </div>
									   
									



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





				
				

				</form>

				
		


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