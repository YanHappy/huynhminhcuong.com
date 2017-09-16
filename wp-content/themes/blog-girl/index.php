<?php get_header(); ?>
    <div id="content">
       <?php get_template_part('slider'); ?>
       <section id="articles" class="post-grid">
          <div class="container">
             <div class="row has-sidebar-right">
                <div class="col-md-8 pull-left flex">
                   <div class="row">
                      <?php if (have_posts()) : ?>
                      <?php while (have_posts()) : the_post(); ?>
                          <article id="<?php the_id(); ?>" class="post-block col-lg-6 col-md-12 post hentry">
                             <div class="box">
                                <div class="img-wrap">
                                   <a href="<?php the_permalink(); ?>">
                                      <?php show_thumb(360,180,1,'c'); ?>
                                   </a>
                                </div>
                                <div class="post-detail">
                                   <div class="meta-cat">
                                      <?php the_category(' / ' ); ?>
                                   </div>
                                   <h2 class="entry-title">
                                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                   </h2>
                                   <div class="metas">
                                      Đăng ngày: <a><?php echo get_the_date(); ?></a>
                                   </div>
                                </div>
                                <div class="post-excerpt">
                                   <p><?php echo teaser(30); ?></p>
                                </div>
                             </div>
                          </article>
                      <?php endwhile; ?>
                      <?php endif; ?>
                      <div class="col-md-12">
                         <div id="tf-pagination">
                            <nav class="wp-pagenavi">
                               <?php if(paginate_links()!='') {?>
                               <div class="quatrang">
                                 <?php
                                 global $wp_query;
                                 $big = 999999999;
                                 echo paginate_links( array(
                                   'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                   'format' => '?paged=%#%',
                                   'prev_text'    => __('<i class="fa fa-angle-double-right"></i>'),
                                   'next_text'    => __('<i class="fa fa-angle-double-left"></i>'),
                                   'current' => max( 1, get_query_var('paged') ),
                                   'total' => $wp_query->max_num_pages
                                   ) );
                                   ?>
                               </div>
                               <?php } ?>
                            </nav>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 sticky-column" data-sticky_column >
                   <div class="sidebar">
                       <?php get_sidebar(); ?>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <?php get_template_part('instagram'); ?>
       <div class="e-divider-6"></div>
       <div class="container text-center"><div class="ornament-divider-fullwidth content-divider lined"><i class="flaticon-art-3"></i></div></div>
       <div class="e-divider-3"></div>
    </div>
<?php get_footer(); ?>