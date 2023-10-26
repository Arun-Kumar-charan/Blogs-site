 <!--footer section-->
 <footer>
    <div class="ftr-top">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3">
            <div class="ftr-logo">
              <a href="#"><img src="<?php echo get_theme_value('bc_footer_logo');?>" alt=""></a>
            </div>
          </div>
          <div class="ms-auto col-xl-7 col-lg-9">
            <div class="ftr-email">
              <h3><?php echo get_theme_value('bc_footer_menu_subscribe')?></h3>
              <div class="email">
                <input type="email" placeholder="Enter your email address …">
                <input type="submit" class="btn" value="Subscribe Now">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ftr-mid">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="ftr-col">
              <h3><?php echo get_theme_value('bc_footer_desc_title')?></h3>
              <p><?php echo get_theme_value('bc_footer_desc')?></p></p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftr-col">
              <h3><?php echo get_theme_value('bc_footer_menu_quick_links')?></h3>
              <div class="ftr-menu">
                <ul>
                 <?php
                 wp_nav_menu(array('theme_location'=>'footermenu'))
                 ?>
                </ul>
              </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="ftr-col">
                <h3><?php echo get_theme_value('bc_footer_getin_title')?></h3> 
                <div class="ftr-menu">
                  <ul>
                    <li><a href="https://www.linkedin.com/company/intelhouse-marketing" target="_blank"><?php echo get_theme_value('bc_footer_location_title')?></a></li>
                    <li><a href="#">Office: <?php echo get_theme_value('bc_phone_number')?></a></li>
                    <li><a href="#">Email: <?php echo get_theme_value('bc_email_address')?></a></li>
                  </ul>
                </div>
                </div>
            </div>
            <div class="col-md-3">
              <div class="ftr-col">
                <h3><?php echo get_theme_value('right_section_title')?></h3>
                <div class="ftr-menu">
                  <ul>
                    <li><a href="#"><?php echo get_theme_value('link1')?></a></li>
                    <li><a href="#"><?php echo get_theme_value('link2')?></a></li>
                    <li><a href="#"><?php echo get_theme_value('link3')?></a></li>
                  </ul>
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ftr-btm">
        <div class="container">
            <div class="ftr-btm-wrap">
              <ul class="copyrht-menu">
                <p>Follow Us:</p>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
              <p>Copyrights © 2022 <a href="">Intel House</a>. All Right Reserved</p>
            </div>
        </div>
      </div>
  </footer>
<?php wp_footer(); ?>

</body>

</html>