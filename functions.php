<?php

function ringi_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'ringi_theme_support');