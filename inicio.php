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
                            <li class="dropdown active">
                                <a href="inicio" class="dropdown-toggle" data-toggle="dropdown">Inicio</a>
                            </li>
			    <li class="dropdown">
                                <a href="sobre" class="dropdown-toggle" data-toggle="dropdown">Sobre Nós</a>
                            </li>
			    <li class="dropdown">
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
                    <h2>No system is safe</h2>
                    <h3></h3>
                </div>
            </div>
		<br>

		<?php
			$consulta_prinindex = $conn->prepare("SELECT * FROM `prin` ORDER BY `id` DESC LIMIT 0, 1;");
			$consulta_prinindex->execute();

			$linha_prin = $consulta_prinindex->fetch(PDO::FETCH_ASSOC);		    
		?>          
            <section id="index_blogs">
            <div class="container">
                <div class="col-xs-12 col-sm-8 index_blogs">
                    <div class="row top_blog_image_part">
                        <div class="row blog_feature_img_cat">
                            <a href="#"><img width="650" height="260" src="assets/images/prin/<?php echo $linha_prin['img']; ?>" alt="" class="row feature_img"></a>
                            <div class="row post_category_post_icon">
                                <ul class="list-inline">
                                    <li>
                                        <a href="">0x</a>
                                        <ul>
                                            <li><a href=""><?php echo $linha_prin['categoria']; ?></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="row post_date_post_icon">
                                <ul class="list-inline">
                                    <li>
                                        <a href=""><i class="fa fa-video-camera"></i></a>
                                        <ul>
                                            <li><a href=""><?php echo $linha_prin['dia']; ?><br><?php echo $linha_prin['mes']; ?></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>                        
                        </div>
                    </div>

			<?php
			$consulta_notindex = $conn->prepare("SELECT * FROM noticias;");
			$consulta_notindex->execute();

			while ($linha = $consulta_notindex->fetch(PDO::FETCH_ASSOC)) {
			   	$id = $linha['titulo'];
				$id = str_replace(" ", "-", $id);
				$id = str_replace("á", "a", $id);
				$id = str_replace("à", "a", $id);
				$id = str_replace("â", "a", $id);
				$id = str_replace("ã", "a", $id);
				$id = str_replace("ç", "c", $id);
				$id = str_replace("ó", "o", $id);
				$id = str_replace("ò", "o", $id);
				$id = str_replace("ô", "o", $id);
				$id = str_replace("õ", "o", $id);
				$id = str_replace("é", "e", $id);
				$id = str_replace("è", "e", $id);
				$id = str_replace("ê", "e", $id);
				$id = str_replace("ẽ", "e", $id);
				$id = str_replace("í", "i", $id);
				$id = str_replace("ì", "i", $id);
				$id = str_replace("ĩ", "i", $id);
				$id = str_replace("î", "i", $id);
			?>
                    <div class="row blogs4mSelectedCategory">
                        <div class="row single_blog_media">
                            <div class="left image_section">
                                <a href="artigos/<?php echo $id;?>"><img  width="220px" height="150px" src="assets/images/artigos/<?php echo $linha['img_pequena'];?>" alt="" class="row feature_img"></a>
                                <div class="row post_category_post_icon">
                                    <ul class="list-inline">
                                        <li>
                                            <a href=""><i class="fa fa-video-camera"></i></a>
                                            <ul>
                                                <li><a href=""><?php echo $linha['cat'];?></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="left desc_section">
                                <a href="artigos/<?php echo $id;?>"><h4><?php echo $linha['titulo'];?></h4></a>
                                <p><?php echo $linha['txt_fast']?></p>
                            </div>
                        </div>

			

                    </div>
<?php } ?>
                </div>
                <div class="col-xs-12 col-sm-4 index_widget">
                    <div class="row top_blog_desc_part widget">
                        <a href="" class="post_title">
                            <h2><?php echo $linha_prin['titulo']; ?></h2>
                        </a>
                        <p><?php echo $linha_prin['desc']; ?></p>
                    </div>
			<?php
			$consulta_new = $conn->prepare("SELECT * FROM new LIMIT 15;");
			$consulta_new->execute();
			?>
								    
			  
                    <div class="index_hottest_news_widget row widget">
                        <div class="index_hottest_news_heading widget_heading row">Novas Noticias</div>
                        <ul class="media-list">
			<?php while($linha_new = $consulta_new->fetch(PDO::FETCH_ASSOC)){ ?>
                            <li class="media">
                                <a class="pull-left">
                                    <img class="media-object" width="70" height="70" src="assets/images/prin/<?php echo $linha_new['img']; ?>" alt="...">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $linha_new['titulo']; ?></h4>
                                    <div class="row meta">
                                    </div>
                                </div>
                            </li>
			<?php } ?>
                        </ul>
                    </div>
                    <div class="row widget trending_video_widget">
                        <div class="row widget_heading">Ultimo video</div>
                        <div class="row video_trigger_row">
			<?php
			
			$consulta_vid = $conn->prepare("SELECT * FROM u_vid order by id desc;");
			$consulta_vid->execute();
			$linha_vid = $consulta_vid->fetch(PDO::FETCH_ASSOC)
			?>
                            <img src="assets/images/prin/you/<?php echo $linha_vid['img']; ?>" alt="" class="video_screenshot"/>
                            <a href="<?php echo $linha_vid['link']; ?>" target="_blank"></a>
                        </div>
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
                        <li><a href="https://www.facebook.com/0xDarkSec" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://www.youtube.com/channel/UCSZWJSgKG5UQtWblLTpVqyA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Back to top -->
                    <a href="" id="back_to_top"><i class="fa fa-chevron-up"></i></a>
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
