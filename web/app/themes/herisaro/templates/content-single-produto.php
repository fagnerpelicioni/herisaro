</div>
</div>
</div>
<section class="product-sec" id="product">

<?php while (have_posts()) : the_post(); ?>
  <div class="container latest-product-section caixa text-center">
    <header>
      <h1><?php the_title(); ?></h1>
      <h2><?php the_excerpt(); ?></h2>
    </header>
      <span class="text-uppercase margin-l-20"><?php the_field('disponibilidade'); ?></span>
      <h4>R$<?php the_field('preco'); ?></h4>
      <div class="img-responsive">

      <?php the_post_thumbnail('full'); ?>

      </div>
      <div class="row">

      <div class="col-md-6 col-md-offset-3">
        <p><?php the_content(); ?></p>
      </div>

    </div>
      <?php
      $images = get_field('fotos');
      $size = 'full';
      if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
                <li>
                	<?php echo '<p>'. wp_get_attachment_image( $image['ID'], $size ) .'</p>'; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <hr>
  </article>
<?php endwhile; ?>
</section>
