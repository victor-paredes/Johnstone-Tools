<?php

// add stylesheets
wp_enqueue_style ('theme-style', get_template_directory_uri().'/css/johnstone.css');
do_action ('admin_enqueue_scripts', get_template_directory_uri().'/css/johnstone.css');
?>