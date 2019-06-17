<!DOCTYPE html>
  <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Visita</title>
        <script src="js/modernizr.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        
        <!--<link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='css/bootstrap-theme.min.css'>
        <link rel='stylesheet prefetch' href='css/bootstrapValidator.min.css'>
        <link rel="stylesheet" href="css/style.css">-->
    </head>
    <body>
        <div class="form-group" id="section-to-print">
            <div class="container">

                <form class="well form-horizontal"  method="post" id="in.php">
                    <fieldset>
                        <legend><img src="img/1.png" width="auto" height="65" alt="Imagen Electrónica" /></legend>
             <!-- Información Formulario -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Información del Formulario</label>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombre y dirección del Cliente</label>
                            <div class="col-md-4 inputGroupContainer col-lg-7">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <select name="empresa" class="form-control selectpicker">
                                      <option value=" ">Seleccione el cliente de esta lista</option>

                                      <?php
                                       $consulta=mysql_query("SELECT * FROM clientes");
                                       while($dato=mysql_fetch_array($consulta)){

                                      ?>
                                        <option><?php echo $dato["Nombre"].', '.$dato["direccion"]; ?></option>
                                        <?php
                                      }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
            <!-- Información Entrada -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Información - Entrada</label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Fecha</label>
                            <div class="col-md-4 inputGroupContainer col-lg-2 col-lg-offset-0">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input name="fechaent" class="form-control" type="date">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Hora</label>
                            <div class="col-md-4 inputGroupContainer col-lg-2">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input class="hentrada" id="event_start_time" name="event[start_time]" type="time" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Técnico</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="tecnico" placeholder="Correo del Técnico" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
        <!-- Información Salida -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">Información - Salida</label>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Hora Salida</label>
                            <div class="col-md-4 inputGroupContainer col-lg-2">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input class="hsalida" id="event_start_time" name="event[end_time]" type="time" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Razón de la Visita</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <textarea class="form-control" name="razonvisita" placeholder="Describa el objetivo del cliente con su visita acá"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Trabajo Realizado</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <textarea class="form-control" name="trabajorealizado" placeholder="Describa el trabajo que realizó durante la visita."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Comentarios</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <textarea class="form-control" name="comentarios" placeholder=""></textarea>
                                </div>
                            </div>
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

                        <script src="js/index.js"></script>

                        <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning" id="print" action="print_pdf.php" name="crear"> Enviar (PDF) <span class="glyphicon glyphicon-edit"></span></button>
                            <button type="submit" class="btn btn-warning" name='submit' value='submit'> Enviar (XML) <span class="glyphicon glyphicon-save"></span></button>
                        </div>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- /.container -->
        <script src='js/jquery.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/bootstrapvalidator.min.js'></script>
        <script src="js/index.js"></script>
    </body>
  </html>