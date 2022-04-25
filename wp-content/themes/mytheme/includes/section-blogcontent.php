<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
        $firstName = get_the_author_meta('first_name');
        $lastName = get_the_author_meta('last_name');
        ?>
        Posted By <?php echo $firstName . " " . $lastName ?> and created on <?php echo get_the_date('l jS F, Y'); ?>
        <?php the_content() ?>

        <?php
        $tags = get_the_tags();

        foreach ($tags as $tag) :

        ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge bg-secondary text-decoration-none p-2 ">
                <?php echo $tag->name; ?>
            </a>
        <?php endforeach; ?>

        <?php
        $categories = get_the_category();

        foreach ($categories as $cat) :

        ?>

            <a href="<?php echo get_tag_link($cat->term_id); ?>" class="badge bg-primary text-decoration-none p-2 ">
                <?php echo $cat->name; ?>
            </a>

        <?php endforeach; ?>

        <?php //comments_template(); ?>

<?php endwhile; else : endif; ?>