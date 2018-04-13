<?php

session_start();

include ("../funciones/funciones.php");


?>


<!DOCTYPE html>
<html lang="en" style="height:100%;">
<title>Registro Consulta</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="pinegrow, blocks, bootstrap" />
    <meta name="description" content="My new website" />
    <!-- Core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet">
    <!-- Style Library -->
    <link href="../css/style-library-1.css" rel="stylesheet">
    <link href="../css/plugins.css" rel="stylesheet">
    <link href="../css/style_login.css" rel="stylesheet">
    <link href="../css/blocks.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
    
    <link href="../css/style_login.css" rel="stylesheet" type="text/css">
    
    </head>
    <body data-spy="scroll" data-target="nav">

    <p><?php echo $_SESSION['usr_name'] ?></p>
    
        <section class="content-block content-1-8">

            <h1 class="text-center">Registro Consulta<br></h1>


            <div class="container">
                <ul class="nav nav-tabs text-center" role="tablist" id="myTab">
                    <li class="active">
                        <a href="#tab-1234" role="tab" data-toggle="tab" id="tab-inicio">Inicio</a>
                    </li>
                    <li>
                        <a href="#tab2" role="tab" data-toggle="tab" id="tab-nuevor">Nuevo Registro</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-1234">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Buscar" id="field-search">

                                    </div>
                                    <button type="submit" id="field-boton" class="btn btn-default">Buscar</button>

                                </form>
                            </nav>
                            <h4>Ultimas 5 consultas</h4>
                            <table class="table" id="jsondata">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Tipo de Consulta</th>
                                        <th>Resumen Consulta</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>

                            </table>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                                </div>
                                <!-- /.col -->
                            </div>
                            <table class="pg-empty-placeholder"></table>
                            <!-- /.row -->
                        </div>
                        <!-- /#tab1 -->
                        <div class="tab-pane fade" id="tab2">
                            <form id="form-alta-consulta">
                                <div class="form-group">
                                    <label class="control-label" for="formInput1401">Nombre</label>
                                    <input type="text" id="Inputname" class="form-control" placeholder="Nombre" required autofocus>
                                    <p id="error_input_name"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="formInput506">Apellido</label>
                                    <input type="text" id="Inputlastn" class="form-control" placeholder="Apellido" required autofocus>
                                    <p id="error_input_lastn"></p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="formInput484">Tipo proceso legal</label>
                                    <select id="field-nombre" class="form-control">
                                       <?php tipo_consulta();?>   
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="formInput468">Telefono</label>
                                <input type="text" id="Inputtel" class="form-control" placeholder="Telefono">
                                <p id="error_input_tel"></p>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="formInput493">Correo</label>
                                <input type="text" id="Inputcorreo" class="form-control" placeholder="Correo">
                                <p id="error_input_correo"></p>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="formInput468">Resumen Consulta</label>
                                <input type="text" id="Inputtel" class="form-control" placeholder="Resumen de la Consulta">
                                <p id="error_input_resumen"></p>
                            </div>
                            
                            <div class="form-group" id="field-resumen">
                                <label class="control-label" for="formInput509">Desarrollo Consulta</label>
                                <textarea class="form-control" rows="3" id="formInput509" placeholder="Desarrollo de la Consulta"></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-signin" id="btn-ok" onclick="archivo_guardado()">Guardar</button>
                            <button type="button" class="btn btn-lg btn-primary btn-signin" id="btn-cancelar">Cancelar</button>
                        </form>
                    </div>
                    <div id='response'></div>
                </div>
            
            </div>
            
        </section>        

        <script type="text/javascript" src="../js/login.js"></script>
        <script type="text/javascript" src="../js/consulta.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/plugins.js"></script>
        <script type="text/javascript" src="../js/bskit-scripts.js"></script>
    </body>
    </html>


