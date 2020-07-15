<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name');?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head();?>
    </head>
<header>
    <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="<?php echo get_theme_file_uri("/images/leaf-go-logo.png");?>" alt="Logo"></a>
                
            </div>
<?php
    wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'header-links' ) ); 
?>
<?php
/*
            <div class="header-links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Contact</a></li>
                
            </ul>
        </div>
*/
?>

            <div class="header-btn">
                <a href="#">Get Free Quote</a>
            </div>
    </div>

</header>