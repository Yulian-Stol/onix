<?php
/* Template name: destination */
?>

<?php get_header(); ?>

<div class="hero-banner">
    <div class="container">
        <h1>Destination</h1>
        <img src="<?= assets("img/hero-banner.jpg") ?>" alt="" class="hero-banner__bg">
    </div>
</div>


<div class="content-page">
    <section class="destination-tabs">
        <div class="container">
            <ul class="destination-tabs__title">
                <?php
                $categories = get_terms('destination-cat');
                foreach ($categories as $category) {
                    echo '<li data-category="' . $category->slug . '">' . $category->name . '</li>';
                }
                ?>
            </ul>
            <div class="destination-tabs__list blog"></div>
        </div>
    </section>
</div>

<?= get_template_part('template-parts/blocks/follow'); ?>

<?= get_template_part('template-parts/blocks/subscribe'); ?>

<?php get_footer(); ?>