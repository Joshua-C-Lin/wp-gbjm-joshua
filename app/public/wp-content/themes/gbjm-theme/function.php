<?php
    function theme_files() {
        wp_enqueue_style('main-style', get_template_directory_uri());
    }

    add_action("wp_enqueue_scripts", "theme_files");


    function theme_features() {
        add_theme_support('title');
        add_theme_support('post-thumbnails');
    }

    add_action("after_setup_theme", "theme_features");
