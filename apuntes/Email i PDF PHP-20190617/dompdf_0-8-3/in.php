<?php 
    require_once("dompdf/dompdf_config.inc.php");
    session_start();
                    if($_POST){
                        $empresa= $_POST["empresa"];
                        $fechaent= $_POST["fechaent"];
                        $horaent= $_POST["hentrada"];
                        $tecnico= $_POST["tecnico"];
                        $horasal= $_POST["hsalida"];
                        $rvisita= $_POST["razonvisita"];
                        $comentarios= $_POST["comentarios"];
                        $trabajor= $_POST["trabajorealizado"];
                    }
                    $codigoHTML='
                              <!DOCTYPE html>
                              <html lang="es">
                                <head>
                                    <meta charset="UTF-8">
                                    <title>Formulario de Visita</title>
                                    <link rel="Stylesheet" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css"> 
                                     <style>
                                       #wrap { margin:10px auto; width:600px; font-family:sans-serif; color:#000000; cursor:default; background-color:#eee;}
                                       h1 { font-size:40px; text-align:center; font-weight:bold; margin-bottom:10px; text-shadow:0 0 3px #ddd; }
                                       h2 { font-size:15px; text-align:left; font-weight:bold; margin-bottom:10px; }
                                       h3 { font-size:20px; text-align:left; font-weight:bold; margin-bottom:10px; text-shadow:0 0 3px #ddd; }
                                       pre {background-color:#eee; font-family:Arial; margin-left:50px; margin-right:50px;}
                                       p.demo { background-color:orange; width:100px; margin:10px 0; font-family:Arial; }
                                     </style>
                                </head>
                                <body>
                                    <div class="form-group" id="wrap">
                                                    <legend><img src="img/1.png" width="auto" height="65" alt="Imagen Electrónica" /></legend>
                                         <hr>           
                                         <!-- Información Formulario -->
                                                    <h3>Información del Formulario</h3>
                                                    <pre style="white-space:normal">
                                                    <div class="form-group">
                                                            <form>
                                                            <b>Nombre de la Empresa: </b>
                                                            <br>'
                                                            ;$codigoHTML.=''."$empresa".'';$codigoHTML.=' 
                                                            </form>

                                                  </div>
                                                  </pre>
                                        <hr>

                                      <!-- Información Entrada -->
                                  <h3>Información Entrada</h3>
                                      <pre style="white-space:normal">  
                                            <div class="form-group">
                                                                <form>
                                                                <b>Fecha de Entrada:&nbsp;</b>';$codigoHTML.=''."$fechaent".'';$codigoHTML.='
                                                                </form>
                                                                <br>
                                                                <form>
                                                                <b>Hora de Entrada:&nbsp;&nbsp;&nbsp;</b>';$codigoHTML.=''."$horaent".'';$codigoHTML.='
                                                                </form>
                                                                <br>
                                                                <form>
                                                                <b>Tecnico asignado:&nbsp;</b>';$codigoHTML.=''."$tecnico".'';$codigoHTML.='
                                                                </form>
                                            </div>
                                    </pre>  
                                    <hr>

              <!-- Información Salida -->
                              <h3>Información Salida</h3>
                              <pre style="white-space:normal">  
                              <div class="form-group">
                                                                <form>
                                                                <b>Hora de Salida:&nbsp;</b>';$codigoHTML.=''."$horasal".'';$codigoHTML.='
                                                                </form>
                                                                <br>
                                                                <form>
                                                                <b>Razón de la Visita:&nbsp;&nbsp;&nbsp;</b>';$codigoHTML.=''."$rvisita".'';$codigoHTML.='
                                                                </form>
                                                                <br>
                                                                <form>
                                                                <b>Trabajo Realizado:&nbsp;</b>';$codigoHTML.=''."$trabajor".'';$codigoHTML.='
                                                                </form>
                                                                <br>
                                                                <form>
                                                                <b>Comentarios:&nbsp;</b>';$codigoHTML.=''."$comentarios".'';$codigoHTML.='
                                                                </form>
                                            </div>
                                            <div class="form-group">
                                  <label class="col-md-4 control-label">Firma 1</label>
                                  <div class="col-md-4 selectContainer col-lg-3">
                                      <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                                          <script src="js/sign.js" name="firma1"></script>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Firma 2</label>
                                  <div class="col-md-4 selectContainer col-lg-3">
                                      <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                                          <script src="js/sign.js" name="firma2"></script>
                                      </div>
                                  </div>
                              </div>
                                    </pre>


                              <script src="js/index.js"></script>
                          </fieldset>
                      </form>
                  </div>
              </div>
              <!-- /.container -->
              <script src="js/jquery.min.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/bootstrapvalidator.min.js"></script>
              <script src="js/index.js"></script>
          </body>
        </html>';
$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream($tecnico."-".$fechaent.".pdf");
?>