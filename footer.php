<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div class="row">
			<div class="eight columns">
				<small class="copyright">
					&copy;&nbsp;<?php echo date('Y'); ?> Saints Robotics. All rights reserved.
				</small>
			</div>
			<div class="four columns footer-icons">
				<a class="webicon facebook" href="https://www.facebook.com/saintsrobotics">Facebook</a>
				<a class="webicon twitter" href="https://twitter.com/sr1899">Twitter</a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); // JavaScript files are located in functions.php ?>

</body>
</html>