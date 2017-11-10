<div class="container">
  <div class="row">
    <article class="blog-card">
  <div class="photo photo1"></div>
  <ul class="details">
    <li class="author"><?= __('Por', 'sage'); ?>
      <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="author-name"><?= get_the_author(); ?></a></li>
    <li class="date"><?= get_the_date(); ?></li>
    <li class="tags">
      <ul>
        <li><a href="#">Learn</a></li>
        <li><a href="#">Code</a></li>
        <li><a href="#">HTML</a></li>
        <li><a href="#">CSS</a></li>
      </ul>
    </li>
  </ul>
  <div class="description">
    <h1><?php the_title(); ?></h1>
    <h2>Opening a door to the future</h2>
    <div class="summary"><?php the_excerpt(); ?></div>
    <a href="<?php the_permalink(); ?>">Leia Mais</a>
  </div>
</article>
  </div>
</div>
