
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php wp_title()?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/AkiraExpanded-SuperBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--header sction-->

<header class="main-header">
    <div class="navbar-menu container-fluid header-row common-padd-lt-rt">
      <!-- <div class="header-search">
        <a href="#"><img src="./images/search.png" alt=""></a>
      </div> -->
      <div class="logo">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_value('driverite_header_logo');?>" alt=""></a>
      </div>
      <div class="hdr-rt">
        <div class="main-menu">
          <div class="nav_close" onclick="menu_close()">
            <i class="far fa-times-circle"></i>
          </div>
          <ul>
                <?php
                wp_nav_menu(array('theme_location'=>'mainmenue'));
           ?>
           </ul>
        </div>
        <div class="hdr-rt-log-reg desktop">
          <ul>
            <li><a href="" class="btn">Contact</a></li>
          </ul>
        </div>
        <div onclick="menu_open()" class="nav_btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </div>


  </header>
  <!--header sction-->