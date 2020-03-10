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

    <body class="search search-results">
<!-- BEGIN THEME PANEL -->
<div id="themes_panel">
    <div id="toggle_button">
        <a href="#"></a>
    </div>
    <div id="themes_menu">
        <h4 style="text-align:center;">Style Switcher</h4>
        <div class="segment">
            <h5 class="seg_header">Color</h5>
            <ul class="theme cookie_layout_style">
                <li>
                    <a href="preset1.css" title="preset1" class="preset_css preset1"></a>
                </li>
                <li>
                    <a href="preset2.css" title="preset2" class="preset_css preset2"></a>
                </li>
                <li>
                    <a href="preset3.css" title="preset3" class="preset_css preset3" ></a>
                </li>
                <li>
                    <a href="preset4.css" title="preset4" class="preset_css preset4" ></a>
                </li>
                <li>
                    <a href="preset5.css" title="preset5" class="preset_css preset5" ></a>
                </li>
                <li>
                    <a href="preset6.css" title="preset6" class="preset_css preset6" ></a>
                </li>
            </ul>
            <div class="clear"></div>
            <h5 class="seg_header">Layout</h5>
            <div class="select_div">
                <a href="width" class="layout_preset wi">Wide</a>
                <a href="box" class="layout_preset">Box</a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!-- END THEME PANEL -->
	
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
                        <a class="navbar-brand logo" href="home.php">
                            <h1><span>Dark</span> Security</h1>
                            <h5>There is no security</h5>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="home.php" class="dropdown-toggle" data-toggle="dropdown">Inicio</a>
                            </li>
			    <li class="dropdown">
                                <a href="sobre.php" class="dropdown-toggle" data-toggle="dropdown">Sobre Nós</a>
                            </li>
			    <li class="dropdown">
                                <a href="ferramentas.php" class="dropdown-toggle" data-toggle="dropdown">Ferramentas</a>
                            </li>
			    <li class="dropdown">
                                <a href="galeria.php" class="dropdown-toggle" data-toggle="dropdown">Galeria</a>
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
                            <form role="search" action="search.php" method="get" >
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
            <div class="breadcumb_row row">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="home.php">Inicio</a></li>
                        <li class="active">Pesquisa</li>
                    </ol>
                </div>
            </div>
            <div class="container advanced_search_form">
                <form role="search" action="" method="get">
                    <h1><i class="fa fa-search"></i> Busca</h1>
                    <div class="form-group">
                        <label for="search" class="sr-only">Procure por palavras</label>
                        <input type="search" placeholder="Coloque aqui a palavra que deseja pesquisar" id="search" name="search"/>
                    </div>
                   
                </form>
            </div>
            <div class="row search_content_widgets">
                <div class="container">
                    <div class="col-xs-12 col-sm-8 search_contents">
                        <ul class="media-list search_items">
			<?php
			$bus = $conn->prepare("SELECT * FROM noticias WHERE titulo_url LIKE '%".$arg."%';");
			$bus->execute();
			
			while ($linbus = $bus->fetch(PDO::FETCH_ASSOC)) {
			$aidi = $linbus['titulo_url'];
			?>
                            <li class="media">
                                <a class="pull-left blog_thumb" href="artigos/<?php echo $aidi; ?>">
                                    <img width="220px" height="150px" class="media-object" src="assets/images/artigos/<?php echo $linbus['img_media']; ?>" alt="...">
                                </a>
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="artigos/<?php echo $aidi; ?>"><?php echo $linbus['titulo']; ?></a>
                                    </h3>
                                    <div class="post_meta row">
                                        <div class="col-xs-4 col-sm-4">
                                            <a href="artigos/<?php echo $aidi; ?>">
                                                <i class="fa fa-clock-o left"></i><span><?php echo $linbus['dia']; ?>/<?php echo $linbus['mes']; ?>/<?php echo $linbus['ano']; ?></span>
                                            </a>
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
						<?php $bust = $conn->prepare("SELECT * FROM comentarios WHERE id_new = :id;");
						$bust->bindParam(":id", $aidi);
						$bust->execute();
						$total = $bust->rowCount(); ?>
                                            <a href="">
                                                <i class="fa fa-comments left"></i><span><?php echo $total; ?> Comentarios</span>
                                            </a>
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <a href="">
                                                <i class="fa fa-heart-o left"></i><span><?php echo $linbus['view']; ?> Visualizações</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
					<?php unset($aidi); } ?>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <footer><!--Footer Start-->
            
            
            <div id="foot_copy">
                <div class="container">
                    <div class="col-xs-12 col-sm-6 copyright">&copy; Copyright 2014 — DarkSecurity by BunnyDark. Hack The Planet</div>
                    <div class="col-xs-12 col-sm-6">
                         <ul class="list-inline nav-pills right">
                        <li><a href="https://twitter.com/0xDarkSecurity" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/0xDarkSec"><i class="fa fa-facebook" target="_blank"></i></a></li>
			<li><a href="https://www.youtube.com/channel/UCSZWJSgKG5UQtWblLTpVqyA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Back to top -->
                    <a href="#" id="back_to_top"><i class="fa fa-chevron-up"></i></a>
            </div>
        </footer><!--Footer End-->
        </section>
        
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
