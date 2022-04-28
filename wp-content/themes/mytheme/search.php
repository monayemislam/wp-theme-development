<?php get_header(); ?>

<section class="page-wrapper">
    <div class="container">
        <h4 class="mb-3">Search Results for '<span class="text-success"><?php the_search_query();?></span>'</h4>
        <?php get_template_part('includes/section', 'searchresults'); ?>
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
</section>
<?php get_footer(); ?>