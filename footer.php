<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pasol
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="footer-container">
  	 	<div class="footer-row">
		   <div class="footer-col site-footer__logo">
				<?php the_custom_logo();  ?>
			</div>
  	 		<div class="footer-col">
  	 			<h4>Support</h4>
  	 			<?php
					$support_links = create_links(
						'Contact Us', 'https://www.example.com/contact',
						'FAQs', 'https://www.example.com/faqs',
						'Shipping & Returns', 'https://www.example.com/docs'
					);
					echo $support_links;
				?>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>about</h4>
  	 			<?php
					$about_links = create_links(
						'About Us', 'https://www.example.com/contact',
						'Our Partners', 'https://www.example.com/faqs',
						'Reef Planting', 'https://www.example.com/docs',
						'Tree Planting', 'https://www.example.com/docs'
					);
					echo $about_links;
				?>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>legal</h4>
  	 			<?php
					$legal_links = create_links(
						'Terms Of Use', 'aa',
						'Privacy Policy', 'https://www.example.com/faqs',
						'Subscrition Policy', 'https://www.example.com/docs',
						'Accessibility', 'https://www.example.com/docs'
					);
					echo $legal_links;
				?>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Keep In Touch</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
		<div class="footer-row-copyright" style="background-color:#f4eedfff">
			<p> © <?php echo date('Y'); ?> PASOL SKINCARE PRODUCTS S.L. All right reserved.</p>
		</div>
  	 </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
