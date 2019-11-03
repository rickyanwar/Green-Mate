<!-- /.blog-sidebar -->
<aside style="height: auto !important;">
    <div class="widget mb-5">
        <div class="widget-content">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title m-0 h4">Artikel Terbaru</h4>
                </div>
                <div class="list-group list-group-flush">
                    <?php                        
                    $args = array( 'numberposts' => '3' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                    ?>
                    <a href="<?php get_permalink($recent["ID"])  ?>" title="<?php the_title(); ?>"
                        class="list-group-item list-group-item-action flex-column align-items-start"><?php $recent["post_title"]; ?>
                        <div class="row">
                            <div class="col-12">
                                <?php
                                $categories = get_the_category();
                                 foreach ($categories as $cat) {
                                ?>
                                <img class="rounded lazyload blur-up float-left mr-3 lazyloaded" data-sizes="auto"
                                    width="70" height="70" loading="lazy"
                                    src="<?php echo z_taxonomy_image_url($cat->term_id); ?>">
                                <?php
                                }
                               ?>
                                <h6 class="mb-1"> <?php echo $recent["post_title"]; ?></h6><small
                                    class="text-secondary">· baca
                                    <?php echo estimated_reading_time( get_the_content() ); ?>
                                    menit</small>
                                <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>
                                    <?php date_i18n('d F Y', strtotime($recent['post_date']));?>
                                </time>
                                
                            </div>
                        </div>
                    </a>
<?php
	}
	wp_reset_query();
?>















                </div>
                <div class="card-footer">
                    <a href="http://">Langganan</a>
                </div>
            </div>
        </div>
    </div><iframe
        data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpetanikode%2F&amp;tabs&amp;width=340&amp;height=214&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=152759108115365"
        width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" a=""
        llowtransparency="true" allow="encrypted-media" data-size="auto" class="lazyload blur-up"></iframe>
</aside>