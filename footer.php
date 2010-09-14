</div> 
<div id="footer-container">
	<div id="footer">
			<a href="<?php bloginfo('url') ?>"><div id="footer-logo"></div></a>
		<div id="footer-text">
			<p>
			Copyright &copy; 2006 – <?php echo date("Y") ?> <a href="<?php bloginfo('url') ?>">Family Frameworks, LLC</a><br />
			Site Designed and Hosted by <a href="http://mattrude.com/">Matt Rude</a>.<br />
			<?php if ( is_user_logged_in() ) { ?>
			This page took <?php timer_stop(1); ?> seconds of computer labor,<br/>
			and required <?php echo get_num_queries(); ?> questions to produce.
			<?php } ?>
			</p>
		</div>
		<div id="footer-address">
			<p>
			<?php global $Panel;
			$FooterAddressText = $Panel->Settings('AddressText');
			echo newline2br($FooterAddressText); ?>
			</p>
		</div>
	</div>
	<!--footer plugin hook-->
	<?php wp_footer(); ?>
</div><!--closing container -->
</div><!--closing body-container -->

<?php google_analytics(); ?>
<!--Closeing tags-->
</body>
</html>
