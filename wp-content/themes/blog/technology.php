<?php
// Template Name: technology page
get_header();?>


<main class="main-section">
    <!-- banner section -->
    <section class="slider-wrap common-padd">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="banner-content">
              <h1><?php the_field('tpageh1',8);  ?></h1>
              <p><?php the_field('tpageh3',8);  ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="banner-image">
              <img src="<?php the_field('tpageimage',8);  ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner section -->
    <section class="lead-generation technology-slider">
        <div class="container">
            <div class="technology-slide">
            <?php
$wppost=array('post_type'=>'post',
'post_status'=>'publish'
);
$postquery=new wp_query($wppost);
while ($postquery->have_posts()){
  $postquery->the_post();
$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');



?>
              <div class="tech-slide">

                  <div class="tech">
 
                      <div class="leader-generation-card-wrapper">

                          <div class="lead-icon">
                            <img src="<?php echo $imagepath[0]?>" alt="">
                          </div>
                          <div class="lead-content">
                            <h3><?php the_title()?></h3>
                            <p><?php the_excerpt();?></p>
                          </div>
                         
                        </div>
                      
                  </div>
                  
              </div>
              <?php } ?>
              </div>
             
        </div>
       
    </section>
    <section class="zigzag-section common-padd-small">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="zigzag-img">
                      <img src="<?php the_field('profile',8);  ?>" alt="">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="zigzag-content">
                      <h2><?php the_field('title',8);  ?></h2>
                      <p><?php the_field('paragraph',8);  ?></p>
                  </div>
              </div>
              <div class="col-md-12">
                <div class="validation-tool text-center">
                  <h2><?php the_field('heading',8);  ?></h2>
                  <div class="validation-slider">
                  <?php if( have_rows('technologysec4',8) ){
// Loop through rows.
while( have_rows('technologysec4',8) ){ 
  the_row();
  ?>
                    <div class="valid-item">
                      <div class="valid-wrap">
                        <img src="<?php echo get_sub_field('companyimg',8);?>" alt="">
                      </div>
                    </div>
              <?php } } ?>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="zigzag-img">
                    <img src="<?php the_field('image',8);  ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="zigzag-content">
                    <h2><?php the_field('heading1',8);  ?></h2>
                    <p><?php the_field('description',8);  ?></p>
                    <div class="brief-wrap">
                    <?php if( have_rows('details',8) ){
// Loop through rows.
while( have_rows('details',8) ){ 
  the_row();
  ?>
                      <div class="brief-wrap-item">
 
                        <div class="brief-icon">
                          <img src="<?php echo get_sub_field('logoTEnd',8);?>" alt="">
                        </div>
                        <div class="brief-content">
                          <h3><?php echo get_sub_field('titleTEnd',8);?></h3>
                          <p><?php echo get_sub_field('descriptionTEnd',8);?></p>
                        </div>
                        
                      </div>
                      <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>
  </main>







<?php get_footer();?>