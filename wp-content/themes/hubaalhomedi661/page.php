<?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?>
<!-- Main -->
<div id="main_area">
    	<div class="wrapper animatedParent animateOnce">
	<div class="main_holder">
    <div class="main_inner">
      <main>
      <?php if(!is_front_page()) { ?>
        <?php if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        } ?>
      <?php }?>
      <?php get_template_part( 'loop', 'page' );?>
      </main>
    </div>

	</div>
			<?php if ( is_front_page() ) { get_includes('sidebar'); } ?>
	<div class="clearfix"></div>
    	</div>
    </div>
  <!-- End Main -->
  <?php if ( is_front_page() ) { get_includes('bottom'); } ?>
<?php get_includes('footer');?>
