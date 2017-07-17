<?php
    query_posts('order=Desc&cat=3');
?>
<?php if ( have_posts() ) : ?>
<div class="group-post-index">
    <div class="category-tab category-tab-green avenir-normal title uppercase ls5 text-left">
        Músiquita
    </div>
    <?php echo Gafa\GafaTemplate::Imprimir( 'notas/nota.tpl.php'); ?>
    <a href="<?php echo get_home_url(); ?>/category/musiquita/" class="boton-dutcher big boton-green avenir-normal animationMenu ls1">Ver todo Musiquita</a>
</div>
<?php endif; ?>
