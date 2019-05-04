<?php get_header(); ?>


 	
		<section class="archive-header intro canvas" id="pt">
			<canvas id="canvas" width="1440" height="789" style="width: 1440px; height: 789px;"></canvas>
			<div class="cover-container row">
				<div class="inner cover col-md-12">
					<div class="avatar" style="background-image:url('<?php bloginfo('stylesheet_directory'); ?>/assets/images/profile-pic.png');"></div>
					<h1 class="cover-heading">Hello, I'm Namrata Subhedar</h1>
					<p class="desc">I'm a front end developer</p>
					<a href="#about" class="arrow"><i class="fa fa-arrow-circle-down"></i></a>
				</div>
			</div>
		</section>

	
		<div class="container blog">
			<div class="row">
			<?php
				$theme_layout = get_theme_mod( 'latte_blog_sidebar', 'full' );
				if ($theme_layout=="left") :
					get_sidebar();
				endif;
			?>
			<?php if ($theme_layout=="full") : ?>
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<?php else: ?>
				<div class="col-lg-8 col-md-8">
			<?php endif; ?>
		
				</div>
			</div>
		</div>
<?php include('sections/about.php');?>
<?php include('sections/portfolio.php');?>
<?php include('sections/skills.php');?>
<?php include('sections/contact.php');?>


<?php get_footer(); ?>