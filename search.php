<?php get_header();  ?>
<div class="container">
    <div class="mysearch">
        <div class="row my-5">
            <div class="col-12">
            <?php if ( have_posts() ): ?>
                <h4 class="text-center"><?php echo __('Hasil Pencarian Untuk'); ?> '<?php echo get_search_query(); ?>'</h4>
            </div>
        </div>
        <div class="card-post my-4">
            <div class="row">
            <?php
                while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
                endwhile; 
                
                wp_bootstrap_pagination(); 
                 else: ?>
            <h1>
                <?php echo __('Tidak Ada Hasil Pencarian Untuk'); ?> '<?php echo get_search_query(); ?>'
            </h1>
            <?php endif; ?>
             </div>
        </div>
    </div>
</div>
<?php get_footer();  ?>