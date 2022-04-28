<?php get_header(); ?>

<section class="page-wrapper">
    <div class="container">

    <div class="row">
    <div class="col-md-4">
        <?php if (is_active_sidebar('blog-sidebar')) : ?>
            <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php endif; ?>
    </div>
    <div class="col-md-8">
    <h1>Category :  <?php echo single_cat_title() ?></h1>

<?php get_template_part('includes/section', 'archive'); ?>
<?php previous_posts_link();?>
<?php next_posts_link();?>
    </div>
</div>

        

    </div>
</section>
<?php get_footer(); ?>