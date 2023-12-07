<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-7">
                    <div class="hero__inner">
                        <?php
                        $hero_title = get_field('hero_title');
                        $hero_subtitle = get_field('hero_subtitle');
                        $hero_highlighted_subtitle_indexes = get_field('hero_select');
                        $hero_highlighted_subtitle = indexes_to_words($hero_subtitle, $hero_highlighted_subtitle_indexes);
                        ?>
                        <p class="hero__subtitle"><?= get_highlighted_text($hero_subtitle, $hero_highlighted_subtitle); ?></p>
                        <h1 class="hero__title"><?= $hero_title ?></h1>
                        <a href="#" class="btn">Read More</a>
                        <a href="#" class="hero__scroll">Scroll Down to Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-me">
                        <h3>About Me</h3>
                        <img src="<?= assets("img/about.jpg") ?>" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum in vel massa donec sit. Mi ut risus sem malesuada ornare. Ac eu erat eget et lorem est arcu. Gravida hendrerit sit blandit semper lacus. Nulla amet suscipit sit lectus tortor. Dolor non eget suspendisse leo scelerisque sed d.</p>
                        <a href="#" class="btn btn--small">Read More</a>
                    </div>

                    <div class="categories">
                        <h3 class="categories__title">Categories</h3>
                        <ul class="categories__list">
                            <?php
                            // Get the categories excluding the "Uncategorized" category
                            $categories = get_categories(array('exclude' => get_cat_ID('Без категорії')));

                            foreach ($categories as $category) {
                                $category_link = get_category_link($category->cat_ID);
                                $category_count = $category->category_count;

                                echo '<li><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a> <span>(' . esc_html($category_count) . ')</span></li>';
                            }
                            ?>
                        </ul>
                    </div>


                    <div class="recent-post">
                        <h3 class="recent-post__title">Recent Post</h3>

                        <div class="recent-post__list">
                            <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                            );

                            $recent_posts = new WP_Query($args);

                            if ($recent_posts->have_posts()) :
                                while ($recent_posts->have_posts()) : $recent_posts->the_post();
                            ?>
                                    <a href="<?php the_permalink(); ?>" class="recent-post__item">
                                        <div class="recent-post__item-img">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('full');
                                            } else {
                                                echo '<img src="' . get_template_directory_uri() . '/frontend/img/post.jpg" alt="">';
                                            }
                                            ?>
                                        </div>
                                        <div class="recent-post__item-info">
                                            <p class="recent-post__item-date"><?php echo get_the_date('F j, Y'); ?>
                                                -
                                                <?php
                                                $tags = get_the_tags();
                                                if ($tags) {

                                                    foreach ($tags as $tag) {
                                                        echo esc_html($tag->name);
                                                    }
                                                }
                                                ?></p>
                                            <h5 class="recent-post__item-title"><?php the_title(); ?></h5>
                                        </div>
                                    </a>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo 'No recent posts found.';
                            endif;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="posts">
                        <?php
                        $args = array(
                            'posts_per_page' => 5,
                            'orderby'        => 'comment_count',
                            'order'          => 'DESC',
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                                <a href="<?php the_permalink(); ?>" class="posts__item">
                                    <div class="posts__item-img">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full');
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/frontend/img/post.jpg" alt="">';
                                        }
                                        ?>
                                    </div>

                                    <div class="posts__item-inner">
                                        <p class="posts__item-date"><?php echo get_the_date('F j, Y'); ?>
                                            -
                                            <?php
                                            $tags = get_the_tags();
                                            if ($tags) {

                                                foreach ($tags as $tag) {
                                                    echo esc_html($tag->name);
                                                }
                                            }
                                            ?>
                                        </p>
                                        <h4 class="posts__item-title"><?php the_title(); ?></h4>
                                        <p class="posts__item-description"><?php echo get_the_excerpt(); ?></p>

                                        <div class="posts__item-bottom">
                                            <?php
                                            $place = get_post_meta(get_the_ID(), 'place', true);
                                            if (!empty($place)) {
                                                echo '<p class="posts__item-location">' . esc_html($place) . '</p>';
                                            }
                                            ?>
                                            <p class="posts__item-comment">Comment (<?php echo get_comments_number(); ?>)</p>
                                        </div>

                                    </div>
                                </a>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo 'No posts found.';
                        endif;
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?= get_template_part('template-parts/blocks/follow'); ?>

    <?= get_template_part('template-parts/blocks/subscribe'); ?>

</main>

<?php get_footer(); ?>