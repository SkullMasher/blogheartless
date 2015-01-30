<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Heartless
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!-- <span class="sep"> | </span> -->
			<?php printf( __( 'Theme %1$s made with %2$s', 'heartless' ), 'Heartless', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			<br>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'heartless' ) ); ?>"><?php printf( __( '%s FTW !', 'heartless' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
