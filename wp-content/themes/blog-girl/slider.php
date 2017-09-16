<section id="owl-carousel">
	<div class="container">
	 <div class="owl-carousel owl-theme">
	 	<?php 
			$args = array(
				'post_status' => 'publish',
				'meta_query' => array(
					array(
						'key' => 'wpcf-check',
						'value' => 1
					)
				),
				'showposts' => 8
			);
		?>
		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			<div class="item">
		       <div class="feat-post text-center">
		          <div class="feat-wrapper">
		             <div class="feat-metas">
		                <div class="ornament-divider-fullwidth"><i class="flaticon-art-9"></i></div>
		                <a href="<?php the_permalink(); ?>" class="meta-date"><?php echo get_the_date(); ?></a>in <?php the_category('-'); ?>
		                <h2 class="font-accident-two-normal text-nowrap"><?php the_title(); ?></h2>
		                <div><a href="<?php the_permalink(); ?>" class="morelink">Đọc tiếp</a></div>
		             </div>
		          </div>
		       </div>
		       <?php show_thumb(1140,550,1,'c'); ?>
		    </div>
		<?php endwhile; wp_reset_postdata(); ?>  
	 </div>
	</div>
	<div class="e-divider-6"></div>
</section>