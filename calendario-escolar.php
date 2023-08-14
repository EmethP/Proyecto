<?php
$sNombreMtric=$_COOKIE["sNombre"];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link href="fullcalendar/fullcalendar.min.css" rel="stylesheet" />
<link href="fullcalendar/fullcalendar.print.min.css" rel="stylesheet" media="print" />
<script src="fullcalendar/lib/moment.min.js"></script>
<script src="fullcalendar/fullcalendar.min.js"></script>
<script src="fullcalendar/locale-all.js"></script>


<script>

	$(document).ready(function() {
		var initialLocaleCode = 'es';

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			defaultDate: <?php echo "'".date("Y-m-d")."'"; ?>,
			defaultView: 'month',
			locale: initialLocaleCode,
			buttonIcons: false, // show the prev/next text
			weekNumbers: true,
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
			<?php 
				include_once("class/Calendario.php");
				$oCal=new Calendario();
				$arrEvents=null;
				$arrEvents=$oCal->buscarTodos();

				if($arrEvents != null){
					$evento=null;
					foreach($arrEvents as $evento){

			?>
				
				{
					id: <?php echo $evento->nIdEvento;?>,
					title: '<?php echo $evento->sNomEvento;?>',
					start: '<?php echo $evento->dFechaIni;?>',
					end: '<?php echo $evento->dFechaFin;?>'
					<?php if($evento->sColor != '') { echo ", "; ?>backgroundColor: '<?php echo $evento->sColor;?>' <?php } ?>
				},
				
		<?php 
					}
			   }
		?>
				{
					
					title: 'Anio Nuevo',
					start: '2020-01-01',
					
				}
			],
		eventClick:function(event,jsEvent,view){
					mostrarEvento(event);
				   }
		});

		// build the locale selector's options
		$.each($.fullCalendar.locales, function(localeCode) {
			$('#locale-selector').append(
				$('<option/>')
					.attr('value', localeCode)
					.prop('selected', localeCode == initialLocaleCode)
					.text(localeCode)
			);
		});

		// when the selected option changes, dynamically change the calendar option
		$('#locale-selector').on('change', function() {
			if (this.value) {
				$('#calendar').fullCalendar('option', 'locale', this.value);
			}
		});
	});

</script>
<script type="text/javascript">

	function mostrarEvento(event){
		
		$( document ).ready(function(){
		var url = "actualiza-evento.php?idE="+event.id; // El script a dónde se realizará la petición.
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


		
	   /* $('#txtNomEven').val(event.title);
	    var d=new Date(event.start);

	    var fechaI=d.getFullYear()+"-"+(d.getMonth().toString().length == 1 ? "0"+d.getMonth():d.getMonth())+"-"+(d.getDay().toString().length == 1 ? "0"+d.getDay():d.getDay())+"T"+(d.getHours().toString().length == 1 ? "0"+d.getHours():d.getHours())+":"+(d.getMinutes().toString().length == 1 ? "0"+d.getMinutes():d.getMinutes())+":00";
	    var d=new Date(event.end);

	    var fechaF=d.getFullYear()+"-"+(d.getMonth().toString().length == 1 ? "0"+d.getMonth():d.getMonth())+"-"+(d.getDay().toString().length == 1 ? "0"+d.getDay():d.getDay())+"T"+(d.getHours().toString().length == 1 ? "0"+d.getHours():d.getHours())+":"+(d.getMinutes().toString().length == 1 ? "0"+d.getMinutes():d.getMinutes())+":00";
	    $('#txtFechaIni').val(fechaI);
	    $('#txtFechaFin').val(fechaF);
	    $('#txtDescripcion').val(event.description);
	    $('#txtPaletaColor').val(event.backgroundColor);
		
		return event.id;
		*/
		$('#modalEventoUpate').modal('show'); 
	}

	

</script>

<style>

	body {
		margin: 0;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}
/*
Full screen Modal 
*/
.fullscreen-modal .modal-dialog {
  margin: 0;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
@media (min-width: 768px) {
  .fullscreen-modal .modal-dialog {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .fullscreen-modal .modal-dialog {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .fullscreen-modal .modal-dialog {
     width: 1170px;
  }
}


</style>
</head>
<body>
<header>
	<?php include_once("menu.php");?>
</header>


<div class="container">





	<center>
	
 <?php 
           if($_COOKIE["tipo"]=="c" || $_COOKIE["tipo"]=="b"){
    ?>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Programar Un Evento +</button>
<?php 
			}
?>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Programar un Evento</h4>
        </div>
        <div class="modal-body">
        <form action="abm/alta_nuevo_evento.php" method="post">
       		 <div class="form-group">
                                  
                                  <input type="hidden" class="form-control" id="username" name="txtNom" value="" required="" title="Please enter you username" placeholder="Ejemplo : Juan Pablo" required="required">

                                 
            </div>
          
           <div class="form-group">
                                  <label for="username" class="control-label">Nombre del Evento:</label>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" id="username" name="txtNom" value="" required="" title="Please enter you username" placeholder="Ejemplo : día del aniversario escolar" required="required">
                                  <span class="help-block"></span>
            </div>
            
 			

            <div class="form-group">
                                  <label for="username" class="control-label">Para el día:</label>
                                  <span class="help-block">Escriba el día en formato (dia/mes/año hora:minuto) La hora es en formato de 24 horas</span>
                                  <input type="datetime-local" class="form-control" id="username" name="txtFechaIni" value=""  title="Please enter you username" placeholder="Ejemplo : Perez">
                                  
            </div>
            <div class="form-group">
                                  <label for="username" class="control-label">Fin del evento :</label>
                                  <span class="help-block">Escriba el día en formato (dia/mes/año hora:minuto) La hora es en formato de 24 horas</span>
                                  <input type="datetime-local" class="form-control" id="username" name="txtFechaFin" value=""  title="Please enter you username" placeholder="Ejemplo : Perez">
                                  
            </div>
             <div class="form-group">
                                  <label for="username" class="control-label">Motivo del Evento:</label>
                                  <textarea class="form-control" id="username" name="txtContenido" value=""  title="Please enter you motivo" placeholder=""></textarea>
                                  <span class="help-block"></span>
            </div>
             <div class="form-group">

	             <div class="row">
	             	
	                                  <label for="username" class="control-label">Visual para:</label>
	                                  <br>
	                                 
	                                Todos
	                                  <input type="checkbox" class="form-control" id="txtCheck" name="txtCheck" value="" checked="checked" onclick="return todos();" >
	                                  <table>
									<tr>

									<?php 
										include_once("class/Departamento.php");
										$oDep=null;
										$oDep=new Departamento();
										$arrDeptos=null;
										$arrDeptos=$oDep->buscarTodos();
										$depto=null;
										$i=1;
										$colores=array('#BDBDBD"','#F2F2F2','##DA81F5','#F79F81','#A9BCF5','#ECF6CE','#F6CEF5','#D0A9F5','#F6CECE','#81BEF7','#A9F5D0','#D0F5A9','#E0E0F8','#00BFFF','#F5A9BC','#F5D0A9','#FFBF00','#2ECCFA','#F5ECCE','#F3F781','#A9F5BC');
										foreach($arrDeptos as $depto){
									    $alea=rand(0,20);
									?>
									<td bgcolor='<?php echo $colores[$alea]; ?>'>
										<?php echo $depto->sNombre;?>
	                                   <input type="checkbox" class="form-control" id="txtCheck<?php echo $i;?>" name="txtCheck<?php echo $i;?>"  checked="checked" onclick="return unTodos();" value="<?php echo $depto->nIdDepto;?>">
	                            	</td>
	                            	<?php 
	                            	if($i %4 == 0){
	                            	?>
	                            	</tr>
	                            	<?php
	                            	}
	                            	$i++;
	                            	 ?>
	                                <?php 
	                                	}
	                                ?>
									</table>
									<input type="hidden"  name="depas" value="<?php echo $i;?>" >
									<input type="hidden"  name="tipo" value="i" >

				<script type="text/javascript">
					function todos(){
						var txts=<?php echo $i;?>;
						for(var j=1;j<txts;j++)
							$( "#txtCheck"+j ).prop( "checked", true );

						if (!$('#txtCheck').is(':checked')) {
							for(var j=1;j<txts;j++)
							$( "#txtCheck"+j ).prop( "checked", false );

						}
						
					}
					function unTodos(){
						
						
							$( "#txtCheck" ).prop( "checked", false );
						
					}
			    </script>

	                                  <span class="help-block"></span>
	              	
          	    </div>
           </div>

             <div class="form-group">
                                  <label for="username" class="control-label">Color de Evento:</label>
                                  <input type="color"  class="form-control" id="username" name="txtColor"  value="#f3f3f3" >
                                 

                                  <span class="help-block"></span>
            </div>
				 <div class="modal-footer">
				   <button type="submit" class="btn btn-success"  onclick="return true;" value="">Programar Evento</button>
		          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
           </form>
            
        </div>
        
      </div>
      
    </div>
  </div>
  

<!-- END MODAL -->
<!-- Modal -->
	<div class="modal fullscreen-modal fade" id="modalEventoUpate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Evento</h4>
	      </div>
	      <div class="modal-body">
	     		<div id="actualizaEvento"></div>
	      </div>
	      
	    </div>
	  </div>
	</div>





	</center>
	<div id='top' style="display: none">
		Localidad:
		<select id='locale-selector'></select>

	</div>
	<div id="calendar" class="table-responsive"></div>
</div>
</body>
</html>