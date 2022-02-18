<?php
/**
 * Footer template
 * 
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * 
 * @package cit
 */
?>
	</div><!-- #content -->
	
	<!-- FOOTER -->
	<?php Utils::get_template( 'components/footer', ); ?>

</div><!-- #page -->
<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Filter component [NOT REMOVE] -->
<input type="hidden" id="endpoint" value="<?= site_url(); ?>">

</body>
	
</html>