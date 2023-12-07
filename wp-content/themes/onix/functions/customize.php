<?php

function custom_theme_customize_register($wp_customize)
{
    $wp_customize->add_section('custom_logo_section', array(
        'title'    => __('Логотип', 'text-domain'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('custom_logo', array(
        'default'           => '',
        'transport'         => 'refresh',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'custom_logo', array(
        'label'    => __('Виберіть логотип', 'text-domain'),
        'section'  => 'custom_logo_section',
        'settings' => 'custom_logo',
    )));
}
add_action('customize_register', 'custom_theme_customize_register');
