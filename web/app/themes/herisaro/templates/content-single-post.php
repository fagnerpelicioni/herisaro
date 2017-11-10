<section class="posts">

<?php while (have_posts()) : the_post(); ?>
  <article class="article">
    <header>
    <div class="category">Vida</div>
      <h1 class="headline"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <p><?php the_content(); ?><p>

    </div>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

</section>
