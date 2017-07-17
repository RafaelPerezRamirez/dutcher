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
    <!-- Meta SEO -->
    <!-- Meta Facebook -->
    <?php
        etiquetas_og();
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
    <?php wp_head(); ?>
    <!-- Google Analytics -->
</head>
<body <?php body_class("normal"); ?>>
<?php echo Gafa\GafaTemplate::Imprimir( 'header/menuslide.tpl.php'); ?>
<div class="shadow-layer animationMenu"></div>
<div class="main-content animationMenu">
    <?php echo Gafa\GafaTemplate::Imprimir( 'header/menu.tpl.php'); ?>
    <div class="content-feed">
