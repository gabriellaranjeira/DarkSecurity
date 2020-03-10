<?php
include_once("pages/nwrtuhnt.php");
if(isset($_GET['id'])){
	$selvi = $conn->prepare("SELECT view FROM noticias WHERE titulo_url = ':arg'");
	$selvi->bindParam(":arg", $arg);
	$selvi->execute();
	$linhavi = $selvi->fetch(PDO::FETCH_ASSOC);
	$view = (int)$linhavi+1;
	$invi = $conn->prepare("UPDATE noticias SET view = :v WHERE id = :id;");
	$invi->bindParam(":v", $view);
	$invi->bindParam(":id", $id);
	$invi->execute();
}else{
	header("Location: inicio");
}
if(isset($_POST["niorger"])&&$_POST["niorger"] == 'vqerfvqe'){
	$nome = addslashes($_POST['nome']);
	$nome = strip_tags($nome);
	$msg = addslashes($_POST['message']);
	$msg = strip_tags($msg);
	$ip = $_SERVER['REMOTE_ADDR'];
	$day = date("d");
	$mes = date("m");
	$ano = date("Y");
	$hora = date("H:i");
	$incom = $conn->prepare("INSERT INTO comentarios (nome,comentario,id_new,ip,horas,dia,mes,ano) VALUES (:nome,:com,:id,:ip,:hor,:dia,:mes,:ano)");
	$incom->bindParam(':nome', $nome);
	$incom->bindParam(':com', $msg);
	$incom->bindParam(':id', $id);
	$incom->bindParam(':ip', $ip);
	$incom->bindParam(':hor', $hora);
	$incom->bindParam(':dia', $day);
	$incom->bindParam(':mes', $mes);
	$incom->bindParam(':ano', $ano);
	$incom->execute();
	unset($incom);
	
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DarkSecurity</title>

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

    <body class="single single-blog">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&appId=287313394631398&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
<!-- BEGIN THEME PANEL -->
<!-- END THEME PANEL -->
		
        <header>
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
         
        </header><!--Header End-->
        
        <section id="page_template">
            <div class="breadcumb_row row">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="inicio">Home</a></li>
                        <li class="active">Artigos</li>
                    </ol>
                </div>
            </div>         
            <div class="row page_content">
                <div class="container">
                    <div class="row blogs_and_widgets">
                        <div class="col-xs-12 col-sm-12 blogs">
                            <div class="row single_item single_blog_summery blog_style_gallery post_type_photography">
                               <?php
					$consulta_newi = $conn->prepare("SELECT * FROM noticias WHERE id = :id;");
					$consulta_newi->bindParam(":id", $id);
					$consulta_newi->execute();

					while ($linha = $consulta_newi->fetch(PDO::FETCH_ASSOC)) {
				    
				?>
                                <h2 class="page_title" align="center"><?php echo $linha['titulo']; ?></h2>
                                <div class="row post_meta">
                                   
                                </div>
                                <div class="row blog_feature_img_cat">
                                    <a href="#"><img width="900" height="600" src="assets/images/artigos/<?php echo $linha['img_grande']; ?>" alt="" class="row feature_img"></a>
                                   
                                </div>
                                <div class="row post_desc">                                    
                                    <div class="row post_summery">
                                        <?php echo $linha['txt_comp']; ?>
                                    </div>
					<?php } ?>
                                     
                                </div>
                            </div> <!--Single Post -->
                            <div class="row post_comments">
                                <ul class="nav nav-tabs" id="coment_tab">
                                    <li class="active"><a href="#comments_of_this" data-toggle="tab">Comments</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active comments_list" id="comments_of_this">
                                   <?php
					$consulta_com = $conn->prepare("SELECT * FROM comentarios WHERE id_new = :id;");
					$consulta_com->bindParam(":id", $id);
					$consulta_com->execute();

					while ($linha_com = $consulta_com->fetch(PDO::FETCH_ASSOC)) {
				    
				?>
                                        <div class="media s_comment s_comment_parent">
                                            <h3 class="row commenter_name_date"><a href="#"><?php echo $linha_com['nome']; ?></a> <small><a href="#"><?php echo $linha_com['horas']; ?> / <?php echo $linha_com['dia']; ?> <?php echo $linha_com['mes']; ?> <?php echo $linha_com['ano']; ?></a></small></h3>
                                            <div class="row commenter_img_comment">
                                                <div class="media-body">
                                                    <?php echo $linha_com['comentario']; ?>
                                                </div>
                                            </div>
                                        </div>
				<?php } ?>
                                      
                                            
                                        
                                        <div class="row form_row" id="form_row"> 
                                            <form action="" role="form" method="post">
                                                <h4>Comente</h4>
                                                <div class="row">
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="website" class="sr-only"></label>
                                                        <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="message" class="sr-only"></label>
                                                    <textarea name="message" id="message" rows="6" class="form-control" required></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-5">
                                                        <input type="submit" value="SEND MESSAGE" class="btn btn-default" name="submit">
                                                    </div>
                                                    <div class="col-xs-12 col-sm-7">
                                                        <input type="checkbox" id="newsletter-active" name="newsletter-active" value="1">
                                                        <label for="newsletter-active">Hack The Planet!</label>
							<input type="hidden" name="niorger" value="vqerfvqe">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--Comments-->
                                    </div>
                                </div>
                            </div> <!--Post Comments-->
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
                    <a href="#" id="back_to_top"><i class="fa fa-chevron-up"></i></a>
            </div>
        </footer><!--Footer End-->       
        
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
