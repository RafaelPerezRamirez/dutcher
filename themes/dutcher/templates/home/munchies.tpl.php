<?php
    query_posts('order=Desc&cat=4');
?>
<?php if ( have_posts() ) : ?>
<div class="group-post-index">
    <div class="category-tab avenir-normal title uppercase ls5 text-left">
        Munchies
    </div>
    <?php echo Gafa\GafaTemplate::Imprimir( 'notas/nota.tpl.php'); ?>
</div>
<?php endif; ?>
