<?php
    query_posts('order=Desc&cat=2');
?>
<?php if ( have_posts() ) : ?>
<div class="group-post-index">
    <div class="category-tab avenir-normal title uppercase ls5 text-left">
        Tendencia
    </div>
    <?php echo Gafa\GafaTemplate::Imprimir( 'notas/nota.tpl.php'); ?>
</div>
<?php endif; ?>
