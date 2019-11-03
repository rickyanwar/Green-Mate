<div class="col-md-3 col-lg-3 mb-4 d-flex">
    <div class="card card-shadow rounded">
        <a href="<?php the_permalink(); ?>" style="overflow: hidden;">
        <?php 
        the_post_thumbnail( 'medium', array(
            'class' => 'card-img-top img-fluid ',
            'sizes' => '(max-width:320px) 145px, (max-width:425px) 220px, 500px' 

        ) );
        ?>
        </a>
        <div class="card-body">
        <a class="text-dark" href="<?php the_permalink(); ?>">
            <span class="card-title ">
            <?php the_title(); ?>
            </span>
            </a>
        </div>
    </div>
    
</div>