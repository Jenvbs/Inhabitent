<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inhabitent
 */
///RENDERS BLOGS
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog-post-header">
	<header class="entry-header">
	<?php the_post_thumbnail('full'); ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				the_date(); ?>/<?PHP comments_number();?> / <?php inhabitent_posted_by();?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	</div>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'inhabitent' ),
			'after'  => '</div>',
		) );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer-journal">
		<?php inhabitent_entry_footer(); ?>
		<div class="social-buttons">
		<button type="button" class="black-btn"><i class="fab fa-facebook-f"></i>Like</button>
		<button type="button" class="black-btn"><i class="fab fa-twitter"></i>Tweet</button>
		<button type="button" class="black-btn"><i class="fab fa-pinterest"></i>Pin</button>
		</div>

	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
