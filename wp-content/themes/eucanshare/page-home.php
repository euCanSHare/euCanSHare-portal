<?php
/**
 * Template Name: page-home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fdg
 */
 
get_header(); ?>

<!-- **************** SLIDER **************** -->
<div id="home">

        <?php  include("inc/slideshow.php");  ?>
        <?php  include("inc/slideshowMobile.php");  ?>
	<?php get_template_part("inc/news"); ?>
	<?php  include("inc/social.php"); ?>	

<section class="breakpage quick-contact">
	<div class="wrapper cf">
		
		<div class="item">
			<i class="far fa-address-card "></i>
			<div class="content"><b>Universitat de Barcelona</b><br>Gran Via de les Corts Catalanes, 585<br>08007 Barcelona, Spain</div>
		</div>

		<div class="item">
			<i class="fas fa-phone"></i>
			<div class="content">+34 93402</div>
		</div>

		<div class="item">
			<i class="fas fa-envelope-open-text"></i>
			<div class="content"> <a href="mailto:info@eucanshare.eu">info@eucanshare.eu</a></div>
		</div>
		
	</div>
</section>	

<?php  include("inc/slider_clienti.php"); ?>
	

<section class="breakpage rss-container">
	<div class="wrapper cf">
		<div class="title">EC EUROPA</div>
		<?php echo t5_feed_shortcode($attrs); ?>
	</div>
</section>	



<section class="breakpage">
	<div class="wrapper">
		<div class="banner europe"><p>This project has received funding from the European Union's Horizon 2020 research and innovation programme under grant agreement No 825903</p></div>
		<div class="banner canada"><p>All Canadian project partners have been funded by the Canadian Institutes of Health Research and the Fonds de recherche du Québec- Santé</p></div>
	</div>
</section>	

</div>


<?php get_footer(); ?>