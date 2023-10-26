<?php
//Template Name: Article page
get_header();

?>
<main class="main-section">
    <section class="main-blogs common-padd">
      <div class="container">
 
        <div class="row">
 
        <?php  $wpblogs=array('post_type'=>'blogs',
'post_status'=>'publish'
);
$blogsquery=new wp_query($wpblogs);
while ($blogsquery->have_posts()){
  $blogsquery->the_post();
$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');

?>
          <div class="col-lg-8">

            <div class="blog-main-img">
              <img src="<?php echo $imagepath[0]?>" alt="">
            </div>
            <div class="blog-tag-wrap">
              <div class="blog-wrap">
              <?php  the_category(' '); ?>
              </div>
              <p>by <?php the_author();?> on <?php the_date();?></p>
            </div>
            <div class="blog-content">
              <h2><?php the_title()?></h2>
              <p><?php the_excerpt();?></p>
              <a href="<?php echo the_permalink();?>">Read More >></a>
              <?php break ;?>
              <?php } ?>

          <?php    $searchData='';
if($_GET['title']!=""){
$searchData=$_GET['title'];
}?>
<?php  $paged= get_query_var('paged') ? get_query_var( 'paged') : 1;

?>


              <div class="row">
        
            <?php  $wpblogs=array(
            'post_type'=>'blogs',
           'post_status'=>'publish',
           's'=>$searchData,
           'posts_per_page'=>2,
           'paged'=>$paged,
        

);
$blogsquery=new wp_query($wpblogs);

while ($blogsquery->have_posts()){
  $blogsquery->the_post();
$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');

 
        

?>            
              
                <div class="col-md-6">
       

                  <div class="blogs">
            
                    <div class="blog-main-img">
                      <img src="<?php echo $imagepath[0]?>" alt="">
                    </div>

            
                    <div class="blog-inner-content">

                      <div class="blog-wrap">

                      <?php  the_category(''); ?>

                      </div>
                      <h3><?php the_title()?></h3>
                      <p><?php the_excerpt();?></p>
                      <p><?php the_date();?></p>
                      <a href="<?php echo the_permalink();?>">Read More >></a>
                    </div>
                  
                  </div>
                 
                </div>
                <?php } ?>
               
              </div>
           
            </div>
          </div>
        
          <div class="col-lg-4">
            <div class="search recent-post">

              <div class="search-box">
              <form method="get"  >
<input type="text" placeholder="search" name="title" value="<?php echo $_GET['title']; ?>"/>
<button>submit</button>
              </form>
              
              </div>
              <h2>Recent Post</h2>
              <div class="post-item">
            
              <?php $blog=get_terms(['taxonomy'=>'category','hide_empty'=>false]);
foreach($blog as $blogscat){

 
  
  $blogscat->term_id;
 
              ?>

                <a href="<?php the_permalink(); ?>">
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
          
          <div class="pagination-wrapper">
          <?php wp_pagenavi(array('query'=>$blogsquery)); ?>
         
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--content sction-->
dfgnfghfghgjhgjhkjhkjhkjhkjlkjlkjlklkl
  <?php get_footer();?>




