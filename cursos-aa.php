<?php 

include("config.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="nHrRStWkMH1mRyhmlAZh8I9JY1CDiWyNN03pp2UNkog" />
  <meta name="google-site-verification" content="nHrRStWkMH1mRyhmlAZh8I9JY1CDiWyNN03pp2UNkog" />
  <meta name="keywords" content="CIFcapacitacion, centro integral de formacion, tigre, pacheco, Mecanica dental, farmacia, asistente, salud, benavidez, talar,CIF, cif, cif capacitacion, argentina, buenos aires"
  />
  <meta name="description" content="En nuestro sitio encontraras todos los cursos que necesitas para construir tu futuro laboral."
  />
  <link rel="shortcut icon" href="ico/favicon.ico">
  <title>CIF Centro Integral de Formacion</title>
  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/cursos.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/gh/michalsnik/aos@2.1.1/dist/aos.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="components/pg.blocks/css/blocks.min.css">
  <link rel="stylesheet" href="components/pg.blocks/css/plugins.min.css">
  <link rel="stylesheet" href="components/pg.blocks/css/style-library-1.min.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
  <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>

  <?php include "./navs.php";?>

  <section id="curso-secretariado" data-aos="fade-down">
    <div id="clase-curso" class="container">
      <div class="top-content fade in active" id="tab1">
        <div class="text-left curso">
          <h3>Curso de Aire Acondicionado</h3>
        </div>
        <!-- Start Row -->
        <div class="row">
          <div class="col-sm-6">
            <div class="resumen">
              <p class="lead">
                El curso de reparación de Aire Acondicionado te ofrece una formación integral que te permitirá una rápida salida laboral,
                disponiendo de una capacitación que abarcará temas comunes a la reparación y mantenimientos de los distintos
                equipos de Aire Acondicionado.</p>
            </div>
            <div class="container fecha">
              <h3 class="oferta_fecha_texto">El curso comienza:</h3>
              <h3 class="oferta_fecha_fecha">
                <?php echo $fecha;?>
              </h3>
            </div>
            <div class="container">
              <h5 class="display-2 duracion-tiempo">Duracion 4 Meses</h5>
              <!--<p><em class="em">Una clase semanal de 2 1/2 horas</em></p> -->
            </div>
            <div class="row">

              <div class="col-sm-5 col-xs-12">
                <a href="contacto.php" class="btn btn-block btn-warning">
                  <span class="fa fa-check"></span> Consultanos</a>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-sm-offset-1">
            <img class="imagen-curso img-rounded img-responsive" src="images/AA.jpg" alt="Operador de Logistica">
          </div>
        </div>
        <br>
        <div class="container">
          <div class="row detalle">
            <div class="col-sm-5 col-xs-12">
              <div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="#temas" data-toggle="collapse" data-parent=".panel-group" class="panel-title">Teoria</a>
                    </h4>
                  </div>
                  <div id="temas" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul class="detalle2">

                        <li id="des_li">Electricidad: conceptos, distribución monofásica, unidades de medida, instrumental eléctrico, circuitos
                          y conexionado.</li>
                        <li id="des_li">Principios fundamentales de los equipos de refrigeración.</li>
                        <li id="des_li">Componentes básicos de refrigeración.</li>
                        <li id="des_li">Termodinámica , unidades , escalas de presión y temperatura.</li>
                        <li id="des_li">Descripción de las partes que componen un sistema de aire acondicionado, condensador, evaporador,
                          elementos de expansión, filtros, válvula inversora.</li>
                        <li id="des_li">Motocompresores, descripción de partes mecánicas y eléctricas.</li>
                        <li id="des_li">Fluidos refrigerantes, R22 y alternativos, particulares.</li>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-5 col-xs-12">
              <div class="panel-group3">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="#practica" data-toggle="collapse" data-parent=".panel-group3" class="panel-title">Practica</a>
                    </h4>
                  </div>
                  <div id="practica" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul class="detalle2">
                        <li id="des_li">Utilización del instrumental eléctrico.</li>
                        <li id="des_li">Distintas conexiones de circuitos eléctricos.</li>
                        <li id="des_li">Instalación de equipo de split (placa interior , ménsulas exterior).</li>
                        <li id="des_li">Armado de cañería de interconexiòn en equipo split.</li>
                        <li id="des_li">Unión de cañería por medio de soldadura.</li>
                        <li id="des_li">Unión de cañería con sistema de tuercas.</li>
                        <li id="des_li">Colocación de válvulas de servicios .</li>
                        <li id="des_li">Presurizaciòn del sistema.</li>
                        <li id="des_li">Uso de bomba de vacío.</li>
                        <li id="des_li">Control de presión , temperatura y consumo eléctrico del equipo.</li>
                        <li id="des_li">Interconexiòn eléctrica equipo split.</li>
                        <li id="des_li">Envasado de fluido refrigerante.</li>
                        <li id="des_li">Instalación de plaqueta universal y componentes.</li>
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
  </section>
  <!-- /.accordion -->
  <div class="col-md-5 col-md-offset-1 col-md-pull-1">
    <!-- /.accordion -->
  </div>
  <!-- /.column -->
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
              <p>Desarrollo de Talleres vocacionales para adquirir las herramientas necesarias para direccionar tu futura actividad
                laboral.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
              <div class="icon bg-finn">
                <span class="fa fa-edit"></span>
              </div>
              <h4>Diseño de Curriculum Vitae</h4>
              <p>Diseño y armado de un Curriculum Vitae atractivo para participar de futuras postulaciones a entrevistas laborales.</p>
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

    <!-- /.container -->
  </section>
  <footer>
    <section id="footer-detalle" class="content-block-nopad  footer-wrap-1-3" data-pg-collapsed>
      <div class="container footer-1-3">
        <div class="col-md-4 pull-left">
          <img src="images/logo-nuevo.png" class="logo-footer img-responsive">
          <ul class="social social-light">
            <li>
              <a href="https://www.facebook.com/cifcapacitacion/">
                <i class="fa fa-2x fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/cifcapacitacion">
                <i class="fa fa-2x fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="mailto:info@cifcapacitacion.com.ar">
                <i class="fa fa-2x fa-envelope-o"></i>
              </a>
            </li>
          </ul>

          <!-- /.social -->
        </div>
        <div class="col-md-3 pull-right direccion">
          <p class="footer-direccion">
            Av. Constituyentes 3399
            <br> General Pacheco
            <br> Tigre
            <br> Buenos Aires
            <br> CP 1617</p>
          </p>
          <p id="telefono-footer" class="address-bold-line">
            <i class="fa deepocean fa-phone"></i> +54 11 47265745 /46</p>
          <p id="telefono-footer" class="address-bold-line">
            <i class="fa deepocean fa-whatsapp"></i> +54 11 39137895</p>


        </div>
        <div class="col-xs-12 footer-text">

        </div>

        <!-- /.container -->
    </section>
  </footer>
  <?php include "./footer.php";?>
    <script src="./js/develop/cursos.js"></script>
</body>

</html>