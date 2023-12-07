<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= the_title() ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header__inner">
                        <a href="/" class="header__logo">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if (has_custom_logo()) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                            } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                            }
                            ?>
                        </a>

                        <nav class="header__nav">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'container'      => false,
                            ));
                            ?>
                        </nav>

                        <button class="hamburger" type="button">
                            <span></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </header>