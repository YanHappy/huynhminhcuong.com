<?php get_header(); 
/*
 * Template Name: Full template
 */
?>
      <div id="content">
         <div class="e-divider-2"></div>
         <section id="articles" class="">
            <div class="container">
               <div class="row">
                  <article id="01" class="page-block col-md-12 page hentry">
                     <div class="e-divider-2"></div>
                     <div class="page-detail text-center">
                        <h2 class="entry-title page-title"><a><?php the_title(); ?></a></h2>
                        <div class="metas">
                           Posted on: <a href="#!" class="meta-date"><?php echo get_the_date(); ?></a>/&nbsp;
                           Posted by: <a href="#!" class="meta-author"><?php the_author(); ?></a>
                        </div>
                     </div>
                     <div class="text-center"><div class="ornament-divider-fullwidth content-divider "><i class="flaticon-art-3"></i></div></div>
                     <div class="e-divider-6"></div>
                     <div class="inner-content">
                        <?php the_content(); ?>
                     </div>
                  </article>

               </div>
            </div>

         </section>
         <!-- /Page Content -->

         <!--Share Section-->
         <section id="share" class="e-block-null">
            <div class="container text-center">
               <div class="share-tag-box">
                  <div class="row">
                     <div class="col-md-12">
                        <h4 class="lined">Share This</h4>
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
                  </div>
               </div>
            </div>
            <div class="e-divider-6"></div>
         </section>
         <?php get_template_part('instagram' ); ?>
         <div class="e-divider-6"></div>
         <div class="container text-center"><div class="ornament-divider-fullwidth content-divider lined"><i class="flaticon-art-3"></i></div></div>
         <div class="e-divider-3"></div>
      </div>
<?php get_footer(); ?>