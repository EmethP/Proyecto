<?php
	include_once("class/Calendario.php");
	include_once("class/Departamento.php");
	$idE=$_REQUEST["idE"];
	$oE=null;
	$oD=null;
	$oE=new Calendario();
	$oD=new Departamento();
	$oD->nIdEvento=$idE;
	$arrDeptosPart=$oD->buscarParticipantes();
	$oE->nIdEvento=$idE;
	$oE->buscar();

?>
  <form action="abm/actualiza_evento.php" method="post">
    <input type="hidden" class="form-control" id="username" name="nIdEvento" value="<?php echo $_REQUEST['idE']?>">

       		 <div class="form-group">
                                  
                                  <input type="hidden" class="form-control" id="username" name="txtNom" value="" required="" title="Please enter you username" placeholder="Ejemplo : Juan Pablo" required="required">

                                 
            </div>
          
           <div class="form-group">
                                  <label for="username" class="control-label">Nombre del Evento:</label>
                                  <span class="help-block"></span>
                                  <input type="text" class="form-control" id="txtNomEven" name="txtNom"  required="" title="Please enter you username"  value="<?php echo $oE->sNomEvento; ?>" required="required">
                                  <span class="help-block"></span>
            </div>
            
 			

            <div class="form-group">
                                  <label for="username" class="control-label">Para el día:</label>
                                  <span class="help-block">Escriba el día en formato (dia/mes/año hora:minuto) La hora es en formato de 24 horas</span>
                                  <input type="datetime-local" class="form-control" id="txtFechaIni" name="txtFechaIni" value='<?php echo str_replace(" ","T",$oE->dFechaIni); ?>'>
                                  
            </div>
            <div class="form-group">
                                  <label for="username" class="control-label">Fin del evento :</label>
                                  <span class="help-block">Escriba el día en formato (dia/mes/año hora:minuto) La hora es en formato de 24 horas</span>
                                  <input type="datetime-local" class="form-control" id="txtFechaFin" name="txtFechaFin" value='<?php echo str_replace(" ","T",$oE->dFechaFin); ?>' >
                                  
            </div>
             <div class="form-group">
                                  <label for="username" class="control-label">Motivo del Evento:</label>
                                  <textarea class="form-control" id="txtDescripcion" name="txtContenido" ><?php echo $oE->sContenido; ?></textarea>
                                  <span class="help-block"></span>
            </div>
             <div class="form-group">




	             <div class="row">
	             	
	                                  <label for="username" class="control-label">Visual para:</label>
	                                  <br>
	                                 
	                                Todos
	                                  <input type="checkbox" class="form-control" id="txtChecky" name="txtCheck" value=""  onclick="return todos2();" >
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
										if($arrDeptos != null ){
										foreach($arrDeptos as $depto){
									    $alea=rand(0,20);
									?>
									<td bgcolor='<?php echo $colores[$alea]; ?>'>
										<?php echo $depto->sNombre;?>
	                                   <input type="checkbox" class="form-control" id="txtChecky<?php echo $i;?>" name="txtCheck<?php echo $i;?>"  
	                                   <?php 
	                                   	$de=null;
	                                   	if($arrDeptosPart != null){
		                                    foreach($arrDeptosPart as $de){
		                                    	if($de->nIdDepto == $depto->nIdDepto){
		                                    		echo "checked='checked'";
		                                    	}
		                                    }
										}
	                                    ?>  
	                                    onclick="return unTodos2();" value="<?php echo $depto->nIdDepto;?>">
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
	                                }
	                                ?>
									</table>
									<input type="hidden"  name="depas" value="<?php echo $i;?>" >
									<input type="hidden"  name="tipo" value="i" >
									
				<script type="text/javascript">
					function todos2(){
						var txts=<?php echo $i;?>;
						for(var j=1;j<txts;j++)
							$( "#txtChecky"+j ).prop( "checked", true );

						if (!$('#txtChecky').is(':checked')) {
							for(var j=1;j<txts;j++)
							$( "#txtChecky"+j ).prop( "checked", false );

						}
						
					}
					function unTodos2(){
						
						
							$( "#txtChecky" ).prop( "checked", false );
						
					}
			    </script>

	                                  <span class="help-block"></span>
	              	
          	    </div>
           </div>

             <div class="form-group">
                                  <label for="username" class="control-label">Color de Evento:</label>
                                  <input type="color"  class="form-control" id="txtPaletaColor" name="txtColor" value='<?php echo $oE->sColor; ?>'>
                                 

                                  <span class="help-block"></span>
            </div>
            <?php 
           if($_COOKIE["tipo"]=="c" || $_COOKIE["tipo"]=="b"){
    ?>
				 <div class="modal-footer">
				   <button type="submit" value='c' name='gc' class="btn btn-success"  onclick="return true;" >Guardar Cambios</button>
				    <button type="submit" formaction="abm/eliminar_evento.php" value='e' name='gc' class="btn btn-danger"  onclick="return true;" >Eliminar Evento </button>
		          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
				<?php 
			}
				?>
   </form>