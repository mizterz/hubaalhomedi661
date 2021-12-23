<!-- Start Footer -->
  <footer>
    <div class="footer_top">
      <div class="wrapper animatedParent animateOnce">
        <div class="footer_top_main">
          <div class="ft_info">
            	<?php dynamic_sidebar('ft_info');?>
          </div>
          <div class="contact_info">
            <div class="contact_box1 animated zoomIn delay-250">
              <?php dynamic_sidebar('contact_box1');?>
            </div>
            <div class="contact_box2 animated zoomIn delay-500">
              <?php dynamic_sidebar('contact_box2');?>
            </div>
            <div class="contact_box3 animated zoomIn delay-750">
              <?php dynamic_sidebar('contact_box3');?>
            </div>
          </div>
        </div>
        	<div class="clearfix"></div>
      </div>
    </div>

    <div class="footer_btm">
      <div class="wrapper animatedParent animateOnce">
        <div class="footer_logo">
          <a href="<?php echo get_home_url(); ?>"><figure><img src="<?php bloginfo('template_url');?>/images/footer-logo.png" alt="<?php echo get_bloginfo('name');?>"/></figure></a>
        </div>
        <div class="footer_btm_main">

          <div class="footer_nav">
            <?php wp_nav_menu( array( 'theme_location' => 'secondary') ); ?>
          </div>
          <div class="clearfix"> </div>
          <div class="ft_serv_area">
            <?php dynamic_sidebar('ft_serv_area');?>
          </div>
          <div class="copyright">
            &copy; Copyright
            <?php
            $start_year = '2021';
            $current_year = date('Y');
            $copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
            echo $copyright;
            ?>
          </div>
        </div>
        	<div class="clearfix"></div>
      </div>
      </div>
  </footer>

<span class="back_top"></span>

</div> <!-- End Clearfix -->
</div> <!-- End Protect Me -->

<?php get_includes('ie');?>

<!--
Solved HTML5 & CSS IE Issues
-->
<script src="<?php bloginfo('template_url');?>/js/modernizr-custom-v2.7.1.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery-2.1.1.min.js"></script>

<!--
Solved Psuedo Elements IE Issues
-->

<script src="<?php bloginfo('template_url');?>/js/calcheight.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.skitter.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/css3-animate-it.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/responsiveslides.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/plugins.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
<!-- End Footer -->
