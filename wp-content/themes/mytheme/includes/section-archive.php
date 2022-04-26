<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="card mb-2">
      <div class="card-body">

        <div class="d-flex flex-row">
          <?php if (has_post_thumbnail()) : ?>

            <img src="<?php the_post_thumbnail_url('blog-small'); ?>" class="img-fluid img-thumbnail">

          <?php endif; ?>
          <div class="ms-3">
            <h3><?php the_title() ?></h3>
            <p class="card-text"><?php the_excerpt() ?>.</p>
            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>


      </div>
    </div>


<?php endwhile;
else : endif; ?>