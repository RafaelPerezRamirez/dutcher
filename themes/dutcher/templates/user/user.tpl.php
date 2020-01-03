<div class="grid-author">
    <div class="inline middle info-author">
        <div class="nombre-author avenir-bold uppercase big ls2 color-green">
            <?php the_author_posts_link(); ?>
        </div>
        <div class="bio-author avenir-normal big ls1">
            <?php echo get_the_author_meta('description'); ?>
        </div>
        <div class="redes-author">
            <?php
                $twitter = get_the_author_meta( 'twitter');
                $facebook = get_the_author_meta( 'facebook');
                $instagram = get_the_author_meta( 'google+');
                if ( $facebook) {
                    echo '<a target="_blank" class="red-author red redfb" href="' . esc_url($facebook) . '"></a>';
                }
                if( $twitter ){
                    echo '<a target="_blank" class="red-author red redtw" href="' . esc_url($twitter) . '"></a>';
                }
                if( $instagram ){
                    echo '<a target="_blank" class="red-author red redtw" href="'.esc_url($instagram).'"></a>';
                }
            ?>
        </div>
    </div>
</div>
