<?php
/**
 * The template for displaying the front page of the website.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<!-- Slideshow -->
				<div class="slider-wrapper theme-dark">
					<div id="slider" class="nivoSlider row">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slideshow/2013/robot-blue-crop.jpg" alt="" />
						<img src="<?php echo get_template_directory_uri(); ?>/img/slideshow/2013/robot-red-crop.jpg" alt="" />
						<img src="<?php echo get_template_directory_uri(); ?>/img/slideshow/2013/build-season-crop.jpg" alt="" />
						<img src="<?php echo get_template_directory_uri(); ?>/img/slideshow/2013/drive-team-crop.jpg" alt="" />
						<img src="<?php echo get_template_directory_uri(); ?>/img/slideshow/2013/northwest-harvest-crop.jpg" alt="" />
					</div>
				</div>

				<div class="front-content">
					<div class="row">
						<div class="eight columns panel">
							<h2 class="panel-title">
								About
							</h2>
							<div class="panel-content">
								We are <strong>Saints Robotics</strong>, team 1899, a <a href="/first/about/" title="About FIRST"><i>FIRST</i></a> Robotics Competition (FRC) team based out of Interlake High School in Bellevue, Washington. We strive to engage students in the areas of science, technology, engineering, and mathematics (STEM) by allowing them to work on the construction of physical robots.
							</div>
						</div>
					</div>
					<div class="row">
						<div class="four columns panel">
							<h2 class="panel-title">
								<i>FIRST</i>
							</h2>
							<div class="panel-content">
								<a href="/first/about/" title="About FIRST"><i>FIRST</i></a> (For Inspiration and Recognition of Science and Technology) is a non-profit organization based in Manchester, New Hampshire. Founded in 1989 by Inventor Dean Kamen and Professor Woodie Flowers, <i>FIRST</i> aims "to create a world where science and technology are celebrated&hellip; where young people dream of becoming science and technology heroes."
							</div>
						</div>
						<div class="four columns panel">
							<h2 class="panel-title">
								Current FRC Competition: Ultimate Ascent
							</h2>
							<div class="panel-content">
								This year's competition, <a href="/first/2013-competition/" title="2013 Competition: Ultimate Ascent">Ultimate Ascent</a>, is a combination of ultimate frisbee and ascending a pyramid. Two teams of three alliances each aim to outscore the other by earning as many points as possible in the autonomous and teleoperated periods of a match.
							</div>
						</div>
						<div class="four columns panel">
							<h2 class="panel-title">
								Helping Hounds
							</h2>
							<div class="panel-content">
								Our <a href="/community/" title="Helping Hounds Program">Helping Hounds Program</a> is our club's community service program. Through various fundraisers, science fairs, and other outreach activities, we have actively promoted STEM in our community and beyond.
							</div>
						</div>
					</div>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>