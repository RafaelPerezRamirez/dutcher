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
    <?php
        global $post;
        $title		= get_bloginfo( 'name' );
        $type		= 'website';
        $url		= get_home_url();
        $image		= 'http://dutcher.rocks/wp/wp-content/uploads/2017/07/logo.jpg';
        $description= get_bloginfo( 'description' );

        if( is_single() && get_post_type() == 'post' ){
            $title		= get_the_title( $post->ID );
            $type		= 'article';
            $url		= get_permalink( $post->ID );
            $image		= the_post_thumbnail_url();
            $description= strip_tags( substr( $post->post_content, 0,147) ).'...';
        };
        /*COLOCAR META ETIQUETAS DE WORDPRESS*/
    ?>
    <meta property="og:title" content="<?php echo $title;?>" />
    <meta property="og:type" content="<?php echo $type;?>" />
    <meta property="og:url" content="<?php echo $url;?>" />
    <meta property="og:image" content="<?php echo $image;?>" />
    <meta property="og:description" content="<?php echo $description;?>" />
    <link rel="icon" href="<?php assets(); ?>/images/favicones.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Meta SEO -->
    <!-- Meta Facebook -->
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php plantilla(); ?>/style.css"/>
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php assets(); ?>/css/dev.css"/>
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php assets(); ?>/css/template.css"/>
    <!--suppress HtmlUnknownTarget -->
    <link type="text/css" rel="stylesheet" href="<?php assets(); ?>/css/templateResponsive.css"/>
    <!-- Comienza WP Head -->
    <?php wp_head(); ?>
    <!-- Google Analytics -->
</head>
<body <?php body_class("normal"); ?>>
<div class="pointer slide-up"></div>
<?php echo Gafa\GafaTemplate::Imprimir( 'header/menuslide.tpl.php'); ?>
<div class="shadow-layer animationMenu"></div>
<div class="main-content animationMenu">
    <?php echo Gafa\GafaTemplate::Imprimir( 'header/menu.tpl.php'); ?>
    <div class="content-feed animated fadeIn" id="main-content">
