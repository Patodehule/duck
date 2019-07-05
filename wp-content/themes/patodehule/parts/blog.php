<?php 
$args = array(
		'posts_per_page'=> 3,
);
$blog = new WP_Query($args);
?>
<section id="blog">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Blog</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 blog-items ">
        <?php  while($blog->have_posts()) : $blog->the_post();
        endwhile;
        ?>
      <?php for ($t=1; $t<=3; $t++){?>
          
            <div class="blog-item">
              <a href="#">
              <picture>
                <img src="<?php ruta(); ?>/img/blog/<?php echo 'b'. $t .'.jpg'; ?>" alt="">
              </picture>
              <h3 class="blog-item-title">Titulo <?php echo $t; ?></h3>
              <p>Texto de blog que contiene texto y mucho más, usarlo como guia visual</p>
               </a>
            </div>
         
          <?php }; ?>
      </div>
    </div>
  </div>
</section>