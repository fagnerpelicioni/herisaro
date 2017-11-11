<link href='https://fonts.googleapis.com/css?family=Athiti' rel='stylesheet'>


                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                              <?php the_post_thumbnail('medium', ['class' => 'img-responsive']); ?>

                        </div>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="text-uppercase margin-l-20"><?php the_field('disponibilidade'); ?></span></h4>
                        <p><?php the_excerpt(); ?>
                          <h4>R$<?php the_field('preco'); ?></h4>
                        </p>
                        <a class="link" href="<?php the_permalink(); ?>">Mais Detalhes</a>
                    </div>
                    <!-- End Latest Products -->
