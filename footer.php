<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ExamGeekhubWP
 */

?>
<!---->
<!--	</div><!-- #content -->
<!---->
<!--	<footer id="colophon" class="site-footer">-->
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'examgeekhubwp' ) ); ?><!--">-->
<!--				--><?php
//				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'examgeekhubwp' ), 'WordPress' );
//				?>
<!--			</a>-->
<!--			<span class="sep"> | </span>-->
<!--				--><?php
//				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'examgeekhubwp' ), 'examgeekhubwp', '<a href="http://underscores.me/">Underscores.me</a>' );
//				?>
<!--		</div>-->
<!--	</footer>-->
<!--</div>-->

<footer>
    <div class="container">
        <div class="footer-part1">
            <?php the_custom_logo($blog_id); ?>
            <div class="search">
                <p>
                    sign up our newsletter
                </p>
                <i class="far fa-envelope"></i>
            </div>
        </div>
        <div class="footer-part1">
            <p>
                © <?php echo date( 'Y') ?> MI Talent. Designed by Tranmautritam for Mass Impressions.
            </p>
            <div class="social-icons">
                <a href="https://www.facebook.com/" class="header-icons fab fa-facebook"></a>
                <a href="https://twitter.com/?lang=uk" class="header-icons fab fa-twitter"></a>
                <a href="" class="header-icons fab fa-instagram"></a>
                <a href="https://www.behance.net/" class="header-icons fab fa-behance"></a>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
