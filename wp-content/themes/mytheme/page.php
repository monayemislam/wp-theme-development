<?php get_header(); ?>

<section class="page-wrapper">
    <div class="container">



        <div class="row">
            <div class="col-md-4">
                <?php if (is_active_sidebar('page-sidebar')) : ?>
                    <?php dynamic_sidebar('page-sidebar'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-8">
                <h1><?php the_title() ?></h1>
                <?php get_template_part('includes/section', 'content'); ?>
            </div>
        </div>


    </div>
</section>


<?php get_footer(); ?>