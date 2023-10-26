<?php get_header(); ?>






       

  <!--content sction-->
  <main class="main-section">
    <section class="main-blogs common-padd">
      <div class="container">
        <div class="row">
             
           <div class="col-lg-8">
            <div class="blog-main-img">
                <?php $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
               // print_r($imagepath);
                
                ?>
              <img src="<?php echo $imagepath[0];?>" alt="">
            </div>
            <div class="blog-tag-wrap">
              <div class="blog-wrap">
              <?php  the_category(' '); ?>
              </div>
              <p>by <?php the_author();?> on <?php the_date();?></p>
            </div>
            <div class="blog-content">
              <h2><?php the_title();?></h2></h2>
              <p><?php the_excerpt();?></p>
              <h3>About The Lead Nurturing</h3>
            <?php the_content(); ?>
              <ul class="copyrht-menu">
                <p>Share:</p>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        
<div class="col-lg-4">

          




            <div class="search recent-post">

            
              <div class="search-box">
              
              
                <input type="text" size="20" name="search" id="s"/>
            </form>
              </div>
              <h2>Recent Post</h2>
              <div class="post-item">
             
              <?php $blog=get_terms(['taxonomy'=>'category','hide_empty'=>false]);
foreach($blog as $blogscat){

 
  
  $blogscat->term_id;
 
              ?>

                <a href="">
                  <h3><?php the_title();?></h3>
                </a>
                
                <div class="blog-tag-wrap">
                  <div class="blog-wrap">
                    <a href="#"><?php echo $blogscat->name;?></a>
                  </div>
                  <p><?php echo $catvalue->name;?></p>
                </div>
                <?php }  ?>
              </div>
             
            </div>
            <div class="search recent-post">
              <h2>Explore by Topic</h2>
              <?php $blog=get_terms(['taxonomy'=>'category','hide_empty'=>false,'orderby'=>'name',]);
             
foreach($blog as $blogscat){
 
  $catname =$blogscat->name;
                  $cat_link = get_category_link($blogscat->term_id);
                  
  // $blogscat->term_id;
              ?>
              <div class="blog-wrap">
                <a href="<?php echo $cat_link;?>">
               
                <?php echo $blogscat->name;?></a>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="pagination-wrapper">
            <ul>
              <li><a href="" class="btn solid-color"> << Previous </a></li>
              <li><a href="" class="btn solid-color"> Next >> </a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="comment-section work-with-us-section common-padd-btm">
        <div class="container">
            <h2>Leave A Comment</h2>
            <form>
                <div class="row">
                  <div class="col-lg-12 mb-4">
                    <label for="comment" class="form-label">Type your comment here **</label>
                    <input type="text" class="form-control" id="comment">
                  </div>
                  <div class="col-lg-6 col-md-6 mb-4">
                    <label for="name" class="form-label">Type your name here *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="col-lg-6 col-md-6 mb-4">
                    <label for="email" class="form-label">Type your email here *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="col-md-12 mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to terms and conditions
                        </label>
                      </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-btn">
                      <input type="submit" value="Submit" class="btn">
                    </div>
                  </div>
                </div>
              </form>
        </div>
    </section>
    <section class="recent-post common-padd-btm">
        <div class="container">
            <h2>Related Post</h2>
            <div class="row">
            <?php  $wpblogs=array(
            'post_type'=>'blogs',
           'post_status'=>'publish',
           'offset' => 1,
           

);
$blogsquery=new wp_query($wpblogs);
while ($blogsquery->have_posts()){
  $blogsquery->the_post();
$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');

 
        

?>  
                <div class="col-lg-4 col-md-6">
                    <div class="blogs">
                        <div class="blog-main-img"> $val=$blogscat->term_id;
     print_r($val);
                          <img src="<?php echo $imagepath[0]?>" alt="">
                        </div>
                        <div class="blog-inner-content">
                          <div class="blog-wrap">
                          <?php  the_category(' '); ?>
                          </div>
                          <h3><?php the_title()?></h3>
                          <p><?php the_excerpt() ?></p>
                          <p>by <?php the_author();?> on <?php the_date();?></p>
                          <a href="<?php echo the_permalink();?>">Read More >></a>
                        </div>
                      </div>
                </div>
                <?php } ?> $val=$blogscat->term_id;
     print_r($val);
        </div>
    </section>
  </main>
  
<?php get_footer(); ?>