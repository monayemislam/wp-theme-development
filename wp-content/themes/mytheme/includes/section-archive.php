<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="card mb-2">
  <div class="card-body">
  <h3><?php the_title() ?></h3>
    <p class="card-text"><?php the_excerpt() ?>.</p>
    <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">Read More</a>
  </div>
</div>    
    

<?php endwhile; else: endif; ?>