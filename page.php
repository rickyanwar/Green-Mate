<?php get_header(); ?>
<div style="background-color: #f5f5f5;padding-bottom: 32px;padding-top: 32px">
    <article >
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-body p-md-5">
                    <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();

                        get_template_part( 'content-single', get_post_format() );

                    endwhile; endif;
                    ?>
                    </div>
                 </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div><!-- /.continer -->
    </article>
</div>
<?php get_footer(); ?>