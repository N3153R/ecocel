<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/LOGO/LOGO.jpg" type="image/x-icon">
    <title>Search</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/search.css">
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/cards.css">

    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
      <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
        <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
             alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
      </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header>
      <div class="container top-sect">

        <div class="navbar-header" align="center">
          <h1 class="" align="center">

            <a href="index.html"> <img src="images/LOGO/logo2.png" > </a>

            <br>
            <a style="font-size: 40px;font-family: 'Monotype Corsiva';text-shadow: -5px -5px 5px #080808; color: #cccccc" data-type='rd-navbar-brand' href="index.html">ECOCEL S.A.C<small style="font-size: 17px;font-family: 'Monotype Corsiva';text-shadow: -5px -5px 5px #080808; color: #cccccc">Soluciones Ambientales</small>
            </a>
          </h1>
          <a class="search-form_toggle" href="#"></a>

        </div>

<!--        <div class="help-box text-right" style="text-shadow: -5px -5px 5px #aaa; color: #dbdbdb">-->
<!--          <p>Necesitas Ayuda?</p>-->
<!--          <a href="callto:#">986-058-157</a>-->
<!--          <small style="color: #dbdbdb"><span style="color: #dbdbdb">Horario:</span>  Lunes -&nbsp;Viernes</small>-->
<!---->
<!--        </div>-->
      </div>

      <div id="stuck_container" class="stuck_container">
        <div class="container">
          <nav class="navbar navbar-default navbar-static-top pull-left">

            <div class="">
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li class="">
                  <a href="./">INICIO</a>
                </li>
                <li>
                  <a href="nosotros.html">NOSOTROS</a>
                </li>
                  <li class="dropdown">
                      <a href="servicios.html">SERVICIOS<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="S-Consultoria.html">Consultoría Socio Ambiental
                              </a>
                          </li>
                          <li>
                              <a href="S-FormalizacionMinera.html">Formalización Minera
                              </a>
                          </li>
                          <li>
                              <a href="S-Pacri.html">Liberación del Derecho de Vía – PACRI
                              </a>
                          </li>
                      </ul>
                  </li>


                  <li>
                  <a href="contactanos.html">CONTACTANOS</a>
                </li>
              </ul>
            </div>
          </nav>
          <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
            <label class="search-form_label">
              <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
              <span class="search-form_liveout"></span>
            </label>
            <button class="search-form_submit fa-search" type="submit"></button>
          </form>

        </div>

      </div>
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->

    <section id="content" class="content well">
        <div class="container">
            <h2 class="offs5">Resultados de búsqueda</h2>
            <div id="search-results"></div>
        </div>
    </section>

    <!--========================================================
                              FOOTER
    =========================================================-->
      <section class="">

          <div class="fh5co-footer-style-3">
              <div class="container">
                  <div class="row p-b">
                      <div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="0.6s" data-wow-delay=".5s">
                          <div class="fh5co-logo"><span class="logo" ><img src="images/LOGO/footer.png" alt=""></span> ECOCEL S.A.C</div>
                          <p class="fh5co-copyright">&copy; 2017. All Rights Reserved.
                              <!--<br>Contact <a target="_blank" href="https://www.facebook.com/N3153R.Rodriguez">986 058 157</a> <br>-->
                          </p>
                      </div>
                      <div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="0.6s" data-wow-delay=".8s">
                          <h3>Servicios</h3>
                          <ul class="fh5co-links">
                              <li><a href="S-Consultoria.html">Consultoría Socio Ambiental</a></li>
                              <li><a href="S-FormalizacionMinera.html">Formalizacíon Minera</a></li>
                              <li><a href="S-Pacri.html">Liberación de Derecho de Vía</a></li>
                          </ul>
                      </div>
                      <div class="clearfix visible-sm-block"></div>
                      <div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.1s">
                          <h3>Redes Sociales</h3>
                          <ul class="fh5co-links fh5co-social">
                              <li><a target="_blank" href="https://www.facebook.com/Ecocel-Soluciones-Ambientales-Sac-1742287869401631/"><i class="icon icon-facebook2"></i> Facebook</a></li>
                              <!--<li><a target="_blank" href="https://www.facebook.com/ecocel.sac.1"><i class="icon icon-twitter"></i> Twitter</a></li>-->
                              <li><a target="_blank" href="https://www.linkedin.com/in/ecocel-sac-484440146/"><i class="icon icon-linkedin"></i> Linkedin</a></li>
                              <!--<li><a target="_blank" href="https://www.facebook.com/ecocel.sac.1"><i class="icon icon-instagram"></i> Instagram</a></li>-->
                          </ul>
                      </div>
                      <div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.4s">
                          <h3>Nosotros</h3>
                          <p>Somos un equipo que conectamos necesidades con soluciones!. Nos sentimos el aliado estratégico que brinda soluciones integrales...  </p>
                          <br>
                          <p><a href="nosotros.html" class="btn btn-success btn-sm btn-outline">Leer más</a></p>
                      </div>
                      <div class="clearfix visible-sm-block"></div>


                      <!--<br>Designed by <a target="_blank" href="https://www.facebook.com/N3153R.Rodriguez">Neiser Rodriguez</a>-->

                  </div>
                  <!--<div class="row fh5co-made">-->
                  <!--<div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">-->
                  <!--<p>By <i class="heart icon-arrow-up"></i> Neiser Rodriguez</p>-->
                  <!--</div>-->
                  <!--</div>-->
              </div>
          </div>

      </section>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>
  <!-- </script> -->


  </body>
</html>
