<?php get_header(); ?>


<div class="content-page">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_title(); ?>
                <br>
                <br>
                <?php the_content(); ?>
                <br>
                <br>
                <?php if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>