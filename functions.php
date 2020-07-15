<?php 
    function leafgo_files(){
        //wp_enqueue_style( 'leaf&go styles' , get_template_directory_uri() . '/css/leafgo.css', array(),'1.0', 'all');
        wp_enqueue_style("leaf&go styles", get_stylesheet_uri(), NULL, microtime());
        wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    }

    add_action("wp_enqueue_scripts", "leafgo_files");
?>