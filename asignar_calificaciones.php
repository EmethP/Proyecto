<div class="row">
<?php 
function convierteCal($cal){
    
    return $cal;
}
?>
            <div class="" >
               
                
              

                <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                  ALUMNOS DENTRO DEL GRUPO
                </h2>
            </div>
            <!-- Basic Examples -->
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                 
                        <div class="body">
                        <form method="post" action="abm/calificar_alumno.php">

                            <div class="table-responsive">
                           
                            <input type="hidden" class="form-control"  maxlength="50"  id="txtCalle" name="nIdGr" value="<?php echo $_REQUEST['nIdGE'];?>">
                            <input type="hidden" name="nIdAsig" value="<?php echo $_REQUEST['nIdAsig']; ?>">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                          
                                            <th>MATRICULA</th>
                                            <th>NOMBRE COMPLETO (APP,APM,NOMS)</th>
                                            
                                            <th>P1-T</th>
                                            <th>P1-P</th>
                                            <th>P1-F</th>
                                            
                                            <th>P2-T</th>
                                            <th>P2-P</th>
                                            <th>P2-F</th>
                                           
                                            <th>P3-T</th>
                                            <th>P3-P</th>
                                            <th>P3-F</th>
                                           
                                            <th>FINAL T</th>
                                            <th>FINAL P</th>
                                            

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                            <th>MATRICULA</th>
                                            <th>NOMBRE COMPLETO (APP,APM,NOMS)</th>
                                            <th>P1-T</th>
                                            <th>P1-P</th>
                                            <th>P1-F</th>
                                           
                                            <th>P2-T</th>
                                            <th>P2-P</th>
                                            <th>P2-F</th>
                                            
                                            <th>P3-T</th>
                                            <th>P3-P</th>
                                            <th>P3-F</th>
                                           
                                            <th>FINAL T</th>
                                            <th>FINAL P</th>
                                            
                                          
                                         
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    include_once("class/Grupo.php");
                                    $oG=null;
                                    $oG=new Grupo();
                                   
                                    if(isset($_REQUEST['nIdGE'])){
                                    $oG->nIdGrupoEsc=$_REQUEST["nIdGE"];
                                   }else if(isset($_POST['nIdGE'])){
                                    $oG->nIdGrupoEsc=$_POST["nIdGE"];
                                   }
                                   
                                    $arrGrupos=null;
                                    $oG->nIdP=$_REQUEST["nIdPe"];
                                    $arrGrupos=$oG->buscarInscritosAlGrupo();
                                    if($arrGrupos!=null){
                                        $g=null;
                                        foreach ($arrGrupos as $g) {
                                            
                                        
                                    ?>

                                        <tr>
                                            
                                            <td><?php echo $g->sMatricula;?>
                                                <input type="checkbox" name="check_alumn[]" checked="checked" value="<?php echo $g->nIdAlumno;?>" style="opacity:0; position:absolute; left:9999px;">
                                            </td>
                                            <td><?php echo $g->sApp." ".$g->sApm." ".$g->sNombres;?></td>

                                            <?php 
                                            include_once("class/Calificacion.php");
                                                $oCali=null;
                                                $oCali=new Calificacion();
                                                $oCali->nIdAlumno=$g->nIdAlumno;
                                                $oCali->nIdAsig=$_REQUEST['nIdAsig'];
                                                $arrCals=null;
                                                $arrCals=$oCali->buscarMateriaDeAlumno();
                                             include_once("class/Periodo.php");
                                             include_once("class/Parcial.php");
                                             $oPa=null;
                                             $oPe=null;
                                             $oPe=new Periodo();
                                             $oPa=new Parcial();
                                             $arrPeriodo=null;
                                             $arrPeriodo=$oPe->buscarPeriodioActual();
                                             $pA="";
                                             $fechLim1="";
                                             $fechLim2="";
                                             $fechLim3="";
                                             $fechLim4="";
                                             $fecha_actual = strtotime(date("d-m-Y",time()));
                                             if($arrPeriodo != null){
                                                 foreach ($arrPeriodo as $key) {
                                                     $pA=$key->nIdPeriodo;
                                                     $oPa->nIdPeriodo=$pA;
                                                     
                                                 }   
                                             }

                                                  $value1="";
                                                  $arrParciales=null;
                                                  $oPa->sParcial="1";
                                                  $fechLim1="";
                                                     $arrParciales=$oPa->buscarPorPeriodoyParcial();
                                                     if($arrParciales != null){
                                                     foreach ($arrParciales as $key) {
                                                        // $key->nIdParcialFecha;
                                                        $fechLim1 = $key->dFechaLimite;
                                                       //  $key->sParcial;
                                                       //  $key->nIdPeriodo;
                                                     }
                                                     if($fecha_actual>strtotime($fechLim1)){
                                                        $value1="disabled='disabled'";
                                                     }
                                                  //  die("actual: ".date("d-m-Y",time())." - ".$fecha_actual."<br>"."limite: ".$fechLim." - ".strtotime($fechLim));
                                                   }

                                                  $value2="";
                                                  $arrParciales=null;
                                                  $oPa->sParcial="2";
                                                  $fechLim2="";
                                                     $arrParciales=$oPa->buscarPorPeriodoyParcial();
                                                     if($arrParciales != null){
                                                     foreach ($arrParciales as $key) {
                                                        // $key->nIdParcialFecha;
                                                        $fechLim2 = $key->dFechaLimite;
                                                       //  $key->sParcial;
                                                       //  $key->nIdPeriodo;
                                                     }
                                                     if($fecha_actual>strtotime($fechLim2)){
                                                        $value2="disabled='disabled'";
                                                     }
                                                  //  die("actual: ".date("d-m-Y",time())." - ".$fecha_actual."<br>"."limite: ".$fechLim." - ".strtotime($fechLim));
                                                   }
                                                  $value3="";
                                                  $arrParciales=null;
                                                  $oPa->sParcial="3";
                                                  $fechLim3="";
                                                     $arrParciales=$oPa->buscarPorPeriodoyParcial();
                                                     if($arrParciales != null){
                                                     foreach ($arrParciales as $key) {
                                                        // $key->nIdParcialFecha;
                                                        $fechLim3 = $key->dFechaLimite;
                                                       //  $key->sParcial;
                                                       //  $key->nIdPeriodo;
                                                     }
                                                     if($fecha_actual>strtotime($fechLim3)){
                                                        $value3="disabled='disabled'";
                                                     }
                                                  //  die("actual: ".date("d-m-Y",time())." - ".$fecha_actual."<br>"."limite: ".$fechLim." - ".strtotime($fechLim));
                                                   }

                                                   $value4="";
                                                  $arrParciales=null;
                                                  $oPa->sParcial="4";
                                                  $fechLim4="";
                                                     $arrParciales=$oPa->buscarPorPeriodoyParcial();
                                                     if($arrParciales != null){
                                                     foreach ($arrParciales as $key) {
                                                        // $key->nIdParcialFecha;
                                                        $fechLim4 = $key->dFechaLimite;
                                                       //  $key->sParcial;
                                                       //  $key->nIdPeriodo;
                                                     }
                                                     if($fecha_actual>strtotime($fechLim4)){
                                                        $value4="disabled='disabled'";
                                                     }
                                                  //  die("actual: ".date("d-m-Y",time())." - ".$fecha_actual."<br>"."limite: ".$fechLim." - ".strtotime($fechLim));
                                                   }




                                            if($arrCals==null){
                                                

                                            ?>
                                            
                                            <td><input type="text" name="nCal1T<?php echo $g->nIdAlumno; ?>" size="3" <?php echo $value1; ?> required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
                                            <td><input type="text" name="nCal1P<?php echo $g->nIdAlumno; ?>"  size="3" <?php echo $value1; ?> required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"> </td>
                                            <td><input type="text" name="nCal1F<?php echo $g->nIdAlumno; ?>" size="3"  <?php echo $value1; ?>  required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
                                            <td><input type="text" name="nCal2T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCal2P<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCal2F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCal3T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCal3P<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCal3F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCFinalT<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCFinalP<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <?php 
                                                }else if($oCali->buscarParcial("4")  &&  ($fecha_actual > strtotime($fechLim4)) ) {
                                                     $value="";
                                                  $arrParciales=null;
                                                  $oPa->sParcial="4";
                                                     $arrParciales=$oPa->buscarPorPeriodoyParcial();
                                                     if($arrParciales != null){

                                                     foreach ($arrParciales as $key) {
                                                        // $key->nIdParcialFecha;
                                                        $fechLim = $key->dFechaLimite;
                                                       //  $key->sParcial;
                                                       //  $key->nIdPeriodo;
                                                     }
                                                     if($fecha_actual>strtotime($fechLim)){
                                                        $value="disabled='disabled'";
                                                     }
                                                    //die("actual: ".date("d-m-Y",time())." - ".$fecha_actual."<br>"."limite: ".$fechLim." - ".strtotime($fechLim));
                                                   }
                                             
                                            ?>
                                            <td><input type="text" name="nCal1T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                $oCali->sParcial='1';
                                                $oCali->buscarDetalles(); 
                                            echo convierteCal($oCali->nCalT);?>"></td>
                                            <td><input type="text" name="nCal1P<?php echo $g->nIdAlumno; ?>"  size="3" disabled="disabled" value="<?php echo convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal1F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php  echo convierteCal($oCali->nFaltas);?>""></td>
                                           

                                            <td><input type="text" name="nCal2T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                $oCali->sParcial='2';
                                                $oCali->buscarDetalles(); 
                                            echo convierteCal($oCali->nCalT);?>"></td>
                                            <td><input type="text" name="nCal2P<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                               
                                            echo convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal2F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                            echo convierteCal($oCali->nFaltas);?>"></td>
                                          
                                            <td><input type="text" name="nCal3T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                $oCali->sParcial='3';
                                                $oCali->buscarDetalles(); 
                                            echo convierteCal($oCali->nCalT);?>"></td>
                                            <td><input type="text" name="nCal3P<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                
                                            echo convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal3F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                
                                            echo convierteCal($oCali->nFaltas);?>"></td>
                                           
                                            <td><input type="text" name="nCFinalT<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                            $oCali->sParcial='4';
                                                $oCali->buscarDetalles(); 
                                            echo convierteCal($oCali->nCalT);?>"></td>
                                            <td> <input type="text" name="nCFinalP<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                               
                                            echo convierteCal($oCali->nCalP);?>"> </td>

                                             <?php 
                                                }else if($oCali->buscarParcial("3") &&  ($fecha_actual > strtotime($fechLim3) ) && ($fecha_actual <= strtotime($fechLim4))){
                                                   
                                            ?>
                                             <td><input type="text" name="nCal1T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                $oCali->sParcial='1';
                                                $oCali->buscarDetalles(); 
                                            echo convierteCal($oCali->nCalT);?>"></td>
                                            <td><input type="text" name="nCal1P<?php echo $g->nIdAlumno; ?>"  size="3" disabled="disabled" value="<?php echo convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal1F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php  echo convierteCal($oCali->nFaltas);?>""></td>
                                           
                                            <td><input type="text" name="nCal2T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                $oCali->sParcial='2';
                                                $oCali->buscarDetalles(); 
                                            echo convierteCal($oCali->nCalT);?>"></td>
                                            <td><input type="text" name="nCal2P<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                               
                                            echo convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal2F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                 
                                            echo convierteCal($oCali->nFaltas);?>"></td>
                                            
                                            <td><input type="text" name="nCal3T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                $oCali->sParcial='3';
                                                $oCali->buscarDetalles(); 
                                            echo convierteCal($oCali->nCalT);?>"></td>
                                            <td><input type="text" name="nCal3P<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                              
                                            echo convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal3F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                
                                            echo convierteCal($oCali->nFaltas);?>"></td>
                                            
                                            <td><input type="text" name="nCFinalT<?php echo $g->nIdAlumno; ?>" size="3" required="required" <?php echo $value4; ?>  value="<?php 
                                                $oCali->sParcial='4';
                                                $oCali->buscarDetalles(); 
                                             echo  convierteCal($oCali->nCalT);?>" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
                                             <td><input type="text" name="nCFinalP<?php echo $g->nIdAlumno; ?>" size="3" required="required" <?php echo $value4; ?>   value="<?php 
                                            echo  convierteCal($oCali->nCalP);?>"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
                                             <?php 
                                                }else if($oCali->buscarParcial("2") &&  ($fecha_actual > strtotime($fechLim2) ) && ($fecha_actual <= strtotime($fechLim3))){
                                                     
                                            ?>
                                           <td><input type="text" name="nCal1T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                $oCali->sParcial='1';
                                                $oCali->buscarDetalles(); 
                                            echo convierteCal($oCali->nCalT);?>"></td>

                                            <td><input type="text" name="nCal1P<?php echo $g->nIdAlumno; ?>"  size="3" disabled="disabled" value="<?php echo convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal1F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php  echo convierteCal($oCali->nFaltas);?>""></td>
                                           
                                            <td><input type="text" name="nCal2T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                $oCali->sParcial='2';
                                                $oCali->buscarDetalles(); 
                                            echo convierteCal($oCali->nCalT);?>"></td>
                                            <td><input type="text" name="nCal2P<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                               
                                            echo $oCali->nCalP;?>"></td>
                                            <td><input type="text" name="nCal2F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                 
                                            echo convierteCal($oCali->nFaltas);?>"></td>
                                            
                                            <td><input type="text" name="nCal3T<?php echo $g->nIdAlumno; ?>" size="3" required="required" <?php echo $value3; ?> style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"  value="<?php 
                                                $oCali->sParcial='3';
                                                $oCali->buscarDetalles(); 
                                             echo  convierteCal($oCali->nCalT);?>" ></td>
                                            <td><input type="text" name="nCal3P<?php echo $g->nIdAlumno; ?>" size="3" required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"  <?php echo $value3; ?>  value="<?php 
                                            echo  convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal3F<?php echo $g->nIdAlumno; ?>" size="3" required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" <?php echo $value3; ?> value="<?php  echo convierteCal($oCali->nFaltas);?>"></td>
                                            <td><input type="text" name="nCFinalT<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCFinalP<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>

                                          
                                             <?php 
                                                }else if($oCali->buscarParcial("1") &&  ($fecha_actual > strtotime($fechLim1) ) && ($fecha_actual <= strtotime($fechLim2)) ) {
                                               
                                            ?>
                                           <td><input type="text" name="nCal1T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php 
                                                $oCali->sParcial='1';
                                                $oCali->buscarDetalles(); 
                                            echo convierteCal($oCali->nCalT);?>"></td>
                                            <td><input type="text" name="nCal1P<?php echo $g->nIdAlumno; ?>"  size="3" disabled="disabled" value="<?php echo convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal1F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled" value="<?php  echo convierteCal($oCali->nFaltas);?>"></td>
                                            
                                            <td><input type="text" name="nCal2T<?php echo $g->nIdAlumno; ?>" size="3" required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"  <?php echo $value2; ?> value="<?php 
                                                $oCali->sParcial='2';
                                                $oCali->buscarDetalles(); 
                                             echo  convierteCal($oCali->nCalT);?>"></td>
                                            <td><input type="text" name="nCal2P<?php echo $g->nIdAlumno; ?>" size="3" required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"  <?php echo $value2; ?> value="<?php 
                                            echo  convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal2F<?php echo $g->nIdAlumno; ?>" size="3" required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" <?php echo $value2; ?> value="<?php  echo convierteCal($oCali->nFaltas);?>" ></td>
                                            <td><input type="text" name="nCal3T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCal3P<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCal3F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCFinalT<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCFinalP<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>

                                          
                                            <?php 
                                                }else if( $fecha_actual <= strtotime($fechLim1) ){
                                                 
                                            ?>
                                            <td><input type="text" name="nCal1T<?php echo $g->nIdAlumno; ?>" size="3" required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" <?php echo $value1; ?> value="<?php 
                                                $oCali->sParcial='1';
                                                $oCali->buscarDetalles(); 
                                            echo  convierteCal($oCali->nCalT);?>"></td>
                                            <td><input type="text" name="nCal1P<?php echo $g->nIdAlumno; ?>"  size="3" required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"  <?php echo $value1; ?> value="<?php echo  convierteCal($oCali->nCalP);?>"></td>
                                            <td><input type="text" name="nCal1F<?php echo $g->nIdAlumno; ?>" size="3" required="required" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" <?php echo $value1; ?> value="<?php  echo convierteCal($oCali->nFaltas);?>"></td>
                                            <td><input type="text" name="nCal2T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCal2P<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabed"></td>
                                            <td><input type="text" name="nCal2F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                           
                                            <td><input type="text" name="nCal3T<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCal3P<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCal3F<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            
                                            <td><input type="text" name="nCFinalT<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>
                                            <td><input type="text" name="nCFinalP<?php echo $g->nIdAlumno; ?>" size="3" disabled="disabled"></td>

                                            <?php 
                                                }
                                            ?>
                                            
                                        </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                        
                                    </tbody>

                                </table>
                                 
                                 
                            

                            </div>
                            <div class="modal-footer"> <!-- modal footer -->
                               <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-success">Ingresar</button>
                             </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
        </section>
 
    <div class="modal fullscreen-modal fade" id="modalQuitarAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Quitar Alumno del Grupo</h4>
          </div>
          <div class="modal-body">
                <div id="modalAlumno"></div>
          </div>
          
        </div>
      </div>
    </div>

                    
                



</div>


    </div>