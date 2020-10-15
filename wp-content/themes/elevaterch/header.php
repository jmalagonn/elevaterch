<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset') ?>" />

    <!-- Stylesheets -->
    <?php wp_head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body <?php body_class() ?>>
    <?php get_template_part('partials/icons/defs-icons') ?>
    <header class="desktop-header <?php echo (is_user_logged_in() ? 'admin' : ''); ?>">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <div class="col-6 text-right">
                    <?php

                    if (has_nav_menu('main_menu')) {
                        wp_nav_menu(array(
                            'theme_locaction' => 'main_menu'
                        ));
                    }

                    ?>
                </div>
            </div>
        </div>
    </header>

    <div class="icon-whatsapp">
        <a href="https://wa.me/573112890608" target="_blank">
            <svg width="50px" height="50px">
                <use href="#whatsapp-icon" />
            </svg>
        </a>
    </div>