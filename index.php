<!-- Include Header -->
<?php include "./header.php"; ?>
  <body>
  <!-- include nav -->
   <?php include "./navs.php"; ?>
    <div id="myCarousel" class="carousel slide"> 
        <!-- Navigation -->             
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel"> 
            <!-- Overlay -->                 
            <div class="overlay"></div>                 
            <!-- Indicators -->                 
            <ol class="carousel-indicators"> 
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>                     
                <li data-target="#bs-carousel" data-slide-to="1"></li>                     
                <li data-target="#bs-carousel" data-slide-to="2"></li>                     
                <li data-target="#bs-carousel" data-slide-to="3"></li>                     
                <li data-target="#bs-carousel" data-slide-to="4"></li>                     
                <li data-target="#bs-carousel" data-slide-to="5"></li>                     
            </ol>                 
            <!-- Wrapper for slides -->                 
            <div class="carousel-inner"> 
                <div class="item slides active"> 
                    <div class="slide-1"></div>                         
                    <div class="hero"> 
                        <hgroup> 
                            <h1>CIF</h1> 
                        </hgroup>                             
                        <button class="btn btn-hero btn-lg" role="button" onclick="window.location='institucional.php';">Conoce Mas</button>                             
                    </div>                         
                </div>                     
                <div class="item slides"> 
                    <div class="slide-2"></div>                         
                    <div class="hero"> 
                        <hgroup> 
                            <h1>Mecanica Dental</h1> 
                        </hgroup>                             
                        <button class="btn btn-hero btn-lg" role="button" onclick="window.location='cursos-salud.php#curso-mecanica';">Conoce Mas</button>                             
                    </div>                         
                </div>                     
                <div class="item slides"> 
                    <div class="slide-3"></div>                         
                    <div class="hero"> 
                        <hgroup> 
                            <h1>Asistente Dental</h1> 
                        </hgroup>                             
                        <button class="btn btn-hero btn-lg" role="button" onclick="window.location='cursos-salud.php#asistente-dental';">Conoce Mas</button>                             
                    </div>                         
                </div>                     
                <div class="item slides"> 
                    <div class="slide-4"></div>                         
                    <div class="hero"> 
                        <hgroup> 
                            <h1>Auxiliar de Farmacia</h1> 
                        </hgroup>                             
                        <button class="btn btn-hero btn-lg" role="button" onclick="window.location='cursos-salud.php#curso-auxiliar';">Conoce Mas</button>                             
                    </div>                         
                </div>                     
                <div class="item slides"> 
                    <div class="slide-5"></div>                         
                    <div class="hero"> 
                        <hgroup> 
                            <h1>Refrigeracion</h1> 
                        </hgroup>                             
                        <button class="btn btn-hero btn-lg" role="button" onclick="window.location='cursos-aa.php';">Conoce Mas</button>                             
                    </div>                         
                </div>                     
                <div class="item slides"> 
                    <div class="slide-6"></div>                         
                    <div class="hero"> 
                        <hgroup> 
                            <h1>Secretariado Administrativo</h1> 
                        </hgroup>                             
                        <button class="btn btn-hero btn-lg" role="button" onclick="window.location='cursos-administracion.php#curso-secretariado';">Conoce Mas</button>                             
                    </div>                         
                </div>                     
            </div>                 

            <a id="control-derecha" class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <a id="control-izquierda" class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

        </div>             
        
    </div>    


<!--Footer-->
<?php include "./footer.php"; ?>

<script>
    $('.carousel').carousel({
        interval: 4000 //changes the speed
    })
</script> 

</body>     
</html>