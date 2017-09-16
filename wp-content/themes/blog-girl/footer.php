        <?php global $hk_options; ?>
        <footer>
           <div id="footer-wrapper" class="">
              <div class="container">
                 <div class="row">
                    <div class="col-md-4">
                       <div class="footer-sign">
                          <i class="flaticon-christmas-rose"></i>
                       </div>
                       <div class="footer-title">
                          <h2 class="font-accident-two-normal darkrose uppercase"><?php bloginfo('name'); ?></h2>
                          <span class="small subtitle darkrose"><?php bloginfo('description' ); ?></span>
                          <div class="e-divider-5"></div>
                       </div>
                    </div>
                    <div class="col-md-5">
                       <p><input class="newsletter-email" type="email" required="" name="ne" placeholder="Subscribe to news"></p>
                    </div>
                    <div class="col-md-3">
                       <div class="follow">
                          <ul class="list-inline social">
                             <li><a target="_blank" href="<?php echo $hk_options['fb']; ?>" class="rst-icon-facebook"><i class="fa fa-facebook"></i></a></li>
                             <li><a target="_blank" href="<?php echo $hk_options['tw']; ?>" class="rst-icon-twitter"><i class="fa fa-twitter"></i></a></li>
                             <li><a target="_blank" href="<?php echo $hk_options['pi']; ?>" class="rst-icon-pinterest"><i class="fa fa-pinterest"></i></a></li>
                             <li><a target="_blank" href="<?php echo $hk_options['in']; ?>" class="rst-icon-instagram"><i class="fa fa-instagram"></i></a></li>
                             <li><a target="_blank" href="<?php echo $hk_options['yo']; ?>" class="rst-icon-youtube"><i class="fa fa-youtube"></i></a></li>
                          </ul>
                       </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                       <div class="infoblock">
                       <?php $getposts = new WP_query(); $getposts->query('post_status=publish&p=2&post_type=page'); ?>
                       <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                       <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                         <p class="small color10"><?php echo teaser(30); ?></p>
                       <?php endwhile; wp_reset_postdata(); ?>
                          <div class="e-divider-1"></div>
                       </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30 mb-xs-0">
                       <div class="infoblock">
                          <div class="navlinks">
                            <?php wp_nav_menu( array( 'theme_location' => 'f_nav', 'container' => 'false', 'menu_id' => 'main-nav', 'menu_class' => 'menu') ); ?>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                       <div class="infoblock">
                          <div class="navlinks">
                             <?php wp_nav_menu( array( 'theme_location' => 'f2_nav', 'container' => 'false', 'menu_id' => 'main-nav', 'menu_class' => 'menu') ); ?>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                       <div class="infoblock">
                          <p class="small color10">
                             <?php echo $hk_options['addft']; ?>
                          </p>
                          <p class="small color10">
                             <?php echo $hk_options['phoneft']; ?>
                          </p>
                          <p class="small color10">
                             <?php echo $hk_options['emailft']; ?>
                          </p>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="e-divider-5"></div>
           <div id="copyrights-wrapper" class="bg-color00">
              <div class="container">
                 <div class="copyright">
                    <?php echo $hk_options[copyr]; ?>
                 </div>
              </div>
           </div>
        </footer>
         <div id="back-top"><a href="#top"></a></div>
     </div>
  </div>

  <div id="image-cache" class="hidden"></div>
  <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/jquery/js/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/animatedheader/js/classie.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/animatedheader/js/cbpAnimatedHeader.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/sticky-scroll/js/jquery.stickit.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/custom/js/script.js" type="text/javascript"></script>
  <?php wp_footer(); ?>
  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
</body>
</html>
