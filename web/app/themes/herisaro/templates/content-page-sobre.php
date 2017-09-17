
<section class="about-section">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3><?php the_title( ); ?></h3>
        <?php the_content(); ?>
        <a href="#" class="btn btn-transparent">Explore More</a>
      </div>
      <div class="col-md-6 pull-right image-sec">
        <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" >
      </div>
    </div>
  </div>
</section> 
