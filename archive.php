<?php
     $recent_posts = wp_get_recent_posts();
     foreach( $recent_posts as $recent ){
      ?>
<a href="<?php get_permalink($recent["ID"]); ?>"
    class="list-group-item list-group-item-action flex-column align-items-start"><?php $recent["post_title"]; ?>
    <div class="row">
        <div class="col-12">
            <img class="rounded blur-up float-left mr-3 "  width="70" height="70"
                loading="lazy"
                src="<?php if (is_category()) : if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); endif;?>">
            <h6 class="mb-1"> <?php echo $recent["post_title"]; ?></h6><small class="text-secondary">· baca
                <?php echo estimated_reading_time( get_the_content() ); ?>
                menit</small>
        </div>
    </div>
</a>

<?php
                    }
                    wp_reset_query();
                    ?>