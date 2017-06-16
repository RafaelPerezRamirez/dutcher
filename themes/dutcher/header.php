<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title><?php wp_title(); ?></title>
    <link rel="icon" href=""/>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <?php require_once("assets/js/gafaCore.php"); ?>
    <!--suppress HtmlUnknownTarget -->
    <!--suppress HtmlUnknownTarget -->
    <script type="text/javascript" src="<?php assets(); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Comienza WP Head -->
    <?php wp_head(); ?>
    <!-- Google Analytics -->
</head>
<body <?php body_class("normal"); ?>>
<div class="second-menu">

</div>
<div class="shadow-layer"></div>
<div class="main-content">
    <nav>

    </nav>
