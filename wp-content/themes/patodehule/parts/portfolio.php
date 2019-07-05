<?php 
$args = array(
	'post_type' => 'portfolio',
	'posts_per_page'=> 10,
);
$portfolio = new WP_Query($args);
?>

<section id="portfolio">
		<div class="container">
				<div class="row">
				 
						<div class="col-md-12">
							<div class="btns-portfolio">
							
            <button class="btn btn-portfolio filter-button" data-filter="all">All</button>
						 <?php while($portfolio->have_posts()) : $portfolio->the_post(); ?>
							 <?php  $term_list = wp_get_post_terms($post->ID, 'categorias', array("fields" => "all")); 
							 foreach($term_list as $term_single) {
								 $term_cache = $term_single->name;
								 if ($term_list == $term_cache) {
									 echo $term_single->name ; //do something here
								 }
								}
							 
							 ?>
							 <?php endwhile; ?> 
            <button class="btn btn-portfolio filter-button" data-filter="Branding">Branding</button>
            <button class="btn btn-portfolio filter-button" data-filter="Packaking">Packaking</button>
            <button class="btn btn-portfolio filter-button" data-filter="Web">Web</button>
        </div>
								<div class="duck_proyects">
								<?php 
								 while($portfolio->have_posts()) : $portfolio->the_post();
								 $miniatura = get_field('miniatura');
								 $term_list = wp_get_post_terms($post->ID, 'categorias', array("fields" => "all"));
								?>
								
									<figure class="filter <?php echo $term_list[0]->name ; ?>" >
										<img src="<?php echo $miniatura['url']; ?>">
										<figure-caption>
											<figure-title>
												<h2><?php the_title(); ?></h2>
												<span><?php echo $term_list[0]->name; ?></span>
											</figure-title>
										</caption>
									</figure>
								
								<?php endwhile; ?>   	
								</div>
									</div>
						</div>
				</div>
		</div>
</section>

