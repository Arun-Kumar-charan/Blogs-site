


<?php
echo get_header();
$res= get_queried_object();
//print_r($res);
?>

<main class="main-section">
    <section class="main-blogs common-padd">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
           
            <div class="blog-content">
         
              <div class="row">
                
                <?php
                  $args = array(  
                    'post_type' => 'blogs',
                    'post_status' => 'publish',
                     'tax_query'=>array(
                        array(
                            'taxonomy'=>'category',
                            'field'=>'term_id',
                            'terms'=>$res->term_id
                        ),
                     )
                  
                );
                
                $news= new WP_Query($args); 
                while ($news->have_posts() ) :  $news->the_post()
                ?>

                <div class="col-md-6">
                  <div class="blogs">
                    <div class="blog-main-img">
                      <?php $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
                      //print_r($imagepath[0]);
                      ?>
                      <img src="<?php echo $imagepath[0];?>" alt="">
                    </div>
                    <div class="blog-inner-content">
                      <div class="blog-wrap">
                      <?php  the_category(' '); ?>
                      </div>
                      <h3><?php echo the_title(); ?></h3>
                      <p><?php the_excerpt(); ?></p>
                      <p>by <?php echo the_author();?> <?php echo get_the_date();?></p>
                      <a href="<?php the_permalink();?>">Read More >></a>
                    </div>
                  </div>
                </div>
                <?php  endwhile; ?>
              </div>
            </div>
          </div> 
          <div class="col-lg-4">
            <div class="search recent-post">

            
              <div class="search-box">
              <!-- <form method="get" id="searchform" action="<?php echo site_url(); ?>">
                <input type="text" size="20" name="s" id="s" value="<?php _e('Search') ?>..."
                    onblur="if(this.value=='')this.value='<?php _e('Search') ?>...';"
                    onfocus="if(this.value=='<?php _e('Search') ?>...')this.value='';" />
            </form> -->
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
             
             foreach($blog as $totalblogs){     
    
                ?>
                <div class="blog-wrap">
                  <a href="<?php echo get_category_link($totalblogs->term_id);?>">
                 
                  <?php echo $totalblogs->name;?></a>
                </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php echo get_footer();?>