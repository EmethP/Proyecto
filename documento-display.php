<?php
$sNombreMtric=$_COOKIE["sNombre"];

					include_once("class/Contenido.php");
					$oPost=null;
					$oPost=new Post();
					$oPost->setnIdPost($_REQUEST["nIdPost"]);
					$oPost->buscarPost();
					$oCont=null;
					$oCont=new Contenido();
					$oCont->setnIdPost($_REQUEST["nIdPost"]);
					$oCont->buscarContenido();
				
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
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">


 <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

<title>Sistema Integral de Información</title>
<style type="text/css">
	.row1 {
   
		background-color: #bbbfc0;

	}
</style>


<script type="text/javascript">
var nextinput = 0;
function AgregarCampos(){
	nextinput++;
	campo = '<li id="rut'+nextinput+'">Campo:<input type="text" size="20" id="campo' + nextinput + '"&nbsp; name="campo' + nextinput + '"&nbsp; /></li>';
	$("#campos").append(campo);
}
</script>
<script type="text/javascript">

$(document).ready(function(){
	$("#nIdPos").click();

});


</script>
<script>
  $(document).ready(function(){
    $('*').bind("cut copy paste",function(e) {
      e.preventDefault();
    });
  });


</script>
<style type="text/css" media="print"><!--
img { visibility:hidden }
body{ visibility: hidden }
--></style>
<script type="text/javascript">

//Vacia el portapapeles con el uso del teclado
if (document.layers)
document.captureEvents(Event.KEYPRESS)
function backhome(e){
window.clipboardData.clearData();
}
//Vacia el portapapeles con el uso del mouse
document.onkeydown=backhome
function click(){
if(event.button){
window.clipboardData.clearData();
}
}
document.onmousedown=click
//-->
</script>



</script>
</head>
<body onselectstart="return false;" ondragstart="return false;">
<header>
	<?php
		include_once("menu.php");
	 ?>

</header>




	<div class="container well">
		<div class="row main">
			<div class="" >
				<h4 class="text-center">
				
				</h4>
				
				

				<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                

            </div>
             <div class="" align="right">
             <form method="post">
             <input type="hidden" name="nIdPost" value="<?php echo $_REQUEST["nIdPost"]; ?>">
             <input type="hidden" name="sTipo" value="<?php echo $_REQUEST["sTipo"]; ?>">
              <button id="" class="btn btn-primary" formtarget="_blank" formaction="biblioteca/nueva-entrada.php">Modificar</button>
              </form>
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
                        <div class="titulo" style="background-color: #215c78; color: white">

					<h1 class="display-2">

						<p ><?php echo $oPost->getsTitulo();?> </p>
					</h1>
				</div>
				

				<img class="img-responsive" style="width: 450px; height: 370px; margin: 0 auto;" src="images/docs.png"> </br>
				
				Posteado el : <?php echo $oPost->getdFechaPublicacion();?></br>
				<h4><?php echo $oPost->getsSubContenido();?></h4><br><br>
				<?php echo $oCont->getsContenido();?>
                           
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
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>
    

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>

<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>
		
</body>
</html>