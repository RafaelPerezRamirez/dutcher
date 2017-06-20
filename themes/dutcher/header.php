<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Dutcher</title>
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
    <!-- Comienza WP Head -->
    <?php wp_head(); ?>
    <!-- Google Analytics -->
</head>
<body <?php body_class("normal"); ?>>
<div class="second-menu animationMenu"></div>
<div class="shadow-layer animationMenu"></div>
<div class="main-content animationMenu">
    <nav class="animationMenu">
        <div class="header-menu text-center">
            <div class="menu-button pointer centrar_alto">
                <span class="span-button-uno"></span>
                <span class="span-button-dos centrar_alto"></span>
                <span class="span-button-tres"></span>
            </div>
            <a href="<?php echo get_home_url(); ?>" class="logo-button centrar_total">
                <object data="<?php echo assets(); ?>/images/logo2.svg" type="image/svg+xml" class="logo"></object>
            </a>
        </div>
        <div class="links-category">
            <a href="#" class="item-tendencia text-center">
                <div class="color-tab animationMenu"></div>
                <span class="big avenir-normal ls2 animationMenu">Tendencia</span>
            </a>
            <a href="#" class="item-tendencia text-center animationMenu">
                <div class="color-tab animationMenu"></div>
                <span class="big avenir-normal ls2 animationMenu">Músiquita</span>
            </a>
            <a href="#" class="item-tendencia text-center animationMenu">
                <div class="color-tab animationMenu"></div>
                <span class="big avenir-normal ls2 animationMenu">Munchies</span>
            </a>
            <a href="#" class="item-tendencia text-center animationMenu">
                <div class="color-tab animationMenu"></div>
                <span class="big avenir-normal ls2 animationMenu">Cultura</span>
            </a>
            <a href="#" class="item-tendencia text-center animationMenu">
                <div class="color-tab animationMenu"></div>
                <span class="big avenir-normal ls2 animationMenu">Road & trip</span>
            </a>
        </div>
    </nav>
    <div class="content-feed">
