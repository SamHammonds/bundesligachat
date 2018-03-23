<?php /* Template Name: All Posts */ ?>
<?php get_header(); ?>

<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $original_query = $wp_query;
  $wp_query = null;
  $args=array('posts_per_page'=>50, 'paged'=>$paged);
  $wp_query = new WP_Query( $args );
 ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>All Posts</h1>
    </div>
  </div>
   <div class="row">
     <div class="col-sm-10">
       <div class="row">
           <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="col-sm-6">
                <a class="post-link" href="<?php echo get_permalink(); ?>">
                <div class="post">
                  <div class="post-image">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="post-title">
                  <h1><?php the_title(); ?></h1>
               <div class="post-excerpt">
                 <p><?php the_excerpt(); ?><p>
               </div>
                </div>
               </div>
             </a>
              </div>
            <?php endwhile; ?>
           <?php endif; ?>
       </div>
   </div>
     <div class="col-sm-2">
<?php get_template_part("template-parts/sidebar"); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
