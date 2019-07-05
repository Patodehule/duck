<?php get_header(); ?>
<section id="slide" >
	<div class="container-fluid">
			<div class="social-duck" >
					<ul data-0="transform:rotate(0deg);" data-100="transform:rotate(360deg);">
						<li><a href="#"><i class="fab fa-behance"></i></a></li>
						<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
	</div>
		<?php putRevSlider( 'pato' ); ?>
	</div>
</section>

<section id="services">
	<div class="row">
			<div class="col-md-6">

			</div>
			<div class="col-md-6">
			
			</div>
	</div>
</section>

<?php get_template_part( 'parts/portfolio'); ?>
<?php get_template_part( 'parts/blog'); ?>


<?php echo do_shortcode( '[html5_shortcode_demo]' ); ?>

<?php get_footer(); ?>
