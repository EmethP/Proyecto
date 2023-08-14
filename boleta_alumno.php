<?php 

$nIdPeriodo=$_REQUEST["nIdP"];
$sMatricula=$_REQUEST["sMatricula"];
include_once("class/Colaborador.php");
include_once("class/Grupo.php");
$oC=null;
$oG=null;
$oC=new Colaborador();
$oG=new Grupo();
$oC->setsMatricula($sMatricula);
$oC->buscar();
$oG->setnIdAlumno($oC->nIdAlumno);
$oG->nIdPeriodo=$nIdPeriodo;
$oG->buscarGrupoDeAlumno();


?>
 <div class="body">
            <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">

                                    <thead>
                                        <tr>
                                            <th>Cve</th>
                                            <th>MATERIA</th>
                                            <th>S</th>
                                           
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
                                            <th>Cve</th>
                                            <th>MATERIA</th>
                                            <th>S</th>
                                            
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
                                    include_once("class/Horario.php");
                                    $oH=null;
                                    $oH=new Horario();
                                    if(isset($_REQUEST["nIdGE"]))
                                    $oH->nIdGrupoEsc=$_REQUEST["nIdGE"];
                                     if(isset($_POST["nIdGrE"]))
                                    $oH->nIdGrupoEsc=$_POST["nIdGE"];
                                    else
                                          $oH->nIdGrupoEsc=$oG->nIdGrupoEsc;
                                    $arrHorario=null;
                                    $arrHorario=$oH->buscarPorGrupo();
                                    if($arrHorario!=null){
                                        $g=null;
                                        include_once("class/Calificacion.php");
                                        foreach ($arrHorario as $g) {
                                            
                                        
                                    ?>
                                        
                                        <tr>
                                            <td>
                                            <?php echo $g->nIdAsig;?>
                                            </td>
                                            <td><?php echo $g->sNomM;?></td>
                                            <td><?php echo $g->sSemestre;?></td>
                                            <?php
                                                //obtener calificaciones

                                                $oCal=null;
                                                $oCal=new Calificacion();
                                                $oCal->setnIdAlumno($oC->nIdAlumno);
                                                $oCal->nIdAsig=$g->nIdAsig;
                                                $oCal->nCalT=0;
                                                $oCal->nCalP=0;
                                                $oCal->nFaltas="";
                                          ?>
                                            <?php
                                                $oCal->sParcial="1";
                                                 $oCal->buscarCalificaciones();
                                             ?>
                                           <td><?php echo $oCal->nCalT != 0 ? $oCal->nCalT : ""; ?></td>
                                           <td><?php echo $oCal->nCalP != 0 ? $oCal->nCalP : ""; ?></td>
                                           <td><?php echo $oCal->nFaltas; ?></td>
                                            <?php
                                                $oCal->sParcial="2";
                                                $oCal->nCalT=0;
                                                $oCal->nCalP=0;
                                                $oCal->nFaltas="";
                                                 $oCal->buscarCalificaciones();
                                             ?>
                                           <td><?php echo $oCal->nCalT != 0 ? $oCal->nCalT:"";?></td>
                                           <td><?php echo $oCal->nCalP != 0 ? $oCal->nCalP:"";?></td>
                                           <td><?php echo $oCal->nFaltas;?></td>
                                            <?php
                                                $oCal->sParcial="3";
                                                $oCal->nCalT=0;
                                                $oCal->nCalP=0;
                                                $oCal->nFaltas="";
                                                 $oCal->buscarCalificaciones();
                                             ?>
                                           <td><?php echo $oCal->nCalT != 0 ? $oCal->nCalT:"";?></td>
                                           <td><?php echo $oCal->nCalP != 0 ? $oCal->nCalP:"";?></td>
                                           <td><?php echo $oCal->nFaltas;?></td>
                                          <?php
                                                $oCal->sParcial="4";
                                                $oCal->nCalT=0;
                                                $oCal->nCalP=0;
                                                $oCal->nFaltas="";
                                                 $oCal->buscarCalificaciones();
                                             ?>
                                           <td><center><?php echo $oCal->nCalT != 0 ? $oCal->nCalT:"";?></center></td>
                                           <td><center><?php echo $oCal->nCalP != 0 ? $oCal->nCalP:"";?></center></td>
                                           

                                           
                                           
                                            
                                            
                                        </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                Ejemplo : P1 = Parcial 1 , 
                                T = Teoria, P = Practica 
            </div>
</div>