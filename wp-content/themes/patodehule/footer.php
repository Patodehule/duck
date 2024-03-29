			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>

	<!--[if lt IE 9]>
	<script type="text/javascript" src="../skrollr-ie/dist/skrollr.ie.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
	var s = skrollr.init({
		edgeStrategy: 'set',
		easing: {
			WTF: Math.random,
			inverted: function(p) {
				return 1-p;
			}
		}
	});
	</script>

	</body>
</html>
