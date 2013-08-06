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
				<!-- Summer camp notice -->
				<div class="row">
					<div class="twelve columns announcements">
						<p>This summer, we are holding <em>two</em> summer camps targeting rising 4th&ndash;6th graders! One will be held at <strong>Highland Middle School</strong> from <strong>July 22&ndash;26</strong>, and the other will be held at <strong>Ardmore Elementary</strong> from <strong>August 5&ndash;9</strong>. If you are interested, please contact us by emailing <a href="mailto:publicrelations@saintsrobotics.com">publicrelations@saintsrobotics.com</a>.</p>
					</div>
				</div>

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
						<div class="twelve columns panel">
							<h2 class="panel-title">
								About
							</h2>
							<div class="panel-content">
								We are <strong>Saints Robotics</strong>, team 1899, a <a href="/first/about/" title="About FIRST"><i>FIRST</i></a> Robotics Competition (FRC) team based out of Interlake High School in Bellevue, Washington. We strive to engage students in the areas of science, technology, engineering, and mathematics (STEM) by allowing them to work on the construction of physical robots.
							</div>
						</div>
					</div>
					<?php /*<div class="row">
						<div class="three columns panel">
							<h2 class="panel-title">
								<i>FIRST</i>
							</h2>
							<div class="panel-content">
								<a href="/first/about/" title="About FIRST"><i>FIRST</i></a> (For Inspiration and Recognition of Science and Technology) is a non-profit organization based in Manchester, New Hampshire. Founded in 1989 by Inventor Dean Kamen and Professor Woodie Flowers, <i>FIRST</i> aims "to create a world where science and technology are celebrated&hellip; where young people dream of becoming science and technology heroes."
							</div>
						</div>
					</div>*/ ?>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>