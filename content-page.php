<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Toolbox
 * @since Toolbox 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="row">
			<div class="twelve columns">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="row">
			<div class="twelve columns">
				<?php the_content(); ?>
			</div>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
			<?php //edit_post_link( __( 'Edit', 'toolbox' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
