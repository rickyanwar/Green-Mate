<?php get_header(); 

get_Slider();
get_Features();
?>
<article class="card-post my-5">
    <div class="container">
        <div class="row">
           <?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
             get_template_part( 'content', get_post_format() );
             
            endwhile; endif;
            
            ?>
        </div>
        <div class="row">
            <div class="col-12 mt-4">
            <?php  wp_bootstrap_pagination(); // use the page navi function ?>          
            </div>
        </div>
    </div>
</article>
<?php 
      get_About(); 
      get_Qoutes();
      get_visiMisi();
      get_Donasi();
      get_footer();
?>

