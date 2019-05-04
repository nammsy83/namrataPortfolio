<?php
$latte_skills_title = get_theme_mod('latte_skills_title',__( 'Skills', 'latte' ));
$latte_skills_subtitle = get_theme_mod('latte_skills_subtitle',__( 'Things that I\'m good at.', 'latte' ));
?>

<section class="skills" id="skillssection">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php if(!empty($latte_skills_title) || !empty($latte_skills_subtitle)) : ?>
				<header data-sr="ease-in-out wait 0.25s" class="skills-header">
					<?php if(!empty($latte_skills_title)) : ?>
						<h2><?php echo esc_html($latte_skills_title); ?></h2>
					<?php endif; ?>
					<?php if(!empty($latte_skills_subtitle)) : ?>
						<h3><?php echo esc_html($latte_skills_subtitle); ?></h3>
					<?php endif; ?>
				</header>
			<?php endif; ?>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-12" data-aos="fade-up">
			<div id="skillsbar" class="col-centered">
				<div class="skillbar clearfix " data-percent="100%">
					<div class="skillbar-title"><span>HTML5</span></div>
					<div class="skillbar-bar" style="background: #7ad8cd;"></div>
					<div class="skill-bar-percent">100%</div>
				</div>

				<div class="skillbar clearfix " data-percent="90%">
					<div class="skillbar-title"><span>CSS/SASS</span></div>
					<div class="skillbar-bar" style="background: #7ad8cd;"></div>
					<div class="skill-bar-percent">90%</div>
				</div>

				<div class="skillbar clearfix" data-percent="70%">
					<div class="skillbar-title"><span>JavaScript / jQuery</span></div>
					<div class="skillbar-bar" style="background: #7ad8cd;"></div>
					<div class="skill-bar-percent">70%</div>
				</div>
				<div class="skillbar clearfix" data-percent="55%">
					<div class="skillbar-title"><span>PHP</span></div>
					<div class="skillbar-bar" style="background: #7ad8cd;"></div>
					<div class="skill-bar-percent">55%</div>
				</div>
				<div class="skillbar clearfix" data-percent="65%">
					<div class="skillbar-title"><span>AngularJS</span></div>
					<div class="skillbar-bar" style="background: #7ad8cd;"></div>
					<div class="skill-bar-percent">65%</div>
				</div>
				<div class="skillbar clearfix" data-percent="80%">
					<div class="skillbar-title"><span>Wordpress</span></div>
					<div class="skillbar-bar" style="background: #7ad8cd;"></div>
					<div class="skill-bar-percent">80%</div>
				</div>
				<div class="skillbar clearfix" data-percent="70%">
					<div class="skillbar-title"><span>SEO</span></div>
					<div class="skillbar-bar" style="background: #7ad8cd;"></div>
					<div class="skill-bar-percent">70%</div>
				</div>
			</div>
		</div>
	</div>
</section>
