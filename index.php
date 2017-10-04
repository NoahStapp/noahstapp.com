<?php include('perch/runtime.php');?>
<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Noah Stapp &#151; Web Development &amp; Consulting</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Raleway|Poiret+One|Lato|Open+Sans|Work+Sans|Rubik|Roboto" rel="stylesheet" type="text/css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body class="homepage" data-spy="scroll" data-target=".navbar">
      <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->

      <div id="nav">
        <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav top-navbar">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

    <!-- HEADER SECTION -->
    <div id="home">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div id="header-title">
              <h1>Noah Stapp</h1>
              <h3 id="info"><?php perch_content('Info content'); ?></h3>
              <h3 id="experience"><?php perch_content('Experience content'); ?></h3> 
              <a href="#portfolio"><span class="down-arrow fa fa-angle-double-down"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <main role="main">
    
      <!-- PORTFOLIO SECTION -->
        <section id="portfolio">
          <div class="container">
            <h1 id="portfolio-title">Portfolio</h1>
              <div class="row">
                <div class="grid">
                <?php perch_content('Portfolio content'); ?>
              </div>
            </div>
            </div>
          </section>

          <!-- TESTIMONIALS SECTION -->
          <section id="testimonials">
            <div class="container">
              <h1 id="testimonials-title">Testimonials</h1>
                <?php perch_content('Testimonials content'); ?>
              </div>
            </section>

      <!-- CONTACT SECTION -->
        <section id="contact">
          <div class="container">
            <h1 id="contact-title">Contact Me</h1>
              <div class="row">
                <div class="contact-intro col-sm-12">
                  <?php perch_content('Contact content'); ?>
                </div>
              </div>
              <div class="row">
                  <div class="contact-email col-sm-4">
                    <span class="icon fa fa-envelope-o"></span>
                    <h2>Email:</h2>
                      <p><a href="mailto:noah@noahstapp.com">noah@noahstapp.com</a></p>
                  </div>
                </div>
                <div class="row">
                  <div class="contact-phone col-sm-4">
                    <span class="icon fa fa-phone"></span>
                    <h2>Phone:</h2>
                      <p>(978) 799-7181</p>
                </div>
              </div>
            </div>
          </section>

        </main>

      <!-- FOOTER -->
    <footer class="footer">
      <div class="container">
        <ul>
          <li><p>Copyright &copy; Noah Stapp 2016. All rights reserved.</p></li>
        </ul>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-64272021-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
