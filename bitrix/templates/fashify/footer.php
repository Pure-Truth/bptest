</div>
</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php// $enable_staff_picks = get_theme_mod( 'fashify_staff_picks', '' ) ;

		//if ( $enable_staff_picks == true ) {
		//	get_template_part( 'template-parts/content', 'staff' );
		//}

		?>

		<?php// if ( is_active_sidebar( 'footer' ) ) { ?>
		<div class="footer-widgets">
			<div class="container">
				<div class="footer-inner">
					<?php
						//	dynamic_sidebar( 'footer' );
					?>
				</div>
			</div>
		</div>
		<?php// } ?>

		<div class="site-info">
			<div class="container">

				<div class="site-copyright">
					<?php printf(html_entity_decode( 'Copyright &copy; '.date('Y').' '.$siteName.' All Rights Reserved.')); ?>
				</div>


				<?php// do_action('fashify_theme_info'); ?>


			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/navigation.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/assets/js/skip-link-focus-fix.js"></script>

</body>
</html>
