<?php

wp_enqueue_style ('theme-style', get_template_directory_uri().'/css/johnstone.css');
wp_enqueue_style ('my-style', get_template_directory_uri().'/css/johnstone.css', array('theme-style'));

?>