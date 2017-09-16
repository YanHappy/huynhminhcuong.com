<aside id="about-widget" class="widget widget_about">
   <div class="text-center widget-wrap">
     <?php $getposts = new WP_query(); $getposts->query('post_status=publish&p=2&post_type=page'); ?>
     <?php global $wp_query; $wp_query->in_the_loop = true; ?>
     <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
         <div class="e-divider-4"></div>
         <?php show_thumb(120,120,1,'c'); ?>
         <div class="e-divider-3"></div>
         <h5 class="hello"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
         <p><?php echo teaser(30); ?></p>
         <div class="e-divider-2"></div>
         <ul class="list-inline social">
            <?php global $hk_options; ?>
            <li><a target="_blank" href="<?php echo $hk_options[fb]; ?>" class="rst-icon-facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" href="<?php echo $hk_options[tw]; ?>" class="rst-icon-twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a target="_blank" href="<?php echo $hk_options[pi]; ?>" class="rst-icon-pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li><a target="_blank" href="<?php echo $hk_options[in]; ?>" class="rst-icon-instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a target="_blank" href="<?php echo $hk_options[yo]; ?>" class="rst-icon-youtube"><i class="fa fa-youtube"></i></a></li>
         </ul>
     <?php endwhile; wp_reset_postdata(); ?>
   </div>
   <div class="clearfix"></div>
</aside>
<aside id="ad-widget" class="widget widget_adwidget">
   <img src="<?php bloginfo('template_directory'); ?>/assets/custom/images/demo01/ad-01.jpg" class="img-responsive" alt="02">
   <div class="clearfix"></div>
</aside>
<aside id="resent-widget" class="widget widget_recent_post">
   <div class="title widget-title lined">Bài viết mới</div>
   <div>
      <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post') ?>
      <?php global $wp_query; $wp_query->in_the_loop = true; ?>
      <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
         <div class="media">
            <div class="media-left"><a href="<?php the_permalink(); ?>">
               <?php show_thumb(80,80,1,'c'); ?>
            </a></div>
            <div class="media-body">
               <span class="meta-date"><?php echo get_the_date(); ?></span>
               <h4 class="media-heading">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
               </h4>
            </div>
         </div>
      <?php endwhile; wp_reset_postdata(); ?>
   </div>
   <div class="clearfix"></div>
</aside>
<aside id="instagram-widget" class="widget widget_instagram">
   <div class="title widget-title lined">Instagram</div>
   <div>
      <div class="media">
         <?php echo do_shortcode('[instagram-feed num=9 cols=3 showfollow=false]' ); ?>
      </div>
   </div>
   <div class="clearfix"></div>
</aside>
<aside id="categories-widget" class="widget widget_categories"><div class="title widget-title lined">Categories</div>
   <ul>
      <?php
         $args = array(
            'hide_empty' => 0,
            'child_of'  => 0,
            'orderby'   => 'id',
         );
         $categories = get_categories( $args );
         foreach ( $categories as $category ) { ?>
         <li class="cat-item">
            <a href="<?php echo get_term_link($category->slug, 'category');?>">
               <?php echo $category->name ; ?>
               (<?php echo $category->count; ?>)
            </a>
         </li>
      <?php } ?>
   </ul>
   <div class="clearfix"></div>
</aside>