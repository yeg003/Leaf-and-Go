<footer> 
    <div id="footer">
        <div class="footer-container">
            <div class="footer-box1">
                <img src="<?php echo get_theme_file_uri("/images/leaf-go-logo-footer.png");?>" alt="Footer logo">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                <div class="social-links">
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                </div>

            </div>
            <div class="footer-box2">
                <h2 class="footer-header">Contact Info</h2>
                <div class="footer-box2-text">
                    <p class="text-padding">Adress: </p>
                    <p> 123 Main St, Miami, Fl 33130</p>
                </div>
                <div class="footer-box2-text">
                    <p class="text-padding">Office: </p>
                    <p> (123) 123 1234</p>
                </div>
                <div class="footer-box2-text">
                    <p class="text-padding">Fax: </p>
                    <p> (123) 123 1234</p>
                </div>
                <div class="footer-box2-text">
                    <p class="text-padding">Email: </p>
                    <p> leaf&go@gmail.com</p>
                </div>
            </div>
            <div class="footer-box3">
                <h2 class="footer-header">Opening Hours</h2>
                <div class="footer-box3-text">
                    <p class="text-padding">Mon-Thu: </p>
                    <p> 08:00 - 5:00</p>
                </div>
                <div class="footer-box3-text">
                    <p class="text-padding">Fri: </p>
                    <p> 9:00 - 6:00</p>
                </div>
                <div class="footer-box3-text">
                    <p class="text-padding">Sat: </p>
                    <p> 08:00 - 4:00</p>
                </div>
                <div class="footer-box3-text">
                    <p class="text-padding">Sun: </p>
                    <p> Closed</p>
                </div>
            </div>

            <div class="footer-box4">
                <?php 
                    wp_nav_menu( array( 
                        'theme_location' => 'secondary' ) ); 
                ?>
            </div>

        </div>
    </div>


</footer>
<?php wp_footer(); ?>
    </body>
</html>