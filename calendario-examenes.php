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



</center>

	<center>
	
 
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Programar Un Examen +</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
<!--
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Programar un Examen</h4>
          -->
        </div>
        <div class="modal-body">
        <form action="abm/alta_nuevo_evento.php" method="post">
       		 <div class="form-group">
                                  
                                  <input type="hidden" class="form-control" id="username" name="txtNom" value="" required="" title="Please enter you username" placeholder="Ejemplo : Juan Pablo" required="required">

                                 
            </div>
          
           <div class="form-group">
                                  <label for="username" class="control-label">Nombre del Examen:</label>
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
                                  <label for="username" class="control-label">Fin del Examen :</label>
                                  <span class="help-block">Escriba el día en formato (dia/mes/año hora:minuto) La hora es en formato de 24 horas</span>
                                  <input type="datetime-local" class="form-control" id="username" name="txtFechaFin" value=""  title="Please enter you username" placeholder="Ejemplo : Perez">
                                  
            </div>
             <div class="form-group">
                                  <label for="username" class="control-label">Motivo del Examen:</label>
                                  <textarea class="form-control" id="username" name="txtContenido" value=""  title="Please enter you motivo" placeholder=""></textarea>
                                  <span class="help-block"></span>
            </div>
             <div class="form-group">

	             <div class="row">
	             	
	                                  <label for="username" class="control-label">Asignar a Materia:</label>
	                                  <br>
	                                 
	                                Todos
	                                  <input type="checkbox" class="form-control" id="txtCheck" name="txtCheck" value="" checked="checked" onclick="return todos();" >
	                                  <table>
									<tr>
									 Carreras
									<?php 
										include_once("class/Carrera.php");
										$oDep=null;
										$oDep=new Carrera();
										$arrDeptos=null;
										$arrDeptos=$oDep->buscarTodos();
										$depto=null;
										$i=1;
										
								    ?>
									<select name="cmbCarrera">
								    <?php 
										foreach($arrDeptos as $depto){
									    $alea=rand(0,20);
									?>
									
										
	                                   <option  class="form-control" id="txtCheck<?php echo $i;?>"    value="<?php echo $depto->getnIdCarrera();?>">
	                                   <?php echo $depto->getsNomCarrera();?>
	                                   </option>
	                            	
	                            	<?php 
	                            	if($i %4 == 0){
	                            	?>
	                            	
	                            	<?php
	                            	}
	                            	$i++;
	                            	 ?>
	                                <?php 
	                                	}
	                                ?>
	                                </select>

	                                </tr>	
	                                </table>
	                                <?php 
										include_once("class/Maeria.php");
										$oDep=null;
										$oDep=new Materia();
										$arrDeptos=null;
										$arrDeptos=$oDep->buscarTodos();
										$depto=null;
										$i=1;
										
								    ?>
									<select name="cmbCarrera">
								    <?php 
										foreach($arrDeptos as $depto){
									    $alea=rand(0,20);
									?>
									
										
	                                   <option  class="form-control" id="txtCheck<?php echo $i;?>"    value="<?php echo $depto->getnIdCarrera();?>">
	                                   <?php echo $depto->getsNomCarrera();?>
	                                   </option>
	                            	
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
	                                </select>
								
									<input type="hidden"  name="depas" value="<?php echo $i;?>" >
									<input type="hidden"  name="tipo" value="x" >

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
	
</div>
</body>
</html>