			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

  <!-- super fresh analytics -->
  <script>
    !function(t,r,k,S,T,A,R){t.GoogleAnalyticsObject=k;t[k]||(t[k]=function(){
    (t[k].q=t[k].q||[]).push(arguments)});t[k].l=+new Date;A=r.createElement(S);
    R=r.getElementsByTagName(S)[0];A.src=T;R.parentNode.insertBefore(A,R)}
    (window,document,'ga','script','//www.google-analytics.com/analytics.js');

    ga('create', 'UA-29923838-10', 'auto');
    ga('send', 'pageview');
  </script>

	</body>
</html>
