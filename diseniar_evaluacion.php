<?php 

?>
<style type="text/css">
	.header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}

hr.style8 {
	border-top: 1px solid #8c8b8b;
	border-bottom: 1px solid #fff;
}
</style>
<script type="text/javascript">
var nextinput = 0;
var resp=2;
var preg=1;
function agregarRespuesta(){
var campo2='<div class="form-group"><span class="col-md-1 col-md-offset-2 text-center"></span><div class="col-xs-12 col-md-4"><input id="lname" name="resp'+(preg)+'[]" type="text" placeholder="Respuesta '+resp+'" class="form-control" required="required"></div><div class="col-xs-12 col-md-2"><input id="lname" name="ponde'+(preg)+'[]" type="text" placeholder="Ponderación" class="form-control" required="required"></div>';
$("#respuestas"+nextinput).append(campo2);
resp++;
}
function agregarPregunta(){
nextinput++;
preg++;
resp=2;
$("#res").hide();
$("#res"+(preg-1)).hide();
var campo2='<hr><div class="form-group"><span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil bigicon"></i></span><div class="col-md-8"><input id="lname" name="preg'+preg+'" type="text" placeholder="Pregunta '+preg+'" class="form-control" required="required"></div></div><div class="form-group"><span class="col-md-1 col-md-offset-2 text-center"></span><div class="col-xs-12 col-md-4"><input id="lname" name="resp'+preg+'[]" type="text" placeholder="Respuesta 1" class="form-control" required="required"></div><div class="col-xs-12 col-md-2"><input id="lname" name="ponde'+preg+'[]" type="text" placeholder="Ponderación" class="form-control" required="required"></div><div id="res'+preg+'" class="col-xs-12 col-md-12"><a href="#" onclick="agregarRespuesta();">Agregar Más Respuesas</a></div></div><div id="respuestas'+nextinput+'"></div>';
$("#preguntas").append(campo2);

}


function validar(){
$("#txtTotal").val(preg);
  
       $(document).ready(function(){
       	 var url = "abm/alta_evaluacion_docente.php"; // El script a dónde se realizará la petición.
         $.ajax({
           type: "POST",
           url: url,
           data: $("#formEva").serialize(),
           success: function(data)
           {
           	   
               $("#respuestaDatos").html(data); // Mostrar la respuestas del script PHP.
               $.alert({
				    title: 'Mensaje',
				    content: 'Verifique su Evaluación en el Banco de Evaluaciones',
				});
               
               $(function () {
				   $('#DemoModal2').modal('toggle');
				});
           }
         });
        
         }
         );
       
         

	return false;
}
</script>

<div class="container">
    <div class="row">

        <div class="col-md-12">

            <div class="well well-sm" >
            <div id="respuestaDatos"></div>
                <form class="form-horizontal" id="formEva">
                    <fieldset>
                        <legend class="text-center header">Evaluación</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil bigicon"></i></span>
                            <div class="col-md-8">
                             <input id="txtTotal" name="txtTotal" type="hidden"  class="form-control">
                                <input id="fname" name="name" type="text" placeholder="Nombre de la Evaluación" class="form-control">
                            </div>
                       
                         
                         <legend class="text-center header">Preguntas</legend><br>
                      
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="preg1" type="text" placeholder="Pregunta 1" class="form-control" required="required">
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <a href="#" onclick="agregarPregunta();">Agregar Pregunta</a>
                            </div>
                        
               
                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                           
                            <div class="col-xs-12 col-md-4">
                                <input id="lname" name="resp1[]" type="text" placeholder="Respuesta 1" class="form-control" required="required">
                                
                            </div>
                            <div class="col-xs-12 col-md-2">
                                <input id="lname" name="ponde1[]" type="text" placeholder="Ponderación" class="form-control" required="required">
                                
                            </div>
                             <div class="col-xs-12 col-md-12">
                               <div id="res">
                                <a href="#" onclick="agregarRespuesta();">Agregar Más Respuesas</a>
                               </div>
                            </div>
                             <div id="respuestas0"></div>
                              <div id="preguntas"></div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12 text-center">
                          <button type="submit" id="enviar" class="btn btn-primary btn-lg" onclick="return validar();">Crear Evaluación</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>