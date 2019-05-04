<?php
	$latte_about_title = get_theme_mod('latte_about_title',__( 'About Me', 'latte' ));
	$latte_about_subtitle = get_theme_mod('latte_about_subtitle',__( 'Here are some things that you should know about me.', 'latte' ));

	$latte_about_content = get_theme_mod('latte_about_content',__( '<p>
		   I\'m a front end developer who is passionate about building great user experiences. I\'m constantly learning and implementing fresh, innovative solutions for websites. </p>

		    <p>I have 13 years of experience as a developer starting out as a Graphic designer and then began designing/developing web sites back in 2007.</p>
		    <p> My expertise is in the area of building Wordpress websites, blogs, SPAs in Angular, Mobile-first and Responsive design. With every line of code, I strive to make the web a beautiful place.</p> 

		   ', 'latte' ));
?>

		<section class="about" id="about">
			<div class="container">
				<div class="row" data-aos="zoom-in-up">
				<?php if(!empty($latte_about_title) || !empty($latte_about_subtitle)) : ?>
					<header data-sr="ease-in-out wait 0.25s" class="about-header">
					<?php if(!empty($latte_about_title)) : ?>
						<h2><?php echo esc_html($latte_about_title); ?></h2>
					<?php endif; ?>
					<?php if(!empty($latte_about_subtitle)) : ?>
						<h3><?php echo esc_html($latte_about_subtitle); ?></h3>
					<?php endif; ?>
					</header>
				<?php endif; ?>
			
				<?php if(!empty($latte_about_avatar)) : ?>
					<div data-sr="enter right wait 0.25s" class="col-md-12">
				<?php else: ?>
					<div data-sr="enter top wait 0.25s" class="col-md-12">
				<?php endif; ?>
					
					
					<?php if(!empty($latte_about_content)) : ?>
						<div class="lead"><?php echo wp_kses_post($latte_about_content); ?></div>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
