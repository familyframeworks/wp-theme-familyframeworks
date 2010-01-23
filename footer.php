</div> 
<div id="footer-container">
	<div id="footer">
		<div id="footer-logo">
			<a href="<?php bloginfo('url') ?>">
				<img src="<?php bloginfo('template_url') ?>/images/ff_logo_only-1.png" alt="Logo" />
			</a>
		</div>
		<div id="footer-text">
			<p>
			Copyright &copy; 2006 – <?php echo date("Y") ?> <a href="<?php bloginfo('url') ?>">Family Frameworks, LLC</a><br />
			Site Designed and Hosted by <a href="http://mattrude.com/">Matt Rude</a>.<br />
			</p>
		</div>
		<div id="footer-address">
			<p>
			<?php global $Panel; ?>
			<?php $FooterAddressText = $Panel->Settings('AddressText'); ?>
			<?php echo $FooterAddressText; ?>
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
