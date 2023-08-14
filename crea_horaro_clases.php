<?php
	include_once("class/Horario.php");
	$idE=$_REQUEST["idEsc"];
	$op=$_REQUEST["op"];
	$oH=null;

	$oH=new Horario();
	

?>
<?php 
		if($op == "a") {
?>
  <form action="abm/alta_horario_dias.php" method="post">
  <div id="lunes">
	   <label> </label>
	      <div class="form-group">
	   		<label class="checkbox-inline">
	   		<cinput type="checkbox" class="form-control"  name="check_dias[]" value="LU">
	   		<br>
	   		<br>Lunes</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIL">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFL">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarL">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonL">

	     </div>

  </div>
  <div id="martes">
	   <label>Día: </label>
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_dias[]" value="MA">Martes </label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIM">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFM">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarM">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonM">

	     </div>

  </div>
  <div id="martes">
	   <label>Día: </label>
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_dias[]" value="MI">Miercoles </label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIMI">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFMI">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarMI">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonMI">

	     </div>

  </div>
  <div id="martes">
	   <label>Día: </label>
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_dias[]" value="JU">Jueves </label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIJU">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFJU">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarJU">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonJU">

	     </div>

  </div>
  <div id="martes">
	   <label>Día: </label>
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_dias[]" value="VI">Viernes </label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIVI">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFVI">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarVI">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonVI">

	     </div>

  </div>
  <div id="martes">
	   <label>Día: </label>
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_dias[]" value="SA">Sabado </label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraISA">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFSA">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarSA">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonSA">

	     </div>

  </div>
      <div class="form-group">
  
	 <button class="btn btn-success"> Crear</button>

	   
     </div>


       		 <div class="form-group">
                                  
                                  <input type="hidden" class="form-control" id="username" name="txtnIDE" value="<?php echo $idE;?>" required="" title="Please enter you username"  required="required">

                                 
            </div>
          
         
   </form>
<?php 
	}else if($op == "m"){
		$idGE =$_REQUEST["idGE"];
		$nIdAsig=$_REQUEST["nIdAsig"];
		$oH->nIdGrupoEsc=$idGE;
		$oH->nIdAsig=$nIdAsig;
		 $arrDias=null;

?>
 <form action="abm/actualiza_horario_dias.php" method="post">
  <div id="lunes">
	   <label> </label>
	   <?php 
              $oH->sDia="LU";
              $arrDias=$oH->buscarDiasClases();
        ?>
        
        <?php 
        	if($arrDias != null){
        		$d=null;
        ?>
			
        <?php
        		foreach($arrDias as $d){
        ?>
        <input type="hidden" name="nIdDiaImpLU" value="<?php echo $d->nDiaImp; ?>">
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control" checked="checked"  name="check_dias[]" value="LU">Lunes</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIL" value="<?php echo $d->sHoraI;?>"> 
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFL" value="<?php echo $d->sHoraF;?>">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarL" value="<?php echo $d->sLugar;?>">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonL" value="<?php echo $d->sSalon;?>">

	     </div>
	     <?php 
	     		}
	 		}else{
	     ?>
		<div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_diasN[]" value="LU">Lunes</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIL">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFL">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarL">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonL">

	     </div>

	     <?php 
	 		}
	     ?>

  </div>
  <div id="martes">
	   <label> </label>
	   <?php 
              $oH->sDia="MA";
              $arrDias=$oH->buscarDiasClases();
        ?>
        
        <?php 
        	if($arrDias != null){
        		$d=null;
        ?>	
		 
        <?php
        		foreach($arrDias as $d){
        ?>
        <input type="hidden" name="nIdDiaImpMA" value="<?php echo $d->nDiaImp; ?>">
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control" checked="checked"  name="check_dias[]" value="MA">Martes</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIM" value="<?php echo $d->sHoraI;?>"> 
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFM" value="<?php echo $d->sHoraF;?>">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarM" value="<?php echo $d->sLugar;?>">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonM" value="<?php echo $d->sSalon;?>">

	     </div>
	     <?php 
	     		}
	 		}else{
	     ?>
		<div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_diasN[]" value="MA">Martes</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIM">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFM">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarLM">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonM">

	     </div>

	     <?php 
	 		}
	     ?>
  </div>
  <div id="miercoles">
	   <label> </label>
	   <?php 
              $oH->sDia="MI";
              $arrDias=$oH->buscarDiasClases();
        ?>
       
        <?php 
        	if($arrDias != null){
        		$d=null;
        ?>
		
        <?php
        		foreach($arrDias as $d){
        ?>
        <input type="hidden" name="nIdDiaImpMI" value="<?php echo $d->nDiaImp; ?>">
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control" checked="checked"  name="check_dias[]" value="MI">Miercoles</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIMI" value="<?php echo $d->sHoraI;?>"> 
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFMI" value="<?php echo $d->sHoraF;?>">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarMI" value="<?php echo $d->sLugar;?>">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonMI" value="<?php echo $d->sSalon;?>">

	     </div>
	     <?php 
	     		}
	 		}else{
	     ?>
		<div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_diasN[]" value="MI">Miercoles</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIMI">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFMI">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarMI">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonMI">

	     </div>

	     <?php 
	 		}
	     ?>

  </div>
  <div id="jueves">
	   <label> </label>
	   <?php 
              $oH->sDia="JU";
              $arrDias=$oH->buscarDiasClases();
        ?>
         
        <?php 
        	if($arrDias != null){
        		$d=null;
        ?>
			
        <?php
        		foreach($arrDias as $d){
        ?>
        <input type="hidden" name="nIdDiaImpJU" value="<?php echo $d->nDiaImp; ?>">
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control" checked="checked"  name="check_dias[]" value="JU">Jueves</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIJU" value="<?php echo $d->sHoraI;?>"> 
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFJU" value="<?php echo $d->sHoraF;?>">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarJU" value="<?php echo $d->sLugar;?>">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonJU" value="<?php echo $d->sSalon;?>">

	     </div>
	     <?php 
	     		}
	 		}else{
	     ?>
		<div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_diasN[]" value="JU">Jueves</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIJU">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFJU">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarJU">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonJU">

	     </div>

	     <?php 
	 		}
	     ?>
  </div>
  <div id="viernes">
	 <label> </label>
	   <?php 
              $oH->sDia="VI";
              $arrDias=$oH->buscarDiasClases();
        ?>
        
        <?php 
        	if($arrDias != null){
        		$d=null;
        ?>
			
        <?php
        		foreach($arrDias as $d){
        ?>
         <input type="hidden" name="nIdDiaImpVI" value="<?php echo $d->nDiaImp; ?>">
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control" checked="checked"  name="check_dias[]" value="VI">Viernes</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIVI" value="<?php echo $d->sHoraI;?>"> 
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFVI" value="<?php echo $d->sHoraF;?>">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarVI" value="<?php echo $d->sLugar;?>">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonVI" value="<?php echo $d->sSalon;?>">

	     </div>
	     <?php 
	     		}
	 		}else{
	     ?>
		<div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_diasN[]" value="VI">Viernes</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraIVI">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFVI">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarVI">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonVI">

	     </div>

	     <?php 
	 		}
	     ?>

  </div>
  <div id="sabado">
	   <label> </label>
	   <?php 
              $oH->sDia="SA";
              $arrDias=$oH->buscarDiasClases();
        ?>

        <?php 
        	if($arrDias != null){
        		$d=null;
        ?>
        
        <?php 
        		foreach($arrDias as $d){
        ?>
    	 <input type="hidden" name="nIdDiaImpSA" value="<?php echo $d->nDiaImp; ?>">
	      <div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control" checked="checked"  name="check_dias[]" value="SA">Sabado</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraISA" value="<?php echo $d->sHoraI;?>"> 
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFSA" value="<?php echo $d->sHoraF;?>">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarSA" value="<?php echo $d->sLugar;?>">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonSA" value="<?php echo $d->sSalon;?>">

	     </div>
	     <?php
	      		}
	 		}else{
	     ?>
		<div class="form-group">
	   		<label class="checkbox-inline"><input type="checkbox" class="form-control"  name="check_diasN[]" value="SA">Sabado</label>
			
	     </div>
	     <br>
	     <div class="form-inline">
	  	  
		  <label>Hora Inicial</label><input class="form-control" type="time" name="sHoraISA">
		  <label>Hora Final</label><input class="form-control" type="time" name="sHoraFSA">
			
	     </div>
		<br>
	     <div class="form-group">
		  <label>Lugar</label><input class="form-control" type="text" name="sLugarSA">

	     </div>
	      <div class="form-group">
		  <label class="">Salón</label><input class="form-control" type="text" name="sSalonSA">

	     </div>

	     <?php 
	 		}
	     ?>

  </div>
      <div class="form-group">
  
	 <button class="btn btn-success"> Actualizar</button>

	   
     </div>


       		 <div class="form-group">
                                  
                                  <input type="hidden" class="form-control" id="username" name="txtnIDE" value="<?php echo $idE;?>" required="" title="Please enter you username"  required="required">

                                 
            </div>
          
         
   </form>



<?php 
	}else if($op == "q"){

?>
	<form method="post" action="abm/baja_horario_dias.php">
		Click en Quitar para eliminar los días asignados<br>
		  <input type="hidden" class="form-control" id="username" name="idEsc" value="<?php echo $_REQUEST["idEsc"];?>">
		  <br>
		 <button class="btn btn-danger"> Quitar</button>
	</form>
<?php
	}
	else if($op == "b"){

?>
	<form method="post" action="abm/baja_materia_horario.php">
		Click en Quitar para eliminar la materia del horario<br>
		  <input type="hidden" class="form-control" id="username" name="idEsc" value="<?php echo $_REQUEST["idEsc"];?>">
		  <br>
		 <button class="btn btn-danger"> Quitar</button>
	</form>
<?php
	}

?>



   