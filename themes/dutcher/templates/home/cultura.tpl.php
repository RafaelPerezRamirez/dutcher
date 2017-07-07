<?php
    query_posts('order=Desc&cat=5');
?>
<?php if ( have_posts() ) : ?>
<div class="group-post-index">
    <div class="category-tab category-tab-green avenir-normal title uppercase ls5 text-left">
        Cultura
    </div>
    <?php echo Gafa\GafaTemplate::Imprimir( 'notas/nota.tpl.php'); ?>
</div>
<?php endif; ?>
