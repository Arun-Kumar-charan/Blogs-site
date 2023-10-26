<?php
//Template Name: Partnerships page
get_header();
?>
<main class="main-section">
    <!-- banner section -->
    <section class="slider-wrap common-padd">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="banner-content">
              <h1><?php the_field('partnerships1stsectitle',14);  ?></h1>
              <p><?php the_field('partnerships1stsecnote',14); ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="banner-image">
              <img src="<?php the_field('partnerships1stsecbanner',14); ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner section -->
    <section class="marketing-partners-section">
        <div class="container">
            <div class="validation-tool text-center">
                <h2><?php the_field('partnerships2ndsecTitle',14); ?></h2>
                <div class="validation-slider">
                <?php if( have_rows('partnerships2ndsecslide',14) ){
// Loop through rows.
while (have_rows('partnerships2ndsecslide',14) ){ 
  the_row();
  ?>  
                  <div class="valid-item">
                    <div class="valid-wrap">
                      <img src="<?php echo get_sub_field('partnerships2ndsecslide1',14);?>" alt="">
                    </div>
                  </div>
                 <?php  } } ?>
                </div>
              </div>
        </div>
    </section>
    <section class="work-with-us-section common-padd-small">
        <div class="container">
            <div class="common-title text-center">
                <h2><?php the_field('partnershipssec3title',14);?></h2>
                <p><?php the_field('partnershipssec3Des',14);?></p>
            </div>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <?php echo do_shortcode('[contact-form-7 id="29349fe" title="Untitled"]'); ?>
                </div>
            </div>
        </div>
    </section>
  </main>
  <!--content sction-->







<?php
get_footer()
?>
