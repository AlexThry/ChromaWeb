<?php

function chromaweb_files()
{
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/src/css/output.css');


    wp_enqueue_script('app', get_template_directory_uri() . '/src/js/app.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'chromaweb_files');

function chromaweb_features()
{
    add_theme_support('title-tag');
    
}

function get_majs($string)
{
    $new_string = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        if ($char == strtoupper($char)) {
            $new_string .= $char;
        }
    }
    return $new_string;
}
