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
				<div class="slider-wrapper">
					<div class="slider">
						<ul>
							<li style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slideshow/2013/robot-blue-small.jpg');"></li>
							<li style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slideshow/2013/robot-red-small.jpg');"></li>
							<li style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slideshow/2013/build-season-small.jpg');"></li>
							<li style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slideshow/2013/drive-team-small.jpg');"></li>
							<li style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slideshow/2013/northwest-harvest-small.jpg');"></li>
						</ul>
					</div>
				</div>

				<div class="front-content">
					<div class="row">
						<div class="four columns">
							<div class="front-primary">
								We are <strong>Saints Robotics</strong>, <strong>Team 1899</strong>, a <strong><a href="/first/about/"><i>FIRST</i></a> Robotics Competition</strong> team based out of Interlake High School in <strong>Bellevue, Washington</strong>. We strive to engage students in the areas of science, technology, engineering, and mathematics by allowing them to work on the construction of physical robots.
							</div>
						</div>
						<div class="eight columns">
							<div id="js-google-maps-school" class="google-maps google-maps-school"></div>
						</div>
					</div>
					<div class="row">
						<div class="four columns infobox">
							<h2 class="infobox-title">
								<i>FIRST</i>
							</h2>
							<div class="infobox-content">
								<a href="/first/about/" title="About FIRST"><i>FIRST</i></a> (For Inspiration and Recognition of Science and Technology) is a non-profit organization based in Manchester, New Hampshire. Founded in 1989 by Inventor Dean Kamen and Professor Woodie Flowers, <i>FIRST</i> aims "to create a world where science and technology are celebrated&hellip; where young people dream of becoming science and technology heroes."
							</div>
						</div>
						<div class="four columns infobox">
							<h2 class="infobox-title">
								FRC Competition
							</h2>
							<div class="infobox-content">
								This year's <i>FIRST</i></a> Robotics Competition (FRC) game, <a href="/first/2013-competition/">Ultimate Ascent</a>, is a combination of ultimate frisbee and ascending a pyramid. Two teams of three alliances each aim to outscore the other by earning as many points as possible in the autonomous and teleoperated periods of a match.
							</div>
						</div>
						<div class="four columns infobox">
							<h2 class="infobox-title">
								Helping Hounds
							</h2>
							<div class="infobox-content">
								Our <a href="/community/">Helping Hounds Program</a> is our club's community service program. Through various demonstrations, <a href="/community/stemming-knowledge/#Science_Fairs">science fairs</a>, and other outreach activities, we have actively promoted STEM in our community and beyond. Our goal is to encourage and inspire students to pursue future careers in STEM.
							</div>
						</div>
					</div>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>