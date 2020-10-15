<?php

// Setup
define( 'EL_DEV_MODE', true );

// Includes
include(get_theme_file_path( 'includes/front/enqueue.php' ));
include(get_theme_file_path( 'includes/setup.php' ));
include(get_theme_file_path( 'includes/contact-form.php' ));

// Hooks
add_action('wp_enqueue_scripts', 'el_enqueue');
add_action('after_setup_theme', 'el_setup_theme');
add_action('admin_post_nopriv_form-contacto', 'el_contact_capture');
add_action('admin_post_form-contacto', 'el_contact_capture');

// Shortcodes