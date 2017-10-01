<?php
    query_posts('order=Desc&cat=7');
?>
<?php if ( have_posts() ) : ?>
<div class="group-post-index">
    <div class="category-tab category-tab-green avenir-normal title uppercase ls5 text-left">
        Personajes
    </div>
    <?php echo Gafa\GafaTemplate::Imprimir( 'notas/nota.tpl.php'); ?>
    <a href="<?php echo get_home_url(); ?>/category/cultura/" class="boton-dutcher big boton-green avenir-normal animationMenu ls1">Ver todo Cultura</a>
</div>
<?php endif; ?>
