<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>
        <?php
        if(is_home()){
            echo 'Dutcher';
        }else{
            wp_title('');
        }
        ?>
    </title>
    <link rel="icon" href="<?php assets(); ?>/images/favicones.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#2ebd9a" />
    <!-- Meta SEO -->
    <!-- Meta Facebook -->
    <?php
        if( get_post_type() != 'post' ){
            $image		= 'http://dutcher.rocks/wp/wp-content/uploads/2017/07/logo.jpg';
            ?>
                <meta property="og:image" content="<?php echo $image;?>" />
            <?php
        };
    ?>
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php plantilla(); ?>/style.css"/>
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php assets(); ?>/css/dev.css"/>
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php assets(); ?>/css/template.css"/>
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php assets(); ?>/css/templateResponsive.css"/>
    <!-- Comienza WP Head -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- Google Analytics -->
</head>
<body <?php body_class("normal"); ?>>
<?php echo Gafa\GafaTemplate::Imprimir( 'header/menuslide.tpl.php'); ?>
<div class="shadow-layer animationMenu"></div>
<div class="main-content animationMenu">
    <?php echo Gafa\GafaTemplate::Imprimir( 'header/menu.tpl.php'); ?>
    <div class="content-feed animated fadeIn">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
