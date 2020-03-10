<?php
include_once("pages/nwrtuhnt.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DarkSecurity</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
        <!-- CSS -->
        <link href="style.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/captions-original.css" rel="stylesheet">
        <link href="assets/css/settings.css" rel="stylesheet">
        <link href="assets/css/limon.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/preset/preset1.css" id="presetcss" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" id="layout_css" href="assets/css/preset/width.css"/> 		
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="page-template blog">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&appId=287313394631398&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
		
        <header id="site_header">
            <!--Main Navigation-->
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation" id="main_navigation" data-spy="affix" data-offset-top="60">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_nav">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="inicio">
                            <h1><span>Dark</span> Security</h1>
                            <h5>There is no security</h5>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="inicio" class="dropdown-toggle" data-toggle="dropdown">Inicio</a>
                            </li>
			    <li class="dropdown">
                                <a href="sobre" class="dropdown-toggle" data-toggle="dropdown">Sobre Nós</a>
                            </li>
			    <li class="dropdown active">
                                <a href="ferramentas" class="dropdown-toggle" data-toggle="dropdown">Ferramentas</a>
                            </li>
			    <li class="dropdown">
                                <a href="galeria" class="dropdown-toggle" data-toggle="dropdown">Galeria</a>
                            </li>
                            
                            
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <!--Social Navigation-->
            <div id="social_nav">
                <div class="container">
                    <ul class="list-inline nav-pills">
                        <li><a href="https://twitter.com/0xDarkSecurity" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/0xDarkSec" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://www.youtube.com/channel/UCSZWJSgKG5UQtWblLTpVqyA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li>
                            <form role="search" action="pesquisa.php" method="get" >
                                <div class="input-group">                                
                                    <input type="search" class="form-control" placeholder="Search" name="search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><img src="assets/images/social_icos/search.png" alt=""></button>
                                    </span>
                                </div><!-- /input-group -->
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </header><!--Header End-->	
        <section id="main_content_holder">
        <section id="page_template">
            <div class="row page_header">
                <div class="container">
                    <h2>No System Is Safe</h2>
                    <h3></h3>
                </div>
            </div>
		<br>          
            <section id="download_text">
	<?php
		$consu = $conn->prepare("SELECT * FROM tool;");
		$consu->execute();
		while ($lin = $consu->fetch(PDO::FETCH_ASSOC)) {
	 ?>
            <div class="container">
                <h1><?php echo $lin['nome'] ?></h1>
                <p><?php echo $lin['desc'] ?></p>
                <a href="<?php echo $lin['link'] ?>" class="download_btn"><i class="fa fa-cloud-download"></i> download now!</a>
            </div>
	<?php } ?>
        </section>
        
        <footer><!--Footer Start-->

          <div id="foot_copy">
                <div class="container">
                    <div class="col-xs-12 col-sm-6 copyright">&copy; Copyright 2014 — DarkSecurity by BunnyDArk. Hack The Planet</div>
                    <div class="col-xs-12 col-sm-6">
                         <ul class="list-inline nav-pills right">
                        <li><a href="https://twitter.com/0xDarkSecurity" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/0xDarkSec" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://www.youtube.com/channel/UCSZWJSgKG5UQtWblLTpVqyA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Back to top -->
                    <a href="#" id="back_to_top"><i class="fa fa-chevron-up"></i></a>
            </div>
        
        <script src="assets/js/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.themepunch.plugins.min.js"></script>
        <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" async src="https://assets.pinterest.com/js/pinit.js"></script>		
		<script src="assets/js/mixitup.js"></script>
        <script src="assets/js/gmaps.js"></script>
        <script src="assets/js/preset.js"></script>			
        <script src="assets/js/script.js"></script>
    </body>
</html>
