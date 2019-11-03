<?php get_header(); ?>
<div class="container my-0 my-md-5" style="height: auto !important;">
    <div class="row" style="height: auto !important;">
        <div class="col-sm-12 col-lg-8 post-outer">
            <article class="card">
                <div class="card-body p-md-5">
                    <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'content-single', get_post_format() );
                
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                
                    endwhile; endif;
					
                    ?>
                </div>
            </article>
        </div>
        <div class="col-sm-12 col-lg-4" style="height: auto !important;">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>