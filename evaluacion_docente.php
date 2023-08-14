<?php 

$sNombreMtric=$_COOKIE["matricula"];
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.js"></script>

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

     function diseniarEva(){
         
      
        var url = "diseniar_evaluacion.php"; // El script a dónde se realizará la petición.
         $.ajax({
          
           url: url,
          
           success: function(data)
           {
               $("#calificaciones").html("");
               $("#calificaciones").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         // Evitar ejecutar el submit del formulario.
       
         
           $('#DemoModal2').modal("show");
            return false;

    }

    function verEvaluaciones(){
        var url = "evaluaciones.php"; // El script a dónde se realizará la petición.
         $.ajax({
          
           url: url,
          
           success: function(data)
           {
              
               $("#evaluaciones").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         // Evitar ejecutar el submit del formulario.
            return false;
    }
    function verGrupos(nIdP,nIdEva){
       $("#calificaciones").html("");
      var url = "grupos_docentes_evaluacion.php?sMatricula=<?php echo $_COOKIE['matricula'];?>&nIdP="+nIdP+"&nIdEva="+nIdEva; // El script a dónde se realizará la petición.
         $.ajax({
          
           url: url,
          
           success: function(data)
           {
              
               $("#calificaciones").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         // Evitar ejecutar el submit del formulario.
       
         
           $('#DemoModal2').modal("show");
            return false;

    }

    function alumnosEnGrupo(nIdHorarioM,nIdGrup,nIdAsig,nIdPe,nIdEva){
        $("#alumnosEnGrupo").html("");
       $(document).ready(function() {
        var url = "ver_alumnos_grupo.php?nIdHorarioM="+nIdHorarioM+"&nIdGE="+nIdGrup+"&nIdAsig="+nIdAsig+"&nIdPe="+nIdPe+"&nIdEva="+nIdEva; // El script a dónde se realizará la petición.
         $.ajax({
           
           url: url,
          
           success: function(data)
           {

               $("#alumnosEnGrupo").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         $('#test1').modal("show");

    }
   function aplicar(){
        
       $("#formAplicar").submit(function(e) {
        var url = "abm/aplicar_participantes_evaluacion.php"; // El script a dónde se realizará la petición.
         $.ajax({
           type: "POST",
           url: url,
           data: $("#formAplicar").serialize(),
           success: function(data)
           {

               $("#alumnosEnGrupo").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         

    }


</script>
<style type="text/css">
    
#mdialTamanio{
  width: 97% !important;

}

/* Important part */
.modal-dialog1{
    overflow-y: initial !important
}
.modal-body1{
    height: 700px;
    overflow-y: auto;
}
</style>

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
	<div class="">

		<section class="content">
        <div class="container-fluid">
         <img src="images/evaluciones1.png" class="img-responsive">
            <div class="block-header">
            <br>
                <h2>
                  Evaluación Docente
                </h2>
                <p>
              
                
                
 <center> 
                                    
                                    <button class="btn btn-primary" onclick="return diseniarEva();">DISEÑAR EVALUACIÓN</button></center>
               

                </p>
                <?php 
                    $listaCalis=null;
                ?>
            </div>
            <!-- Basic Examples -->
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                     
                        <div class="body">
                            <div class="table-responsive">
                           
                            <form action="" method="post" id="formDocente">
							  <div id="cambio">
								   <label> </label>
								      <div class="form-group">
								      
                                
                                    <center>
                                    

                                      <button class="btn btn-info" onclick="return verEvaluaciones();">BANCO DE EVALUACIONES</button></center>

							  </div>
							</form>   

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="horarioDocente">
            	
            </div>
           <div id="evaluaciones">
             
           </div>
        </div>
    </section>

















                    


				
		


	</div>


   <div id="DemoModal2" class="modal fade"> <!-- class modal and fade -->
      
    <div class="modal-dialog modal-lg" id="mdialTamanio">
        <div class="modal-content">
          
           <div class="modal-header"> <!-- modal header -->
            <button type="button" class="close" 
             data-dismiss="modal" aria-hidden="true">×</button>
             
                    <h4 class="modal-title">Diseño de Evaluación al Docente</h4>
           </div>
         
     <div class="modal-body1" id="calificaciones"> <!-- modal body -->
       <p>Cargando, Espere.. <img src="images/loading.gif"></p>
       <p class="text-warning"><small>Espere un momento en lo que se listan los alumnos</small></p>
     </div>
     
     
                
      </div> <!-- / .modal-content -->
      
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