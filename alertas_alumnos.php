
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
   function verMaterias(sPeriodo,sNomDoc,sPe,alerta){
        
       $("#formDocente").submit(function(e) {
        var url = "ver_materias_docente.php?cal=1&calis=a&sPe="+sPeriodo+"&sNomDoc="+sNomDoc+"&sPe2="+sPe+"&alerta="+alerta; // El script a dónde se realizará la petición.
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
    function verFolios(sPeriodo,sNomDoc,sPe){
        
       $("#formFolio").submit(function(e) {
        var url = "ver_folios_docente.php?cal=1&calis=a&sPe="+sPeriodo+"&sNomDoc="+sNomDoc+"&sPe2="+sPe; // El script a dónde se realizará la petición.
         $.ajax({
           type: "POST",
           url: url,
           data: $("#formFolio").serialize(),
           success: function(data)
           {

               $("#folioDocente").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         

    }
   function enviarMensaje(nIdAlumno,sAlerta,nIdGrupoEsc,matricula,nIdAsig){
         var url = "abm/responder_alerta.php?nIdAlerta="+nIdAlumno+"&sAlerta="+sAlerta+"&nIdGrupoEsc="+nIdGrupoEsc+"&matricula="+matricula+"&nIdAsig="+nIdAsig; // the script where you handle the form input.

         $.ajax({
           type: "POST",
           url: url,
           data: $("#form"+nIdAlumno).serialize(), // serializes the form's elements.
           success: function(data)
           {
               $("#mensg"+nIdAlumno).html(data);// show response from the php script.
           }
         });
         return false;

   }
   function enviarMensajeATutor(nIdAlumno,sAlerta,nIdGrupoEsc,matricula,nIdAsig,nIdAlu){


 $.confirm({
    title: 'Enviar Mensaje a Tutor',
    content: 'Se enviará el mensaje al Tutor, ¿Está de acuedo?',
    type: 'purple',
    typeAnimated: true,
    buttons: {
        tryAgain: {
            text: 'Enviar',
            btnClass: 'btn-purple',
            action: function(){

               var url = "abm/enviar_alerta_tutor.php?nIdAlerta="+nIdAlumno+"&sAlerta="+sAlerta+"&nIdGrupoEsc="+nIdGrupoEsc+"&matricula="+matricula+"&nIdAsig="+nIdAsig+"&nIdAlu="+nIdAlu; // the script where you handle the form input.

         $.ajax({
           type: "POST",
           url: url,
           data: $("#form"+nIdAlumno).serialize(), // serializes the form's elements.
           success: function(data)
           {
               $("#mensg"+nIdAlumno).html(data);// show response from the php script.
           }
         });
            }
        },
        close: function () {
         
        }
    }
});

         return false;

   }

     function asignarAlerta(nIdGrup,nIdAsig,nIdPe){
        $("#calificaciones").html("");
       $(document).ready(function() {
        var url = "ver_respuesta_seguimiento.php?nIdGE="+nIdGrup+"&nIdAsig="+nIdAsig+"&nIdPe="+nIdPe; // El script a dónde se realizará la petición.
         $.ajax({
           
           url: url,
          
           success: function(data)
           {

               $("#calificaciones").html(data); // Mostrar la respuestas del script PHP.
           }
         });
         return false; // Evitar ejecutar el submit del formulario.
         }
         );
         $('DemoModal2').modal("show");

    }
   
    function verListaAsistencia(nIdGrup,nIdAsig,sNomMat,sGrupo,sFolio,sCarrera,sPe,sNomDoc,nIdPer){
        
       var a = document.createElement("a");
        a.target = "_blank";
       
        var url = "lista_asistencia.php?nIdGE="+nIdGrup+"&nIdAsig="+nIdAsig+"&sNomMat="+sNomMat+"&sGrupo="+sGrupo+"&sFolio="+sFolio+"&sCarrera="+sCarrera+"&sPe="+sPe+"&sNomDoc="+sNomDoc+"&nIdPer="+nIdPer; // El script a dónde se realizará la petición.
         a.href = url;
        a.click();

    }
   function verListaCalificaciones(nIdGrup,nIdAsig,sNomMat,sGrupo,sFolio,sCarrera,sPe,sNomDoc,sSem,sPe,nIdPer){
        
       var a = document.createElement("a");
        a.target = "_blank";
       
        var url = "lista_calificaciones.php?nIdGE="+nIdGrup+"&nIdAsig="+nIdAsig+"&sNomMat="+sNomMat+"&sGrupo="+sGrupo+"&sFolio="+sFolio+"&sCarrera="+sCarrera+"&sPe="+sPe+"&sNomDoc="+sNomDoc+"&sSem="+sSem+"&sPe2="+sPe+"&nIdPer="+nIdPer; // El script a dónde se realizará la petición.
         a.href = url;
        a.click();

    }
    function verListaAsistenciaFolio(nIdGrup,nIdAsig,sNomMat,sGrupo,sFolio,sCarrera,sPe,sNomDoc,nIdPe){
        
       var a = document.createElement("a");
        a.target = "_blank";
       
        var url = "lista_asistencia_folio.php?nIdG="+nIdGrup+"&nIdAsig="+nIdAsig+"&sNomMat="+sNomMat+"&sGrupo="+sGrupo+"&sFolio="+sFolio+"&sCarrera="+sCarrera+"&sPe="+sPe+"&sNomDoc="+sNomDoc+"&nIdPe="+nIdPe; // El script a dónde se realizará la petición.
         a.href = url;
        a.click();

    }
   function verListaCalificacionesFolio(nIdGrup,nIdAsig,sNomMat,sGrupo,sFolio,sCarrera,sPe,sNomDoc,sSem,nIdPe,sPe2){
        
       var a = document.createElement("a");
        a.target = "_blank";
       
        var url = "lista_calificaciones_folio.php?nIdGE="+nIdGrup+"&nIdAsig="+nIdAsig+"&sNomMat="+sNomMat+"&sGrupo="+sGrupo+"&sFolio="+sFolio+"&sCarrera="+sCarrera+"&sPe="+sPe+"&sNomDoc="+sNomDoc+"&sSem="+sSem+"&sPe2="+sPe2+"&nIdPe="+nIdPe;; // El script a dónde se realizará la petición.
         a.href = url;
        a.click();

    }
  

</script>
<style type="text/css">
    
#mdialTamanio{
  width: 97% !important;

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
	<div class="" >
		<section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <br>
                <h2>
                  Alertas
                </h2>
                <p>
              
                Estimado Docente : <br>
                De click en el botón <u>Materias en Periodo</u>, posteriormente de click en el grupo al cual asignará mediante filtros una alerta a un Tutor de Alumno, la alerta se enviará al departamento de Servicios Docentes, de la cual ellos tomaran las medidas necesarias a la alerta.  
                
 


                <br>
                Gracias.

                <br><br>
                <strong>Administración</strong>

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
                            <?php 
                            include_once("class/Colaborador.php");
                            include_once("class/Periodo.php");
							$oCol=null;
                            $oPe=null;
							$oCol=new Colaborador();
                            $oCol->sMatricula=$sNombreMtric;
                            $oCol->buscar();
                            $oPe=new Periodo();
                            $arrPe=null;
                            $arrPe = $oPe->buscarPeriodioActual();
							
                            ?>
                            <form action="" method="post" id="formDocente">
							  <div id="cambio">
								   <label> </label>
								      <div class="form-group">
								      <label>Docente: </label>
								   		<select class="form-control" type="time" name="cmbDocente">
								   			
								   				 <option value="<?php echo $oCol->nIdAlumno;?>"><?php echo $oCol->sNombre." ".$oCol->sApp." ".$oCol->sApm." - ".$oCol->sMatricula; ?>
								   				 	
								   				 </option>
								   			
								   			}
								   			?>
								   		</select>
                                    <?php
                                    $nIdPeriod=null;
                                    $nIni="";
                                    $nFin="";
                                        if($arrPe != null){
                                            $p=null;
                                            foreach($arrPe as $p){
                                    ?>
								   		<input type="hidden" name="nIdPeriodo" value="<?php echo $p->nIdPeriodo?>">
                                    <?php 
                                    $nIdPeriod=$p->nIdPeriodo;
                                    $nIni=$p->sInicio;
                                    $nFin=$p->sFin;
$meses=array("01" => "E", "02" => "F", "03" => "M", "04" => "A","05" => "M","06" => "J", "07" =>"J", "08" =>"A", "09" => "S", "10" => "O","11" => "N", "12" => "D");
                                    $nIni=$meses[substr($nIni,5,2)]."".substr($nIni,2,2);
                                    $nFin=$meses[substr($nFin,5,2)]."".substr($nFin,2,2);
                                            }
                                        }
                                    ?>
								     </div>
								     <br>
								     
								    <center> 
                                    
                                    <button class="btn btn-primary" onclick="return verMaterias('<?php echo $p->sPeriodo;?>','<?php echo $oCol->sNombre." ".$oCol->sApp." ".$oCol->sApm." - ".$oCol->sMatricula; ?>','<?php echo $nIni."-".$nFin; ?>','alerta');">MATERIAS EN EL PERIODO</button></center>

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