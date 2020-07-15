<?php get_header();?>

<body>
<div id="hero">
    <img src="<?php echo get_theme_file_uri("/images/hero-img.png");?>" alt="Hero image">
    <div class="hero-wrapper">
        <p class="banner">The Best Landscaping in South Florida</p>
        <h1>We Are Leaf & Go </h1>
        <p class="hero-text">Your full service lawn care company</p>
        <div class="hero-btns">
            <a class= "hero-btn-left"href="#">More About us</a>
            <a class= "hero-btn-right" href="#">Hire Us Now</a>
        </div>

    </div>
</div>

<div id="why-choose-us">
    <h3 class= "header-text">Why Choose Us?</h3>
    <img src="<?php echo get_theme_file_uri( '/images/divider-img.png' )?>" alt="divider image">
    <p class="sub-header-text">Every client is very important to us and we always take care of them seriously.</p>
    <div class="why-choose-us-box-wrapper">
        <div class="why-choose-us-box1 why-content">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <h4>The Best in South Florida</h4>
            <p class="why-choose-us-text">Dolor sit amet dolor gravida placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="why-choose-us-box2 why-content">
            <i class="fa fa-certificate" aria-hidden="true"></i>
            <h4>Certified Expert</h4>
            <p class="why-choose-us-text">Dolor sit amet dolor gravida placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="why-choose-us-box3 why-content">
            <i class="fa fa-money" aria-hidden="true"></i>
            <h4>Affordable Pricing</h4>
            <p class="why-choose-us-text">Dolor sit amet dolor gravida placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="why-choose-us-box4 why-content">
            <i class="fa fa-star" aria-hidden="true"></i>
            <h4>High Quality Services</h4>
            <p class="why-choose-us-text">Dolor sit amet dolor gravida placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
    </div>
</div>

<div id="cta-section">
    <div class="cta-left">
        <h2>Have Problem with your Gardening?</h2>
        <p>Sed orci dolor, pulvinar nec luctus a, malesuada ac nisl. Aliquam eleifend et dui et suscipit. Nam semper accumsan ante, ac dapibus urna dapibus et.</p>
        <a class= "cta-btn"href="#">Get Free Quote</a>
    </div>
    <div class="cta-right">
        <img src="<?php echo get_theme_file_uri('/images/cta-img.png')?>;" alt="">
    </div>
</div>

<div id="our-services">
    <h3 class="header-text">Our Services</h3>
    <img src="<?php echo get_theme_file_uri("/images/divider-img.png");?>" alt="">
    <p class="sub-header-text">Every client is very important to us and we always take care of them seriously.</p>
    <div class="services-box-wrapper">
        <div class="service-box1">
            <img src="<?php echo get_theme_file_uri('/images/services-img-1.jpg')?>" alt="">
            <h4 class="service-text">Landscape Design</h4>
            <p class="sub-header-text">Dolor sit amet dolor gravida placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="service-box2">
            <img src="<?php echo get_theme_file_uri('/images/services-img-2.jpg');?>" alt="">
            <h4 class="service-text">Planting & Removal</h4>
            <p class="sub-header-text">Dolor sit amet dolor gravida placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
        <div class="service-box3">
        <img src="<?php echo get_theme_file_uri('/images/services-img-3.jpg')?>;" alt="">
            <h4 class="service-text">Garden Care</h4>
            <p class="sub-header-text">Dolor sit amet dolor gravida placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
        </div>
    </div>
</div>

<div id="recent-work">
    <h3 class="header-text">Our Services</h3>   
    <img src="<?php echo get_theme_file_uri('/images/divider-img.png');?>" alt="">
</div>




<?php get_footer();?>