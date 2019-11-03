<?php
                        
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		?>
			<a href="<?php get_permalink($recent["ID"])  ?>" title="<?php the_title(); ?>"
				class="list-group-item list-group-item-action flex-column align-items-start"><?php $recent["post_title"]; ?>
				<div class="row">
					<div class="col-12">
						<img class="rounded lazyload blur-up float-left mr-3 lazyloaded" data-sizes="auto"
							width="70" height="70" loading="lazy"
							src="<?php 
									get_categories(z_taxonomy_image_url());
								// foreach (get_categories() as $cat) {
								// echo z_taxonomy_image_url($cat->term_id); 
								// }					
							?>">
						<h6 class="mb-1"> <?php $recent["post_title"] ?></h6><small class="text-secondary">· baca
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












