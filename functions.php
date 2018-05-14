<?php
    function my_university_files(){
        wp_enqueue_style ('university_main_styles', get_stylesheet_uri());
        wp_enqueue_style ('custom-google-font', '//fonts.googleapis.com/css?family=Open+Sans');
        wp_enqueue_script ('university_main_script', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'my_university_files');
?>