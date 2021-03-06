<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_url' ); ?>/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
	<?php wp_head();?>
</head>
<body>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.4";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
    <div class="container">
        <div class="row">
            <div  id="header" class="col-md-12 ">
                <img id="logobook" src="<?php bloginfo( 'template_url' ); ?>/img/book.png">
                <div id="namesite">
                    <h1><a href="/" title="Главная"><?php bloginfo( 'name' ); ?></a></h1>
                    <p id="slogan">от New York Times Cook Book</p>
                </div>
                <div  id="search" class="col-md-3 col-xs-7 col-sm-6">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('search')) : ?>
					
				<?php endif; ?>
                    <!--<div class="input-group">
                        <input  id="input_search" type="text" class="form-control">
                          <span class="input-group-btn">
                            <button id="submit_search" class="btn btn-default" type="button">Поиск</button>
                          </span>
                    </div>-->
                </div>


                <img id="logocup" src="<?php bloginfo( 'template_url' ); ?>/img/cup.jpg">
                
                    
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('ruen')) : ?>
					
				<?php endif; ?>
				
            </div>
        </div>
        <div class="row margin-bottom">
            <div class="col-md-12 dotted"></div>
        </div>
        <div class="row margin-bottom">
            <div class="navbar">
            <div class="container">
                <button type="button" class="navbar-toggle button_head_menu"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        >

                    <i class="glyphicon glyphicon-align-justify gl_size"></i>
                </button>
                <ul id="navbar" class="nav  nav-pills  pull-left collapse navbar-collapse">
                    <li id="head_li" ><a href="<?php bloginfo( 'url' ); ?>"><?php  echo get_the_title(50);?></a></li>
					<?php wp_list_pages(array('title_li' => '','include'=>'16,22,24')); ?> 

                </ul>
            </div>
            </div>



        </div>