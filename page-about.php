<?php get_header();?>

<?php 
    if(have_posts() ):
        while(have_posts() ): the_post();?>
           <?php /*<h3><?php the_title();?></h3>*/?>
             <?php the_content();?>
<?php  endwhile;
    endif;
?>

<div id="about-section">
    <div class="about-title">
        <h3 class= "header-text center">About Us</h3>
        <img class ="center"src="<?php echo get_theme_file_uri( '/images/divider-img.png' )?>" alt="divider image">
    </div>

    <div class="about-container">
        <div class="about-left">
            <img src="<?php echo get_theme_file_uri("/images/about-img.jpg");?>" alt="">
        </div>

        <div class="about-right">
            <h2>We Have 20 Years Experience</h2>
            <p id="about-sub-text">"We are Leaf & Go Landscaping"</p>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus.</p>
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

    <div id="team-section">
        <h3 class= "header-text center">Meet Our Team</h3>
        <img class ="center"src="<?php echo get_theme_file_uri( '/images/divider-img.png' )?>" alt="divider image">
        
        <div class="team-container">
            <div class="team-box">
                <img src="<?php echo get_theme_file_uri('/images/team01.jpg' ) ?>" alt="team1">
                <h1 class="member-title">Jon Doe</h1>
                <p class="member-sub-title">CEO & Founder</p>
                <p class="member-text">Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
            </div>
            <div class="team-box">
                <img src="<?php echo get_theme_file_uri('/images/team02.jpg' ) ?>" alt="team1">
                <h1 class="member-title">DANIEL DOEL</h1>
                <p class="member-sub-title">Landscaper Specialist</p>
                <p class="member-text">Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
            </div>
            <div class="team-box">
                <img src="<?php echo get_theme_file_uri('/images/team03.jpg' ) ?>" alt="team1">
                <h1 class="member-title">Jane Doe</h1>
                <p class="member-sub-title">Coordinator Team</p>
                <p class="member-text">Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
            </div>
            <div class="team-box">
                <img src="<?php echo get_theme_file_uri('/images/team04.jpg' ) ?>" alt="team1">
                <h1 class="member-title">Thomas Doe</h1>
                <p class="member-sub-title">Landscaper Specialist</p>
                <p class="member-text">Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.</p>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>