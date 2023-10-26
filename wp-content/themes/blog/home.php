<?php
//Template Name:home page
get_header();

?>

   <!--content sction-->
   <main class="main-section">
    <section class="slider-wrap common-padd">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="banner-content">
              <h1><?php the_field('heading',6);  ?></h1>
              <p><?php the_field('peragraph',6);  ?></p>
              <div class="banner-btn">
                <a href="" class="btn">Get Started</a>
                <a href="" class="btn solid-color">Stay Connected</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="banner-image">
              <img src="<?php the_field('img',6);  ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="lead-generation common-padd-small">
      <div class="container">
        <div class="common-title text-center">
          <h2><?php the_field('home2h2',6);  ?></h2>
          <p><?php the_field('home2h3',6);  ?></p>
        </div>

        <div class="row">
        <?php
$wppiller=array('post_type'=>'pillar',
'post_status'=>'publish'
);
$postquery=new wp_query($wppiller);
while ($postquery->have_posts()){
  $postquery->the_post();
$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');



?>
          <div class="col-lg-4 col-md-6">
          
            <div class="leader-generation-card-wrapper">

              <div class="lead-wrap">
  
                <div class="lead-icon">
                  <img src="<?php echo $imagepath[0]?>" alt="">
                </div>
                <div class="lead-content">
                  <h3><?php the_title()?></h3>
                  <p><?php the_excerpt();?></p>
                 
                 
                  <div class="more-btn">
                    <a href="" class="btn">Learn More</a>
                    
                  </div>
                
                </div>
                
              
              </div>
             
            </div>
            
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <section class="services-section">
      <!-- <div class="bg-banner">
        <img src="images/generation-bg.svg" alt="">
      </div> -->
   
        <ul>
        <?php if( have_rows('homeendsection',6) ){
// Loop through rows.
while( have_rows('homeendsection',6) ){ 
  the_row();
  ?>
          <li>

            <div class="service-wrap text-center">
 
            <div class="container">
 

              <div class="service-icon">
                <img src="<?php echo get_sub_field('image',6);?>" alt="">
              </div>
              <div class="service-content">
                <h3><?php echo get_sub_field('heading',6);?></h3>
              </div>
              
            
            
            </div>

          </li>
          </div><?php } } ?>
        </ul>
     
 
      
    </section>
  </main>
  <!--content sction-->
  <!--content sction-->
  <?php
  get_footer();
  ?>