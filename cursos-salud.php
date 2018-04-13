<?php 

include("config.php");
?>

<!DOCTYPE html> 
<html lang="es" ""> 
<head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="google-site-verification" content="nHrRStWkMH1mRyhmlAZh8I9JY1CDiWyNN03pp2UNkog" /> 
    <meta name="google-site-verification" content="nHrRStWkMH1mRyhmlAZh8I9JY1CDiWyNN03pp2UNkog" /> 
    <meta name="keywords" content="CIFcapacitacion, centro integral de formacion, tigre, pacheco, Mecanica dental, farmacia, asistente, salud, benavidez, talar,CIF, cif, cif capacitacion, argentina, buenos aires" /> 
    <meta name="description" content="En nuestro sitio encontraras todos los cursos que necesitas para construir tu futuro laboral." /> 
    <link rel="shortcut icon" href="ico/favicon.ico"> 
    <title>CIF Centro Integral de Formacion</title>         
    <!-- Bootstrap core CSS -->         
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> 
    <!-- Custom styles for this template -->         
    <link href="css/cursos.css" rel="stylesheet"> 
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->         
    <link rel="stylesheet" href="components/pg.blocks/css/blocks.css"> 
    <link rel="stylesheet" href="components/pg.blocks/css/plugins.css"> 
    <link rel="stylesheet" href="components/pg.blocks/css/style-library-1.css"> 
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700"> 
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"> 
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
</head>     
<body> 
    <!-- Full Page Image Background Carousel Header -->         
    <header id="header-1" class="soft-scroll header-1"> 
        <nav class="main-nav navbar-fixed-top headroom headroom--pinned"> 
            <div class="container"> 
                <!-- Brand and toggle -->                     
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>                         
                    <a href="/"> 
                        <img id="logo-cabecera" href="/" src="images/logo-header.png"class="brand-img img-responsive" alt="Logo CIF capacitacion"> 
                    </a>                         
                </div>                     
                <!-- Navigation -->                     
                <div class="collapse navbar-collapse"> 
                    <ul class="nav navbar-nav navbar-right"> 
                        <li class="nav-item"> 
                            <a href="index.php">Inicio</a> 
                        </li>                             
                        <li class="nav-item"> 
                            <a target="_self" href="institucional.php">Institucional</a> 
                        </li>                             
                        <li id="cursos" class="nav-item dropdown"> 
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Cursos <i class="fa fa-angle-down"></i></a> 
                            <ul class="dropdown-menu"> 
                                <li class="dropdown-submenu"> 
                                    <a href="cursos-salud.php">Salud</a> 
                                </li>                                     
                                                                  
                                <li> 
                                    <a href="cursos-administracion.php">Administracion</a> 
                                </li> 
                                <li> 
                                    <a href="cursos-aa.php">Refrigeración</a> 
                                </li> 
                            </ul>                                 
                        </li>                             
                        <!--//dropdown-->                             
                        <li id="contacto" class="nav-item dropdown"> 
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Contacto <i class="fa fa-angle-down"></i></a> 
                            <ul class="dropdown-menu"> 
                                <li class="dropdown-submenu"> 
                                    <a href="contacto.php">Dejanos un Mensaje</a> 
                                </li>                                     
                                <li class="dropdown-submenu"> 
                                    <a href="contacto.php#locacion">Ubicacion</a> 
                                </li>                                     
                            </ul>                                 
                        </li>                             
                    </ul>                         
                    <!--//nav-->                         
                </div>                     
                <!--// End Navigation -->                     
            </div>                 
            <!--// End Container -->                 
        </nav>             
    </header> 

       <!--<section id="curso-mecanica-avanzado" data-aos="fade-down"> 

        <div id="clase-curso" class="container"> 

            <div class="top-content" id="tab2"> 
                <div class="text-left curso"> 
                    <h3>Capacitación para Asistentes Dentales</h3> 
                </div>                     
                <div class="row"> 
                    <div class="col-sm-6"> 
                        <div class="resumen"> 
                            <p class="lead"> 
                             Se profundiza en Implantologìa oral - Cirugía prótesis implanto asistida.
En la Cirugía oral es fundamental la preparación del gabinete dental y del paciente , cuidando la asepsia , desinfección y aislamiento estéril del campo operatorio.</p> 
                         </div>  
                         <div class="container fecha">
                             <h3 class="oferta_fecha_texto">El curso comienza:</h3> 
                             <h3 class="oferta_fecha_fecha">3/06</h3>  
                         </div>                           
                         
                        <div class="container"> 
                            <h5 class="display-2 duracion-tiempo">Duracion 12 clases</h5> 
                            <p><em class="em">Una clase semanal de 2 horas</em></p> 
                        </div>

                        <div class="row"> 
                            <div class="col-sm-5 col-xs-12"> 
                                <a href="contacto.php" class="btn btn-block btn-warning"><span class="fa fa-check"></span> Consultanos</a> 
                            </div>                                 
                        </div>                             
                    </div>                         
                    <div class="col-sm-5 col-sm-offset-1">

                        
                          <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>
                              <li data-target="#myCarousel" data-slide-to="4"></li>
                          </ol>

                          <div class="carousel-inner" role="listbox">

                               <div class="item active">
                                <img class="imagen-curso img-rounded img-responsive" src="images/mecanica-dental-avanzado/1.jpg" alt="Mecanica Dental">
                            </div>

                            <div class="item">
                            <img class="imagen-curso img-rounded img-responsive" src="images/mecanica-dental-avanzado/2.jpg" alt="Mecanica Dental">

                            </div>

                            <div class="item">
                                <img class="imagen-curso img-rounded img-responsive" src="images/mecanica-dental-avanzado/3.jpg" alt="Mecanica Dental">

                            </div>

                            <div class="item">
                                <img class="imagen-curso img-rounded img-responsive" src="images/mecanica-dental-avanzado/4.jpg" alt="Mecanica Dental">

                            </div>
                            <div class="item">
                                <img class="imagen-curso img-rounded img-responsive" src="images/mecanica-dental-avanzado/5.jpg" alt="Mecanica Dental">

                            </div>
                           

                        </div>

                    </div>
                

                <img class="imagen-curso img-rounded img-responsive" src="images/mecanica.png" alt="Mecanica Dental">
            </div>                         
        </div>
        <br>
       
</div>
</div> 
</section>-->  

    <section id="curso-mecanica" data-aos="fade-down"> 

        <div id="clase-curso" class="container"> 

            <div class="top-content" id="tab2"> 
                <div class="text-left curso"> 
                    <h3>Curso de Mecanica Dental</h3> 
                </div>                     
                <!-- Start Row -->                     
                <div class="row"> 
                    <div class="col-sm-6"> 
                        <div class="resumen"> 
                            <p class="lead"> 
                             La actividad del Mecánico dental es colaborar estrechamente con el odontólogo en la confección de prótesis dentales, con gran capacidad técnica y formación científica. El egresado logra insertarse en el medio laboral conformando un equipo de trabajo con el odontólogo, confeccionando las prótesis que el odontólogo planifica, diseña e instala en la boca del paciente, cumpliendo la función de auxiliar del mismo.</p> 
                         </div>  
                         <div class="container fecha">
                             <h3 class="oferta_fecha_inscripcion">Inscripciones Abiertas todo el <strong>AÑO</strong></h3> 
                         </div>                           
                         
                        <div class="container"> 
                            <h5 class="display-2 duracion-tiempo">Duracion 24 meses</h5> 
                            <p><em class="em">Una clase semanal de 2 1/2 horas</em></p> 
                        </div>

                        <div class="row"> 
                            <div class="col-sm-5 col-xs-12"> 
                                <a href="contacto.php" class="btn btn-block btn-warning"><span class="fa fa-check"></span> Consultanos</a> 
                            </div>                                 
                        </div>                             
                    </div>                         
                    <div class="col-sm-5 col-sm-offset-1">

                        
                          <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">

                               <div class="item active">
                                <img class="imagen-curso img-rounded img-responsive" src="images/mecanica.png" alt="Mecanica Dental">
                            </div>

                            <div class="item">
                            <img class="imagen-curso img-rounded img-responsive" src="images/mecanica-dental/mecanica1.jpg" alt="Mecanica Dental">

                            </div>

                            <div class="item">
                                <img class="imagen-curso img-rounded img-responsive" src="images/mecanica-dental/mecanica2.jpg" alt="Mecanica Dental">

                            </div>

                            <div class="item">
                                <img class="imagen-curso img-rounded img-responsive" src="images/mecanica-dental/mecanica3.jpg" alt="Mecanica Dental">

                            </div>
                           

                        </div>

                        <!-- Left and right controls -->

                    </div>
                

                <!--<img class="imagen-curso img-rounded img-responsive" src="images/mecanica.png" alt="Mecanica Dental"> -->
            </div>                         
        </div>
        <br>
        <div class="container">
            <div class="row detalle">
                <div class="col-sm-5 col-xs-12">
                    <div class="panel-mecanica">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#temas-mecanica" data-toggle="collapse" data-parent=".panel-mecanica" class="panel-title">Contenido del Curso</a></h4>
                            </div>
                            <div id="temas-mecanica" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="detalle2">


                                        <li id="des_li">Anatomía</li>                                                     
                                        <li id="des_li">Oclusión</li>                                                    
                                        <li id="des_li">Materiales Dentales</li>                                                     
                                        <li id="des_li">Prótesis Removible de acrílico</li>                                                     
                                        <li id="des_li">Completas y parciales</li>                                                     
                                        <li id="des_li">Cromo cobalto</li>                                                     
                                        <li id="des_li">Prótesis Flexibles
(poliamidas distintas densidades)</li>                                                     
                                        <li id="des_li">Implantes</li>                                                     
                                        <li id="des_li">Cerámica: estratificación standard</li>                                                     
                                        <li id="des_li">Ortopedia (Nociones básicas)</li>                                                     
                                                                                             
                                    </ul>                                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row detalle">
                        <div class="col-sm-5 col-xs-12">
                            <div class="panel-mecanica-egresado">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#egresado-mecanica" data-toggle="collapse" data-parent=".panel-mecanica-egresado">Perfil del Egresado</a></h4>
                                    </div>
                                    <div id="egresado-mecanica" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="detalle2"> 
                                                <li> Importancia del trabajo en Equipo dentro de un Laboratorio Dental</li>

                                                <li>Conocimientos Anatomía Dentaria (vocabulario específico)</li>

                                                <li> Elaboración y reparación de Prótesis Dentales</li>

                                                <li> Toma de impresiones (cubetas)</li>

                                                <li> Desarrollo motricidad fina (utilización del instrumental)</li>

                                                <li> Confección de aparatos de Ortopedia</li>

                                                <li> Conocimiento de los procesos de trabajo, en el uso de Hornos para metales y cerámica</li>

                                                <li> Técnica Prótesis Flexible (maquina Digital)</li>                                                     
                                            </ul>                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
</section>        

<section id="asistente-dental"> 
    <div id="clase-curso" class="container" data-aos="fade-down"> 
        <div class="top-content fade in active" id="tab1"> 
            <div class="text-left curso"> 
                <h3>Curso de Asistente Dental</h3> 
            </div>                     
            <!-- Start Row -->                     
            <div class="row"> 
                <div class="col-sm-6"> 
                    <div class="resumen"> 
                        <p class="lead"> 
                         Los asistentes dentales se ven a menudo como miembros fundamentales de un equipo dental, sumando su conocimiento y aptitudes para el trabajo en conjunto con el odontologo y el personal administrativo</p> 
                     </div>                             
                     <div class="container fecha"> 
                        <h3 class="oferta_fecha_texto">El curso comienza:</h3> 
                        <h3 class="oferta_fecha_fecha"><?php echo $fecha;?></h3> 
                    </div>                             
                    <div class="container"> 
                        <h5 class="display-2 duracion-tiempo">Duracion 6 Meses</h5> 
                        <p><em class="em">Una clase semanal de 2 1/2 horas</em></p> 
                    </div>                             
                    <div class="row"> 
                        <div class="col-sm-5 col-xs-12"> 
                            <a href="contacto.php" class="btn btn-block btn-warning"><span class="fa fa-check"></span> Consultanos</a> 
                        </div>                                 
                    </div>                             
                </div>                         
                <div class="col-sm-5 col-sm-offset-1"> 
                    <img class="imagen-curso img-rounded img-responsive" src="images/asistente-dental.png" alt="Asistente Dental"> 
                </div>                         
            </div>
            <br>
            <div class="container">
                <div class="row detalle">
                    <div class="col-sm-5 col-xs-12">
                        <div class="panel-asistente">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#temas" data-toggle="collapse" data-parent=".panel-asistente" class="panel-title">Contenido del Curso</a></h4>
                                </div>
                                <div id="temas" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="detalle2"> 
                                            <li id="des_li">Papel del Asistente</li>
                                            <li id="des_li">Materiales  Dentales</li>
                                            <li id="des_li">Bioseguridad y Esterilización</li>
                                            <li id="des_li">Operatoria dental</li>
                                            <li id="des_li">Radiología</li>
                                            <li id="des_li">Endodoncia</li>
                                            <li id="des_li">Periodoncia</li>  
                                            <li id="des_li">Implantología</li>
                                            <li id="des_li">Ortodoncia - Nociones básicas</li>
                                        </ul>                                                 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row detalle">
                            <div class="col-sm-5 col-xs-12">
                                <div class="panel-asistente-egresado">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="#egresado" data-toggle="collapse" data-parent=".panel-asistente-egresado">Perfil del Egresado</a></h4>
                                        </div>
                                        <div id="egresado" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class="detalle2"> 
                                                    <li>Conocimiento del Instrumental de Trabajo</li>                                                     
                                                    <li>Confeccion de Ficha Odontologica</li>                                                     
                                                    <li>Conocimientos de Anatomía Dental</li>                                                     
                                                    <li>Procesos de Esterilizacion</li>                                                     
                                                </ul>                                                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
</section>



<section id="curso-auxiliar"> 
    <div id="clase-curso" class="container" data-aos="fade-down"> 
        <div class="top-content fade in active" id="tab2"> 
            <div class="text-left curso"> 
                <h3>Auxiliar de Farmacia</h3> 
            </div>                     
            <!-- Start Row -->                     
            <div class="row"> 
                <div class="col-sm-6"> 
                    <div class="resumen"> 
                        <p class="lead"> 
                         Los auxiliares de farmacia trabajan como parte de un equipo de farmacia bajo la dirección de un farmacéutico registrado. Usted será responsable de tratar con los clientes, la reposición de la farmacia, la tipificación de recetas, y otras tareas de oficina</p> 
                     </div>                             
                     <div class="container fecha"> 
                        <h3 class="oferta_fecha_texto">El curso comienza:</h3> 
                        <h3 class="oferta_fecha_fecha"><?php echo $fecha;?></h3> 
                    </div>                             
                    <div class="container"> 
                        <h5 class="display-2 duracion-tiempo">Duracion 6 Meses</h5> 
                        <p><em class="em">Una clase semanal de 2 1/2 horas</em></p> 
                    </div>                             
                    <div class="row"> 
                        <div class="col-sm-5 col-xs-12"> 
                            <a href="contacto.php" class="btn btn-block btn-warning"><span class="fa fa-check"></span> Consultanos</a> 
                        </div>                                 
                    </div>                             
                </div>                         
                <div class="col-sm-5 col-sm-offset-1"> 
                    <img class="imagen-curso img-rounded img-responsive" src="images/auxiliar.png" alt="Auxiliar de Farmacia"> 
                </div>                         
            </div>
            <br>
            <div class="container">
                <div class="row detalle">
                    <div class="col-sm-5 col-xs-12">
                        <div class="panel-farmacia">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#temas-aux_farmacia" data-toggle="collapse" data-parent=".panel-farmacia" class="panel-title">Contenido del Curso</a></h4>
                                </div>
                                <div id="temas-aux_farmacia" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="detalle2"> 

                                           <li id="des_li">La industria de Medicamentos en números.</li>
                                           <li id="des_li">Auxiliar de Farmacia sus funciones.</li>
                                           <li id="des_li">Entidades Prestadoras de servicios (O.Sociales - Prepagas).</li>
                                           <li id="des_li">Farmacias sistema de Guardias.</li>
                                           <li id="des_li">APM / APF.</li>
                                           <li id="des_li">Técnicas de Ventas.</li> 
                                           <li id="des_li">Medicamentos Genéricos.</li>
                                           <li id="des_li">Fito Medicamentos.</li>
                                           <li id="des_li">Recetas.</li>
                                           <li id="des_li">Seguridad de los Fármacos.</li>
                                           <li id="des_li">Vías de Administración.</li>
                                           <li id="des_li">Formas Farmacéuticas.</li>
                                           <li id="des_li">Nuevas Medicinas.</li>
                                           <li id="des_li">Vacunas.</li>
                                           <li id="des_li">Calendario de Vacunación Obligatorio.</li>
                                           <li id="des_li">Confección de Curriculum Vitae.</li>
                                           <li id="des_li">Entrevista Laboral.</li>                                                     
                                       </ul>                                                 
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="container">
                    <div class="row detalle">
                        <div class="col-sm-5 col-xs-12">
                            <div class="panel-farmacia-egresado">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#egresado-farmacia" data-toggle="collapse" data-parent=".panel-farmacia-egresado">Perfil del Egresado</a></h4>
                                    </div>
                                    <div id="egresado-farmacia" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="detalle2"> 
                                                <li> Importancia del trabajo en Equipo dentro de un Laboratorio Dental</li>

                                                <li>Conocimientos Anatomía Dentaria (vocabulario específico)</li>

                                                <li> Elaboración y reparación de Prótesis Dentales</li>

                                                <li> Toma de impresiones (cubetas)</li>

                                                <li> Desarrollo motricidad fina (utilización del instrumental)</li>

                                                <li> Confección de aparatos de Ortopedia</li>

                                                <li> Conocimiento de los procesos de trabajo, en el uso de Hornos para metales y cerámica</li>

                                                <li> Técnica Prótesis Flexible (maquina Digital)</li>                                                     
                                            </ul>                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
</section>


<section id="content-1-3" class="content-block content-1-3"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-12"> 
                <div class="underlined-title" data-aos="fade-down" data-aos-duration="500"> 
                    <h1> 
                      Nuestro Valor Agregado</h1> 
                      <h3>Durante el desarrollo de nuestros cursos, los alumnos contaran con las siguientes herramientas</h3> 
                      <hr> 
                  </div>                 
                  <div class="services-wrapper"> 
                    <div class="col-md-4" data-aos="fade-left" data-aos-duration="850"> 
                        <div class="icon bg-crete"> 
                            <span class="fa fa-user"></span> 
                        </div>                         
                        <h4>Talleres Motivacionales</h4> 
                        <p>Desarrollo de Talleres vocacionales para adquirir las herramientas necesarias para direccionar tu futura actividad laboral.</p> 
                    </div>                     
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000"> 
                        <div class="icon bg-finn"> 
                            <span class="fa fa-edit"></span> 
                        </div>                         
                        <h4>Diseño de Curriculum Vitae</h4> 
                        <p>Diseño y armado de un Curriculum Vitae atractivo  para participar de futuras  postulaciones a entrevistas laborales.</p> 
                    </div>                     
                    <div class="col-md-4" data-aos="fade-right" data-aos-duration="1200"> 
                        <div class="icon bg-sunflower"> 
                            <span class="fa fa-suitcase"></span> 
                        </div>                         
                        <h4>Tutoria Durante el Proceso de Busqueda Laboral</h4> 
                        <p>Como y en que medios realizarla. Como direccionar la busqueda para obtener resultados positivos.</p> 
                    </div>                     
                </div>                 
            </div>                      
        </div>             
    </div>         
    <!-- /.row -->         
</div>     
</section> 
<footer>
    <section id="footer-detalle" class="content-block-nopad  footer-wrap-1-3" data-pg-collapsed>
        <div class="container footer-1-3">
            <div class="col-md-4 pull-left">
                <img src="images/logo-nuevo.png" class="logo-footer img-responsive">
                <ul class="social social-light">
                    <li>
                        <a href="https://www.facebook.com/cifcapacitacion/"><i class="fa fa-2x fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/cifcapacitacion"><i class="fa fa-2x fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="mailto:info@cifcapacitacion.com.ar"><i class="fa fa-2x fa-envelope-o"></i></a>
                    </li>
                </ul>

                <!-- /.social -->
            </div>
            <div class="col-md-3 pull-right direccion">
                <p class="footer-direccion">Av. Constituyentes 3399<br>

                    General Pacheco<br>
                    Tigre<br>
                    Buenos Aires<br>
                    CP 1617</p>
                </p>
                <p id="telefono-footer" class="address-bold-line"><i class="fa deepocean fa-phone"></i>  +54 11 47265745 /46</p>
                <p id="telefono-footer" class="address-bold-line"><i class="fa deepocean fa-whatsapp"></i>  +54 11 39137895</p>

            </div>
            <div class="col-xs-12 footer-text">

            </div>

            <!-- /.container -->
        </section>
    </footer>

    
    <script src="assets/js/jquery.min.js"></script> 
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script> 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script> 
    <!--<script type="text/javascript" src="components/pg.blocks/js/plugins.js"></script> 
    <script type="text/javascript" src="components/pg.blocks/js/bskit-scripts.js"></script>-->
    <script type="text/javascript">
       $('#cursos nav-item dropdown').addClass('active');
   </script>
   <script type="text/javascript">
       $(document).ready(function(){
        $("#myCarousel").carousel({interval: 3000});
       })
   </script>
           <script>
            
            AOS.init({
              offset: 200,
              duration: 600,
              easing: 'ease-in-sine',
              delay: 100,
            });
  </script>


</section>
</body>
</html>
