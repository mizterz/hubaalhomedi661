<!-- Banner -->
<div id="banner">
<div class="wrapper animatedParent animateOnce">
	<?php if (is_front_page() ) { ?>
	<div class="bnr_main">
	<div class="slider">
<div class="box_skitter box_skitter_large">
		<ul>
			<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/1.jpg" class="random"  alt="caregiver and senior man with wheelchair"/></figure></li>
			<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/2.jpg" class="random"  alt="caregiver serving a meal to senior woman"/></figure></li>
			<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/3.jpg" class="random"  alt="caregiver and senior woman are smiling"/></figure></li>
			<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/4.jpg" class="random"  alt="caregiver and senior woman having a conversation"/></figure></li>
		</ul>
	</div>
	<ul class="rslides">
		<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/1.jpg" alt="caregiver and senior man with wheelchair"/></figure></li>
		<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/2.jpg" alt="caregiver serving a meal to senior woman"/></figure></li>
		<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/3.jpg" alt="caregiver and senior woman are smiling"/></figure></li>
		<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/4.jpg" alt="caregiver and senior woman having a conversation"/></figure></li>
	</ul>
  </div>
  <div class="bnr_info animated fadeInRight">
				<?php dynamic_sidebar('bnr_info');?>
  </div>
	</div>
	 <?php } else {?>
		<div class="non_ban">
			<figure>
			<?php if(is_home() && is_author() && is_category() && is_tag() && is_single()) { ?>
			<?php if (has_post_thumbnail() ) {?>
			<?php the_post_thumbnail('full');?>
			<?php }else{ ?>
			<img src="<?php bloginfo('template_url');?>/images/slider/nonhome-63444644.jpg" alt="caregiver and senior man are smiling" />
			<?php } ?>
			<?php } elseif (has_post_thumbnail() ) { ?>
			<?php the_post_thumbnail('full');?>
			<?php } else { ?>
			<img src="<?php bloginfo('template_url'); ?>/images/slider/nonhome-63444644.jpg" alt="caregiver and senior man are smiling">
			<?php } ?>
			</figure>
			<div class="page_title">
				<?php if(!is_home() && !is_author() && !is_category() && !is_tag() && !is_single()) { ?>
					<h1 class="h1_title"><?php the_title(); ?></h1>
					<?php echo do_shortcode("[short_title id='" . get_the_ID() . "']"); ?>
				<?php } else { ?>
					<h1 class="headings_title">Blog</h1>
				<?php } ?>
			</div>
		</div>

		<?php }?>
	<div class="clearfix"></div>
</div>
</div>
<!-- End Banner -->
