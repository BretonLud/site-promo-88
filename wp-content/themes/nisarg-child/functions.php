<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles(){
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


function my_custom_scripts() {
    wp_enqueue_script( 'parent-style', get_stylesheet_directory_uri() . '/dist/main.js', '','',true);
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

if ( function_exists('register_sidebar') )
    register_sidebar( array(
            'name'       => __( 'Footer Top', 'nisarg' ),
            'id'     => 'footer_top',
            'description'    => __( 'Add widgets here to appear above your footer.', 'virtue' ),
            'before_widget' => '<aside id="%1$s" class="newsL %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );