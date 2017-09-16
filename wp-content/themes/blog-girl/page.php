<?php get_header(); ?>  
   <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
   <div id="content">
      <div class="e-divider-2"></div>
      <section id="articles" class="">
         <div class="container">
            <div class="row has-sidebar-right">
               <div class="col-md-8 pull-left">
                  <div class="row row-flex row-flex-wrap">
                     <article id="01" class="post-block col-md-12 post hentry">
                        <div class="post-detail">
                           <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                           <div class="metas">
                              Posted on: <a href="#!" class="meta-date"><?php echo get_the_date(); ?></a>/&nbsp;
                              Posted by: <a href="#!" class="meta-author"><?php the_author(); ?></a>
                           </div>
                        </div>
                        <div class="img-wrap">
                           <a href="#!">
                              <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
                           </a>
                        </div>
                        <div class="inner-content">
                           <?php the_content(); ?>
                        </div>

                        <!--Share Section-->
                        <section id="share">
                           <div class="share-tag-box">
                              <div class="row">
                                 <div class="col-md-6 text-left rb">
                                    <h4>Share This</h4>
                                    <ul class="list-inline social share"><!-- Social Share -->
                                       <li>
                                          <a href="#!" class="rst-icon-facebook"><i class="fa fa-facebook"></i></a>
                                       </li>
                                       <li>
                                          <a href="#!" class="rst-icon-twitter"><i class="fa fa-twitter"></i></a>
                                       </li>
                                       <li>
                                          <a href="#!" class="rst-icon-google-plus"><i class="fa fa-google-plus"></i></a>
                                       </li>
                                       <li>
                                          <a href="#!" class="rst-icon-linkedin"><i class="fa fa-linkedin"></i></a>
                                       </li>
                                       <li>
                                          <a class="rst-icon-pinterest" href="#!"><i class="fa fa-pinterest"></i></a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-md-6 text-right">
                                    <h4>Tags</h4>
                                    <?php the_tags( '<ul class="list-inline tags"><li>', '</li><li>', '</li></ul>' ); ?>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </article>
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
   <?php endwhile; ?>
   <?php endif; ?>
<?php get_footer(); ?>