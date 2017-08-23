<?php
    query_posts('order=Desc&cat=9');
?>
<?php if ( have_posts() ) : ?>
<div class="group-post-index">
    <div class="category-tab avenir-normal title uppercase ls5 text-left">
        Films & series
    </div>
    <?php echo Gafa\GafaTemplate::Imprimir( 'notas/nota.tpl.php'); ?>
    <a href="<?php echo get_home_url(); ?>/category/munchies/" class="boton-dutcher big boton-blue avenir-normal animationMenu ls1">Ver todo Munchies</a>
</div>
<?php endif; ?>
