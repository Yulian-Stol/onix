<?php
function get_destination_posts_callback()
{
    $category = isset($_POST['category']) ? $_POST['category'] : '';

    $args = array(
        'post_type'      => 'destination',
        'posts_per_page' => 6,
    );

    if (!empty($category)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'destination-cat',
                'field'    => 'slug',
                'terms'    => $category,
            ),
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
?>
            <a href="<?php the_permalink(); ?>" class="blog__item">
                <div class="blog__item-img">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('full');
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/frontend/img/post.jpg" alt="">';
                    }
                    ?>
                </div>

                <div class="blog__item-inner">
                    <p class="blog__item-date"><?php echo get_the_date('F j, Y'); ?>
                        -
                        <?php

                        $terms = wp_get_post_terms(get_the_ID(), 'destination-tag');

                        if ($terms) {
                            foreach ($terms as $term) {
                                echo $term->name;
                            }
                        }
                        ?>
                    </p>
                    <h4 class="blog__item-title"><?php the_title(); ?></h4>
                    <p class="blog__item-description"><?php echo get_the_excerpt(); ?></p>

                    <div class="blog__item-bottom">
                        <?php
                        $place = get_post_meta(get_the_ID(), 'place', true);
                        if (!empty($place)) {
                            echo '<p class="blog__item-location">' . esc_html($place) . '</p>';
                        }
                        ?>
                        <p class="blog__item-comment">Comment (<?php echo get_comments_number(); ?>)</p>
                    </div>

                </div>
            </a>
<?php
        endwhile;
    else :
        echo 'No blog found';
    endif;

    wp_reset_postdata();

    die();
}

add_action('wp_ajax_get_destination_posts', 'get_destination_posts_callback');
add_action('wp_ajax_nopriv_get_destination_posts', 'get_destination_posts_callback');
